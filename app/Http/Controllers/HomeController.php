<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SeoPage;
use App\Settings;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    
      
    
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $seo = SeoPage::where('id','1')->first();
            return view('cms.seo',compact('seo'));
    }


   
}
