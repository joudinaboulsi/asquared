<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
class ClientsController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $clients= Client::all();
        return view('cms.clients.index',compact('clients'));
    }
      
    // create
    public function create(){
        return view('cms.clients.create');
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
            $photo->move('assets/clients/', $newPhoto);
        
        }

        Client::insert([
            'title'=>$request->title,
            'image' =>$newPhoto 
        ]);
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('clients');

    }

    // edit
    public function edit($id){
        $client= Client::find($id);
        return view('cms.clients.edit',compact('client'));
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
            $photo->move('assets/clients/', $newPhoto);
        Client::where('id',$id)->update([
       'image' =>$newPhoto 
        ]);
        }

         Client::where('id',$id)->update([
            'title'=>$request->title,
          
        ]);
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('clients');

    }

    public function delete($id){
        Client::find($id)->delete();
         toastr()->success('Data has been deleted  successfully!', 'Congrats');
        return redirect()->route('clients');
    }
}
