<?php

namespace App\Http\Controllers;
use App\Category;

class HomeController extends Controller
{

  function homepage()
  {
      $data = [
        'date' => 'today '.date('Y-m-d H:i:s'),
        'name' => 'ahmed',
        'age' => 18,
        'categories' => Category::all()
      ];

      return view('welcome', $data);
  }

}
