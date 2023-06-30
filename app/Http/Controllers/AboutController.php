<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
class AboutController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){
        $about = About::where('id',1)->first();
        return view('cms.about',compact('about'));
    }

    public function update(Request $request,$id)

    {
            $newicon1='';
           if($request->hasFile('icon1')){
              $photo = $request->file('icon1');
                $newicon1 = str_replace(
                    '/[^A-Za-z0-9]/',
                    '-',
                    time() . $photo->getClientOriginalName()
                );
                $photo->move('assets/icons/', $newicon1);
                    About::where('id',$id)->update([
                  'icon1'=>  $newicon1,
                    ]);
            }

             $newicon2='';
           if($request->hasFile('icon2')){
              $photo1 = $request->file('icon2');
                $newicon2 = str_replace(
                    '/[^A-Za-z0-9]/',
                    '-',
                    time() . $photo1->getClientOriginalName()
                );
                $photo1->move('assets/icons/', $newicon2);
                    Client::where('id',$id)->update([
                  'icon2'=>$newicon2,
                    ]);
            }

                $newicon3='';
           if($request->hasFile('icon3')){
              $photo2 = $request->file('icon3');
                $newicon3 = str_replace(
                    '/[^A-Za-z0-9]/',
                    '-',
                    time() . $photo2->getClientOriginalName()
                );
                $photo2->move('assets/icons/', $newicon3);
                    About::where('id',$id)->update([
                  'icon3'=>$newicon3,
                    ]);
            }

           $newbacground1='';
           if($request->hasFile('background1')){
              $bg = $request->file('background1');
                $newbacground1 = str_replace(
                    '/[^A-Za-z0-9]/',
                    '-',
                    time() .  $bg->getClientOriginalName()
                );
                 $bg->move('assets/bg/', $newbacground1);
                    About::where('id',$id)->update([
                  'background1'=> $newbacground1,
                    ]);
            }

           $newbacground2='';
           if($request->hasFile('background2')){
              $bg1 = $request->file('background2');
                $newbacground2 = str_replace(
                    '/[^A-Za-z0-9]/',
                    '-',
                    time() .  $bg1->getClientOriginalName()
                );
                 $bg1->move('assets/bg/', $newbacground2);
                    About::where('id',$id)->update([
                  'background2'=> $newbacground2,
                    ]);
            }

             $newbacground3='';
           if($request->hasFile('background3')){
              $bg2 = $request->file('background3');
                $newbacground3 = str_replace(
                    '/[^A-Za-z0-9]/',
                    '-',
                    time() .  $bg2->getClientOriginalName()
                );
                 $bg2->move('assets/bg/', $newbacground3);
                    About::where('id',$id)->update([
                  'background3'=> $newbacground3,
                    ]);
            }

                     $newbackground4='';
                if($request->hasFile('background4')){
              $bg3 = $request->file('background4');
                $newbackground4 = str_replace(
                    '/[^A-Za-z0-9]/',
                    '-',
                    time() .  $bg3->getClientOriginalName()
                );
                 $bg3->move('assets/bg/', $newbackground4);
                    About::where('id',$id)->update([
                  'background4'=> $newbackground4,
                    ]);
            }



        About::where('id','1')->update([
            'description'=>$request->description,
            
         
            'title1'=>$request->title1,
            'description1'=>$request->description1,
            
           
            'title2'=>$request->title2,
            'description2'=>$request->description2,

            'title3'=>$request->title3,
            'description3'=>$request->description3,
           
            'title4'=>$request->title4,
            'description4'=>$request->description4,
          
        ]);

         toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('about');

    }
}
