<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
class HomeCmsController extends Controller
{

       public function __construct()
    {
        $this->middleware('auth');
    }

    
        public function index(){
           $home= Home::where('id','1')->first();
        return view('cms.home_section',compact('home'));
    }

    public function update(Request $request,$id){
         $newPhoto='';
        if($request->hasFile('image')){
             $photo = $request->file('image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/bg/', $newPhoto);
        Home::where('id',$id)->update([
       'image' =>$newPhoto 
        ]);
        }
      
      
        Home::where('id','1')->update([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'main_title'=>$request->main_title,
        ]);

         toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('homeCms');

    }
}
