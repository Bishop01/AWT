<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $student=["name"=>"AL-MONAEM KHAN", "id"=>"20-42650-1", "course"=>"Advanced Programming in Web Technology",
                    "department"=>"CSE", "year"=>"2019-2023"];
        return view('index')->with('student',((object)$student));
    }
    public function service(){
        $services=["Front-end with React JS", "Front-end with Next JS", "Front-end with Razor or Blade",
                    "Design with Tailwind CSS"];
        return view('service')->with('services',$services);
    }
    public function ourteam(){
        return view('ourteam');
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
}
