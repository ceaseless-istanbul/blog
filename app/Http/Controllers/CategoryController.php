<?php

namespace App\Http\Controllers;

use App\Category;
use App\Blog;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    function index($slug)
    {

        $category = Category::where('slug', $slug)->first();

        if($category) {


          $data = Blog::where('category_id', $category->id)->get();

          return view('blogs', [
            'data' => $data,
            'categories' => Category::all()
          ]);



        } else {

          abort('404');

        }

    }


    function getList()
    {
        $data = Category::all();

        return view('admin.categories.list', ['data' => $data]);
    }


    function create()
    {
      return view('admin.categories.create');
    }

    function add(Request $request)
    {
      $name = $request->input('name');
      $slug = $request->input('slug');


      $category = new Category();
      $category->name = $name;
      $category->slug = $slug;

      $category->save();
    }
}
