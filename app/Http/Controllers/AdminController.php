<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use App\Models\Blog;
use App\Models\User;

class AdminController extends Controller
{
    public function index(): View
    {
        return view('admin.index', ["blogs" => Blog::orderBy('updated_at', 'asc')->get(), "users" => User::all()]);
    }

    public function blogs(): View
    {
        return view('admin.blogs', ["blogs" => Blog::all(), "users" => User::all()]);
    }
}
