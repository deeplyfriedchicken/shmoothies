<?php

namespace App\Http\Controllers;

use DB;
use App\Lookup;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = DB::table('lookup')->where('category', 'blog')->orderBy('date_posted', 'desc')->get();
        $popular = Lookup::where('category', 'blog')->orderBy('blog_views', 'desc')->get();
        return view('index', ['blogs' => $blogs, 'popular' => $popular]);
    }
    public function showBlog($category, $blog_url)
    {
        $blog = DB::table('lookup')->where('blog_category', $category)->where('blog_url', $blog_url)->get();
        if($blog == null) {
          // return 404
        }
        $tags = Lookup::where('category', 'tag')->where('ref_id', $blog[0]->id)->get();
        if(session()->has($category."+".$blog_url) == false) {
            $viewcount = Lookup::where('blog_category', $category)->where('blog_url', $blog_url)->increment('blog_views');
             session([$category."+".$blog_url => $category."+".$blog_url]);
        }
        $author = DB::table('users')->where('id', $blog[0]->user_id)->get();
        return view('single-image', ['blog' => $blog, 'author' => $author, 'tags' => $tags]);
    }
    public function showBlogCategory($category)
    {
        $blogs = DB::table('lookup')->where('blog_category', $category)->get();
        // if($blog == null) {
        //   //return 404
        // }
        return view('page-category', ['blogs' => $blogs, 'category' => $category]);
    }
    public function blogsWithTags($tag) {
      $ids = Lookup::select('ref_id')->where('category', 'tag')->where('tag', $tag)->get();
      $blogs = [];
      $i = 0;
      foreach($ids as $id) {
        $blogs[$i] = Lookup::where('category', 'blog')->where('id', $id->ref_id)->get();
      }
      return view('tag', ['blogs' => $blogs, 'category' => $tag]);
    }
}
