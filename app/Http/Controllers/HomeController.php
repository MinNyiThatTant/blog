<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function course(){
        $courses = Course::all();
        return view('home.courses',compact('courses'));
    }

    public function register(){
        return view('home.register');
    }

    public function login(){
        return view('home.login');
    }
    
}
