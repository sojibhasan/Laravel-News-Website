<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\News;
use App\Category;
class NewsController extends Controller
{
	var $categories;
	function __construct(){
		$this->categories=Category::all()->take(10);
	}
    // News Index Page
    function index(){
    	$news=News::orderBy('id','desc')->paginate(10);
    	return view('news.index',['news'=>$news,'categories'=>$this->categories]);
    }

    // News According to Controller
    function category($cat_id){
    	$news=DB::table('news')->where(['cat_id'=>$cat_id])->paginate(10);
    	return view('news.category',['news'=>$news,'categories'=>$this->categories]);
    }

    // News Detail
    function detail($news_id){
    	$newsDetail=DB::table('news')->where(['id'=>$news_id])->get();
    	return view('news.detail',['newsDetail'=>$newsDetail,'categories'=>$this->categories]);
    }
}
