<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use App\Models\Blog;

class BlogsController extends Controller
{
    public function index(): View
    {
        return view('blogs.index', ["blogs" => Blog::all()]);
    }

    public function article(int $id): View
    {
        return view('blogs.article', ["blog" => Blog::findOrFail($id)]);
    }

    public function create(Request $request): RedirectResponse
    {
        $blog = $request->except(['_token']);
        Blog::create($blog);
        return redirect('/blogs')->with('status.message', 'El blog <b>' . e($blog['title']) . '</b> se publicó con éxito.');
    }
}
