<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lookup;
use App\User;
use DB;
use Image;
use Carbon\Carbon;
use Auth;

use App\Http\Requests;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
      if(Auth::user()->isVerified == 1) {
          return view('admin/index');
      }
      return view('admin/wait');
    }
    public function newPost()
    {
        if(Auth::user()->isVerified == 1) {
          return view('admin/blog');
        }
        return view('admin/wait');
    }
    public function showUsers() {
      if(Auth::user()->isVerified == 1 && Auth::user()->isRoot == 1) {
        $users = User::where('isVerified', 0)->get();
        return view('admin/users', ['users' => $users]);
      }
      return view('admin/wait');
    }
    public function updateSettings(Request $request) {
      $user = User::where('id', Auth::user()->id)->first();
      $user->first_name = $request['first_name'];
      $user->last_name = $request['last_name'];
      $user->email = $request['email'];
      $user->instagram = $request['instagram'];
      $user->facebook = $request['facebook'];
      $user->linkedin = $request['linkedin'];
      $user->snapchat = $request['snapchat'];
      $user->pinterest = $request['pinterest'];
      $user->tumblr = $request['tumblr'];
      $user->description = $request['description'];
      if ($request->file('photo') != null) {
        $image = Image::make($request->file('photo'))->resize(400, 400);
        $id = uniqid();
        $path = public_path('img/profile_pictures/'.$id.".".$request->file('photo')->extension());
        $user->imagme_url = $id.".".$request->file('photo')->extension();
        $image->save($path);
      }
      $user->save();
      $request->session()->flash('updated-user', 'User settings successfully updated.');
      return redirect('shm-admin/settings');
    }
    public function approveUser($id) {
      if(Auth::user()->isVerified == 1 && Auth::user()->isRoot == 1) {
        $user = User::findOrFail($id);
        $user->isVerified = 1;
        $user->save();
        return redirect('/shm-admin/users');
      }
      return view('admin/wait');
    }

    public function showBlogs() {
      $blogs = Lookup::where('category', 'blog')->orderBy('date_posted', 'asc')->get();
      return view('admin/blogs', ['blogs' => $blogs]);
    }
    public function editBlog($id) {
      $blog = Lookup::where('category', 'blog')->where('id', $id)->get();
      $tag = Lookup::where('category', 'tag')->where('ref_id', $blog[0]->id)->get();
      return view('admin/blogUpdate', ['blog' => $blog, 'tagged' => $tag]);
    }
    public function updateBlog(Request $request, $id) {
      $blog = Lookup::find($id);
      $blog->blog_title = $request['title'];
      $string = strtolower($blog->blog_title);
      //Make alphanumeric (removes all other characters)
      $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
      //Clean up multiple dashes or whitespaces
      $string = preg_replace("/[\s-]+/", " ", $string);
      //Convert whitespaces and underscore to dash
      $string = preg_replace("/[\s_]/", "-", $string);
      $blog->blog_url = $string;
      $blog->blog_category = $request['category'];
      $blog->heading = $request['heading'];
      $blog->content = $request['content'];
      if ($request->file('photo') != null) {
        $image = Image::make($request->file('photo'))->resize(900, 600);
        $id = uniqid();
        $path = public_path('img/blog_covers/'.$id.".".$request->file('photo')->extension());
        $blog->media_url = $id.".".$request->file('photo')->extension();
        $image->save($path);
      }
      $blog->date_posted = Carbon::now()->toDateString();
      Lookup::where('category', 'tag')->where('ref_id', $blog->id)->delete();
      foreach($request['tags'] as $tags) {
          $tag = new Lookup;
          $tag->ref_id = $blog->id;
          $tag->category = 'tag';
          $tag->tag = $tags;
          $tag->save();
      }
      $blog->save();
      $blog = Lookup::where('category', 'blog')->where('id', $blog->id)->get();
      $tag = Lookup::where('category', 'tag')->where('ref_id', $blog[0]->id)->get();
      $request->session()->flash('updated-blog', 'Blog post successfully updated.');
      return view('admin/blogUpdate', ['blog' => $blog, 'tagged' => $tag]);
    }
    public function storePost(Request $request)
    {
        if(Auth::user()->isVerified != 1) {
            return view('admin/wait');
        }
        $blog = new Lookup;
        $blog->category = 'blog';
        $blog->blog_title = $request['title'];
        $blog->user_id = Auth::id();
        $string = strtolower($blog->blog_title);
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "-", $string);
        $blog->blog_url = $string;
        $blog->blog_category = $request['category'];
        $blog->heading = $request['heading'];
        $blog->content = $request['content'];
        $blog->blog_views = 0;
        if ($request->file('photo') != null) {
          $image = Image::make($request->file('photo'))->resize(900, 600);
          $id = uniqid();
          $path = public_path('img/blog_covers/'.$id.".".$request->file('photo')->extension());
          $blog->media_url = $id.".".$request->file('photo')->extension();
          $image->save($path);
        }
        $blog->date_posted = Carbon::now()->toDateString();
        $blog->save();
        // tags
        foreach($request['tags'] as $tags) {
          $tag = new Lookup;
          $tag->ref_id = $blog->id;
          $tag->category = 'tag';
          $tag->tag = $tags;
          $tag->save();
        }
          // $file = new Lookup;
          // $file->category = 'blog_cover_photo';
          // $file->ref_id = $blog->id;
          // $file->save();
        $request->session()->flash('added-blog', 'Blog post successfully saved.');
        return view('admin/blog');
    }
}
