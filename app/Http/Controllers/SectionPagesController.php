<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SectionPage;
class SectionPagesController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
           $section= SectionPage::where('id','1')->first();
        return view('cms.sections_pages',compact('section'));
    }

    public function update(Request $request,$id){
        SectionPage::where('id','1')->update([
            'title_client'=>$request->title_client,
            'subtitle_client'=>$request->subtitle_client,
            'title_portfolio'=>$request->title_portfolio,
            'subtitle_portfolio'=>$request->subtitle_portfolio,
            'title_category'=>$request->title_category,
            'subtitle_category'=>$request->subtitle_category,
            'title_about'=>$request->title_about,
            'subtitle_about'=>$request->subtitle_about,
            'title_contact'=>$request->title_contact,
          
        ]);

         toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('sections');

    }
}
