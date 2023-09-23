<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index() {
        return view('blogs.index');
    }
    
    public function article()
    {
        return view('blogs.article');
    }

    public function create()
    {
        return view('blogs.create');
    }
}
