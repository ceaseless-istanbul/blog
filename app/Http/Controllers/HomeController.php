<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

  function homepage()
  {
      $data = [
        'date' => 'today '.date('Y-m-d H:i:s'),
        'name' => 'ahmed',
        'age' => 18
      ];

      return view('welcome', $data);
  }

}
