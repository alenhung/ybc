<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorksPagesController extends Controller
{
  public function works()
  {
    return view('works_page/works');
  }
  public function itemIntroduction()
  {
    return view('works_page/itemIntroduction');
  }
}
