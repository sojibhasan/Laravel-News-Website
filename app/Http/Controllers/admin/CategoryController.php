<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
class CategoryController extends Controller
{
        function index(Request $request){
        if($request->session()->exists('adminLogin')){
            $data=DB::table('categories')->get();
            return view('admin.category.index',['data'=>$data]);
        }else{
            return redirect('admin/signin');
        }
    }

    // Add News
    function add(Request $request){
        if($request->session()->exists('adminLogin')){
    		return view('admin.category.add');
        }else{
            return redirect('admin/signin');
        }
    }

    // Store News
    function store_category(Request $request){
        if($request->session()->exists('adminLogin')){
            $request->validate([
                '_title' => 'required'
            ]);
            $news=new Category;
            $news->cat_title=$request->input('_title');
            $news->save();
            return redirect('admin/category')->with('success','Data has been added.');
        }else{
            return redirect('admin/signin');
        }
    }

    // Edit News
    function edit(Request $request,$id){
        if($request->session()->exists('adminLogin')){
            $categories=DB::table('categories')->where(['cat_id'=>$id])->get();
            return view('admin.category.edit',['category'=>$categories]);
        }else{
            return redirect('admin/signin');
        }
    }

    // Update News
    function update_category(Request $request,$id){
        if($request->session()->exists('adminLogin')){
            $request->validate([
                '_title' => 'required'
            ]);
            $hos=DB::table('categories')
            ->where('cat_id',$id)
            ->update([
                'cat_title'=>$request->input('_title')
            ]);
            return redirect('admin/category/edit/'.$id)->with('success','Data has been update.');
        }else{
            return redirect('admin/signin');
        }
    }

    // Delete Data
    function delete(Request $request,$id){
        if($request->session()->exists('adminLogin')){
        	DB::table('categories')->where(['cat_id'=>$id])->delete();
        	return redirect('admin/category')->with('success','Data has been deleted.');
        }else{
            return redirect('admin/signin');
        }
    }
}
