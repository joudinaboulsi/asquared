<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $categories = Category::all();
        return view('cms.categories.index',compact('categories'));
    }


    public function create(){
        return view('cms.categories.create');

    }


    public function store(Request $request){
          $filename='';
        if ($request->hasFile('pdf') ) {
             $file = $request->file('pdf');
            $filename =time() . $file->getClientOriginalName();
            $file->move('assets/pdf/', $filename);
        }

                $newPhoto='';
        if($request->hasFile('image')){
             $photo = $request->file('image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/categories/', $newPhoto);
      
        }

        Category::insert([
            'title'=>$request->title,
            'image' =>$newPhoto ,
            'pdf'=>$filename,
        ]);
           toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('categories');

        
    }

    public function edit($id){
        $category= Category::Find($id);
        return view('cms.categories.edit',compact('category'));
    }


     public function update(Request $request,$id){
          $filename='';
        if ($request->hasFile('pdf') ) {
             $file = $request->file('pdf');
            $filename =time() . $file->getClientOriginalName();
            $file->move('assets/pdf/', $filename);

              Category::where('id',$id)->update([
           
            
            'pdf'=>$filename,
        ]);
        }

                $newPhoto='';
        if($request->hasFile('image')){
             $photo = $request->file('image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/categories/', $newPhoto);
         Category::where('id',$id)->update([
           
            'image' =>$newPhoto ,
           
         ]);
        }

         Category::where('id',$id)->update([
            'title'=>$request->title,
            
        ]);
           toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('categories');

        
    }

       public function delete($id){
        Category::find($id)->delete();
         toastr()->success('Data has been deleted  successfully!', 'Congrats');
        return redirect()->route('categories');
    }
}
