<?php
namespace App\Http\Controllers;
use App\Blog;
use App\Category;

class BlogController extends Controller
{
  function index()
  {
    $data = Blog::all();
    return view('blogs', [
      'data' => $data,
      'categories' => Category::all()
    ]);
  }
  function view($id)
  {
    $data = Blog::find($id);
    return view('blog', [
      'data' => $data,
      'categories' => Category::all()
    ]);
  }
}
