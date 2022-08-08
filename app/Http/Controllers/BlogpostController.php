<?php

namespace App\Http\Controllers;

use App\Models\Blogpost;
use Illuminate\Http\Request;

class BlogpostController extends Controller
{
    public function index() {
        $objBlogpost = new Blogpost();
        $blogposts = Blogpost::get();
        return view('blog/blog', compact('blogposts'));
    }
    public function showBlogpost($id) {
        $objBlogpost = Blogpost::find($id);
        if (!$objBlogpost) {
            return abort(404);
        }
        return view('blog/single-post',['blogpost'=>$objBlogpost]);
    }

}
