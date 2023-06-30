<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
use App\SeoPage;
class AdminController extends Controller
{

       public function __construct()
    {
        $this->middleware('auth');
    }
    //
      public function settings(){
           $settings= Settings::where('id','1')->first();
        return view('cms.settings',compact('settings'));
    }

    public function update(Request $request,$id){

          $newPhoto='';
        if($request->hasFile('logo')){
             $photo = $request->file('logo');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/logo/', $newPhoto);
            Settings::where('id','1')->update([
                 'logo' =>$newPhoto 
            ]);
        }
        Settings::where('id','1')->update([
            'country'=>$request->country,
            'address'=>$request->address,
            'link_phone1'=>$request->link_phone1,
            'phone1'=>$request->phone1,
            'phone2'=>$request->phone2,
            'link_phone2'=>$request->link_phone2,
            'email1'=>$request->email1,
            'email2'=>$request->email2,
            'email3'=>$request->email3,
            'fb'=>$request->fb,
            'insta'=>$request->insta,
          
        ]);

         toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('settings');

    }



    // seo 


       public function index()
    {

        $seo = SeoPage::where('id','1')->first();
            return view('cms.seo',compact('seo'));
    }


    public function update_seo(Request $request,$id){
          if($request->hasFile('og_image')){
             $photo = $request->file('og_image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/seo/', $newPhoto);
        SeoPage::where('id',$id)->update([
       'og_image' =>$newPhoto 
        ]);
        }

         SeoPage::where('id',$id)->update([
            'meta_title'=>$request->meta_title,
            'meta_description'=>$request->meta_description,
            'meta_keywords'=>$request->meta_keywords,
          
        ]);
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('seo');


    }
}
