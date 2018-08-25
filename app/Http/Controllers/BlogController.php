<?php
namespace App\Http\Controllers;
use App\Blog;
class BlogController extends Controller
{
  function index()
  {
    $data = Blog::all();
    return view('blogs', ['data' => $data]);
  }
  function view($id)
  {
    $data = Blog::find($id);
    return view('blog', ['data' => $data]);
  }
}
