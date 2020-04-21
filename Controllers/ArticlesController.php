<?php

namespace App\Http\Controllers;
use App\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
    	$articles = Articles::all();
    	return view('articles.index')->with('articles',$articles);
    }
    public function show($id){
    	// $article = Articles::find($id);
    	// if(is_null($article)){
    	// 	abort(404);
    	// }
        $article = Articles::findOrFail($id);
    	return view('articles.show',compact('article'));
    }

    public function create(){
    	return view('articles.create');
    }
    public function store(Request $request){
    	return "it is in";
        dd($request->all());

    }
}
