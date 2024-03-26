<?php

namespace App\Http\Controllers;

use App\Models\AddListing;
use App\Models\Frontend;
use App\Models\Page;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class SiteController extends Controller
{
    public function __construct(){
        $this->activeTemplate = activeTemplate();
    }


    public function index(){

        $count = Page::where('tempname',$this->activeTemplate)->where('slug','home')->count();
        if($count == 0){
            $page = new Page();
            $page->tempname = $this->activeTemplate;
            $page->name = 'HOME';
            $page->slug = 'home';
            $page->save();
        }
        $pageTitle = 'Home';
        $projects = AddListing::orderBy('id',"DESC")->paginate(10);
        $user = Auth::user();
        return view($this->activeTemplate . 'home', compact(
            'pageTitle','user','projects'
        ));
    }
    public function pages($slug)
    {
        $page = Page::where('tempname',$this->activeTemplate)->where('slug',$slug)->firstOrFail();
        $pageTitle = $page->name;
        $sections = $page->secs;
        return view($this->activeTemplate . 'pages', compact('pageTitle','sections'));
    }



}
