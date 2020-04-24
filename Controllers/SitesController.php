<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function index()
    {
    	// return "view";
          return view("welcome");
         // return "heloo world!";
    }
    public function about()
    {
         // return "about";
    	// $first ="first";
    	// $second = "second1";
    	// $people =['yy','aa','cc'];
         $people = [];
        return view('sites.about',compact('people'));
       /*  三种传值方式
         $first ="first1";
         $second = "second2";
         $data = [];
         $data['first'] ='bool';
         $data['last']  = 'jelly';
         第一种
         return view('sites.about')->with('first',$first);
         第二种
         return view('sites.about',compact('first','second'));
         第三种
          return view('sites.about',$data);*/
    }
    public function contact(){
    	return view('contact');
    }
}
