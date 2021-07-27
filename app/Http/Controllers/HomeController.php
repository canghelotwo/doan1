<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_category = DB::table('tbl_category')->orderby('category_id','asc')->get();

        $all_post = DB::table('tbl_post')->orderby('post_id','desc')->paginate(6);
        
        
        return view('page.home')->with('all_category',$all_category)->with('all_post',$all_post); 
    }

    
    public function show_post($id)
    {
        $all_category = DB::table('tbl_category')->orderby('category_id','asc')->get();
        $all_post = DB::table('tbl_post')->orderby('post_id','desc')->limit(6)->get();
        $singlepost = DB::table('tbl_post')
        ->join('tbl_category','tbl_category.category_id','=','tbl_post.category_id')
        ->where('tbl_post.post_id',$id)->get();
        return view('page.post')->with('all_category',$all_category)->with('singlepost',$singlepost)->with('all_post',$all_post);
    }

    public function show_category($id)
    {
        $all_category = DB::table('tbl_category')->orderby('category_id','asc')->get();
        $all_post_category = DB::table('tbl_post')->where('category_id',$id)->orderby('post_id','desc')->paginate(6);
        $category = DB::table('tbl_category')->where('category_id',$id)->get();
        $all_post = DB::table('tbl_post')->orderby('post_id','desc')->limit(6)->get();
        return view('page.category')->with('all_post_category',$all_post_category)->with('all_category',$all_category)->with('category',$category)->with('all_post',$all_post); 
    }
    public function search(Request $request){

        $keywords = $request->s;

        $all_category = DB::table('tbl_category')->orderby('category_id','asc')->get();

        $all_post = DB::table('tbl_post')->orderby('post_id','desc')->limit(6)->get();

        $search_post = DB::table('tbl_post')->where('post_title','like','%'.$keywords.'%')->paginate(6); 


        return view('page.search')->with('all_category',$all_category)->with('all_post',$all_post)->with('search_post',$search_post)->with('keywords',$keywords);

    }

}
