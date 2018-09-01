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
      $data = $request->all();

      $name = $request->input('name');
      $slug = $request->input('slug');

      $category = new Category();

      $category->name = $name;
      $category->slug = $slug;

      $category->save();

      return response()->json([
          'id' => $category->id
      ]);

    }


    function delete(Request $request)
    {

      $id = $request->input('id');

      $category = Category::find($id);

      $category->delete();

      return response()->json([
          'success' => true
      ]);


    }


    function update($id)
    {
      $category = Category::find($id);

      return view('admin.categories.update', [
        'data' => $category
      ]);
    }


    function edit(Request $request)
    {

      $id = $request->input('id');
      $name = $request->input('name');
      $slug = $request->input('slug');

      $category = Category::find($id);

      $category->name = $name;
      $category->slug = $slug;

      $category->save();

      return response()->json([
          'success' => true
      ]);

    }

}
