<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        return view('admin.teachers.index');
    }

    public function create(){
        return view('admin.teachers.create');
    }
}
