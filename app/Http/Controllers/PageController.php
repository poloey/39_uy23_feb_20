<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function about () 
  {
    $teachers = Teacher::paginate(15);
    // return view('about')->with('teachers', $teachers);
    // return view('about')->withTeachers($teachers);
    // return view('about', ['teachers' => $teachers]);
    return view('about', compact('teachers'));
  }
}
