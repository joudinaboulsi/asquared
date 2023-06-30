<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
class PortfolioController extends Controller
{  

       public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    
    
    public function index(){
        $portfolio= Portfolio::all();
        return view('cms.portfolio.index',compact('portfolio'));
    }
      
    // create
    public function create(){
        return view('cms.portfolio.create');
    }


    public function store(Request $request){
        $newPhoto='';
        if($request->hasFile('image')){
             $photo = $request->file('image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/portfolio/', $newPhoto);
        
        }

        Portfolio::insert([
            'title'=>$request->title,
            'image' =>$newPhoto 
        ]);
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('portfolio');

    }

    // edit
    public function edit($id){
        $portfolio= Portfolio::find($id);
        return view('cms.portfolio.edit',compact('portfolio'));
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
            $photo->move('assets/portfolio/', $newPhoto);
        Portfolio::where('id',$id)->update([
       'image' =>$newPhoto 
        ]);
        }

         Portfolio::where('id',$id)->update([
            'title'=>$request->title,
          
        ]);
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('portfolio');

    }

    public function delete($id){
        Portfolio::find($id)->delete();
         toastr()->success('Data has been deleted  successfully!', 'Congrats');
        return redirect()->route('portfolio');
    }
}
