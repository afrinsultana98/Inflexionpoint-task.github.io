<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogs, $blog;
public function post()
{
    return view('front.user.post');
}
public function newBlog(Request $request)
{
    Blog::newBlog($request);
    return redirect()->back()->with('success','Blog Created Successfully.');
}
public function manageBlog()
{
    $this->blogs=Blog::all();
    return view('front.user.manage',[
        'blogs' =>$this->blogs
    ]);
}
    public function deleteBlog($id)
    {
        $this->blog = Blog::find($id);
        if (file_exists($this->blog->image))
        {
            unlink($this->blog->image);
        }
        $this->blog->delete();
        return redirect()->back()->with('success','Blog deleted successfully.');
    }
    public function editBlog($id)
    {
        $this->blog = Blog::find($id);
        return view('front.user.edit',[
            'blog'=> $this->blog
        ]);
    }
    public function updateBlog(Request $request,$id)
    {
        Blog::updateBlog($request, $id);
        return redirect()->route('user.manage')->with('success','Blog updated successfully');

    }
}
