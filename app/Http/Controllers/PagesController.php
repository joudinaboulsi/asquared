<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use Mail;
use App\Home;
use App\About;
use App\SectionPage;
use App\Category;
use App\portfolio;
use App\CLient;
use App\Settings;
use App\SeoPage;
use SEO;
use SEOMeta;
class PagesController extends Controller
{

      public function __construct()
    {
         app()->singleton('contact', function(){
            $settings = Settings::where('id','1')->get();
            return $settings[0];
        });
      
    }


      public function setSeo($page_data)
    {
        //get url of the page
        $url = url()->current();

        SEO::setTitle($page_data->meta_title, false);
        SEO::setDescription($page_data->meta_description, false);
        SEOMeta::setKeywords($page_data->meta_keywords, false);
        SEO::opengraph()->setUrl($url);
        SEO::setCanonical($url);
        SEO::opengraph()->addProperty('type','article');  
        SEO::twitter()->setSite('@'.app('contact')->fb);

        if($page_data->image != NULL) // check if we have an OG image
            SEO::addImages(getenv('APP_URL').'/assets/seo/'.$page_data->og_image); 
    }

    //home page
    public function home()
    {      
         $page_data = SeoPage::where('id','1')->get();
        $this->setSeo($page_data[0]);
        $home= Home::where('id','1')->get();
        $about= About::where('id','1')->get();
        $sections= SectionPage::all();
        $categories= Category::all();
        $portfolio= Portfolio::all();
        $clients= CLient::all();
        return view('homepage',compact('home','about','sections','categories','portfolio','clients'));
    }

    //send contact email
    public function getFormContactUs(Request $request)
    {
        $name = $request->input('form_name');
        $email = $request->input('form_email');
        $subject = $request->input('form_subject');
        $msg_client = $request->input('form_message');
        // initialize an instance of Nocaptcha
        $captcha = new \Anhskohbo\NoCaptcha\NoCaptcha(env('NOCAPTCHA_SECRET'), env('NOCAPTCHA_SITEKEY'));

        // if the captcha is checked
        if (! empty($_POST)) 
        {
            $captcha_resp = $captcha->verifyResponse($_POST['g-recaptcha-response']);

            if($captcha_resp == true)
            {
                Mail::send('emails.contact', array('name' => $name, 'email' => $email, 'subject' => $subject, 'msg_client' => $msg_client), function($message) use ($name, $email, $subject)
                {
                    $message->from($email, $name);
                    $message->to('info@a2-promo.com')->subject($subject);
                });

                \Session::flash('msg', 'Message sent!' );
                return redirect()->to(app('url')->previous()."#contact_form");
            }
        }
    }

}