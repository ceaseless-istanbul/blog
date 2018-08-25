<?php

namespace App\Http\Controllers;

use App\Category;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
          'categories' => Category::all()
        ];

        return view('welcome', $data);
    }
}
