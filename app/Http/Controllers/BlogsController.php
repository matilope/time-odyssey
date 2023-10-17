<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class BlogsController extends Controller
{
    public function index(): View
    {
        // \Debugbar::info(Blog::all());
        $blogs = Blog::orderBy('created_at', 'asc')->with('category')->get();
        return view('blogs.index', ["blogs" => $blogs, "users" => User::orderBy('created_at', 'asc')->get()]);
    }

    public function article(int $id): View
    {
        return view('blogs.article', ["blog" => Blog::findOrFail($id)]);
    }

    public function viewCreate(): View
    {
        return view('blogs.create', ["categories" => Category::All()]);
    }

    public function create(Request $request): RedirectResponse
    {
        $request->validate(Blog::$rules, Blog::$errorMessages);
        $blog = $request->except(['_token']);
        if ($request->hasFile('image')) {
            $blog['image'] = $request->file('image')->store('blogs_covers');
        }
        Blog::create($blog);
        return redirect('/admin/blogs')
            ->with('status.message', 'El blog <b>' . e($blog['title']) . '</b> se publicó con éxito.')
            ->with('status.success', true);
    }

    public function viewEdit(int $id): View
    {
        return view('blogs.edit', ["blog" => Blog::findOrFail($id), "categories" => Category::All()]);
    }

    public function edit(int $id, Request $request): RedirectResponse
    {
        $blog = Blog::findOrFail($id);
        $request->validate(Blog::$rules, Blog::$errorMessages);
        $blogUpdated = $request->except(['_token']);
        if ($request->hasFile('image')) {
            if($blog->image && Storage::has($blog->image)){
                Storage::disk('public')->delete($blog->image);
            }
            $blogUpdated['image'] = $request->file('image')->store('blogs_covers');
        }
        $blog->update($blogUpdated);
        return redirect('/admin/blogs')
            ->with('status.message', 'El artículo <b>' . e($blog['title']) . '</b> se actualizo con éxito.')
            ->with('status.success', true);
    }

    public function delete(int $id): RedirectResponse
    {
        $blog = Blog::findOrFail($id);
        if($blog->image && Storage::has($blog->image)){
            Storage::disk('public')->delete($blog->image);
        }
        $blog->delete();
        return redirect('/admin/blogs')
            ->with('status.message', 'El artículo <b>' . e($blog['title']) . '</b> fue eliminado con éxito.')
            ->with('status.success', true);
    }
}
