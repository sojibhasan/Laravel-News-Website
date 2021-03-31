<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Category;
use App\News;
class AdminController extends Controller
{
    function index(Request $request){
        if($request->session()->exists('adminLogin')){
            $data=DB::table('news')->join('categories','categories.cat_id','=','news.cat_id')->get();
            return view('admin.dashboard',['data'=>$data]);
        }else{
            return redirect('admin/signin');
        }
    }

    // Add News
    function add(Request $request){
        if($request->session()->exists('adminLogin')){
            $categories=Category::all();
    		return view('admin.add',['categories'=>$categories]);
        }else{
            return redirect('admin/signin');
        }
    }

    // Store News
    function store_news(Request $request){
        if($request->session()->exists('adminLogin')){
            $request->validate([
                '_category' => 'required',
                '_title' => 'required',
                '_desc' => 'required',
                'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            $image = $request->file('img');
            $imageName=time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/storage');
            $image->move($destinationPath, $imageName);

            $news=new News;
            $news->cat_id=$request->input('_category');
            $news->news_title=$request->input('_title');
            $news->news_desc=$request->input('_desc');
            $news->news_img=$imageName;
            $news->save();
            return redirect('admin')->with('success','Data has been added.');
        }else{
            return redirect('admin/signin');
        }
    }

    // Edit News
    function edit(Request $request,$id){
        if($request->session()->exists('adminLogin')){
            $categories=Category::all();
            $news=News::find($id);
            return view('admin.edit',['categories'=>$categories,'news'=>$news]);
        }else{
            return redirect('admin/signin');
        }
    }

    // Update News
    function update_news(Request $request,$id){
        if($request->session()->exists('adminLogin')){
        $request->validate([
            '_category' => 'required',
            '_title' => 'required',
            '_desc' => 'required'
        ]);
        if($request->file('img')){
            $image = $request->file('img');
            $imageName=time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/storage');
            $image->move($destinationPath, $imageName);
        }else{
            $imageName=$request->input('img');
        }
        $news=News::find($id);
        $news->cat_id=$request->input('_category');
        $news->news_title=$request->input('_title');
        $news->news_desc=$request->input('_desc');
        $news->news_img=$imageName;
        $news->save();
        return redirect('admin/edit-news/'.$id)->with('success','Data has been updated.');
    }else{
        return redirect('admin/signin');
    }
    }

    // Delete Data
    function delete(Request $request,$id){
        if($request->session()->exists('adminLogin')){
        	DB::table('news')->where(['id'=>$id])->delete();
        	return redirect('admin')->with('success','Data has been deleted.');
        }else{
            return redirect('admin/signin');
        }
    }

    // Admin Login
    function signin(Request $request){
        if($request->session()->exists('adminLogin')){
            return redirect('admin');
        }else{
            return view('admin.login');
        }
    	
    }

    // Login Check
    function login_check(Request $request){
        $request->session()->forget('adminLogin');
        $users = DB::table('admins')->where([
            ['admin', '=', $request->input('_username')],
            ['password', '=', md5($request->input('_pwd'))],
        ])->count();

        $userDetail = DB::table('admins')->where([
            ['admin', '=', $request->input('_username')],
            ['password', '=',md5($request->input('_pwd'))],
        ])->get();

        if($users>0){
            session(['adminLogin'=>1,'adminDetail'=>$userDetail]);
            return redirect('admin');
        }
    }

    // Admin Sigout
    function signout(Request $request){
    	$request->session()->forget('adminLogin');
    	return redirect('admin/signin');
    }
}
