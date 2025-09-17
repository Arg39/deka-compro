<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('tanggal_berita', 'desc')->get();
        $showSidebar = true;
        $showNavbar = false;
        $categories = ['penjaringan', 'teknologi', 'jaringan internet'];
        return view('pages.admin.blog.index', compact('blogs', 'showSidebar', 'showNavbar', 'categories'));
    }

    public function create()
    {
        $categories = ['penjaringan', 'teknologi', 'jaringan internet'];
        $showSidebar = true;
        $showNavbar = false;
        return view('pages.admin.blog.create', compact('categories', 'showSidebar', 'showNavbar'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'tanggal_berita' => 'required|date',
            'category' => 'required|string|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            if ($request->hasFile('image')) {
                // Check if storage directory exists and is writable
                if (!is_dir(storage_path('app/public/blog_images'))) {
                    mkdir(storage_path('app/public/blog_images'), 0755, true);
                }
                if (!is_writable(storage_path('app/public/blog_images'))) {
                    throw new \Exception('Storage directory is not writable.');
                }
                $validated['image'] = $request->file('image')->store('blog_images', 'public');
                if (!$validated['image']) {
                    throw new \Exception('Failed to store image.');
                }
            }
            Blog::create($validated);
            return redirect()->route('admin.blog.index')->with('success', 'Blog berhasil ditambahkan.');
        } catch (\Exception $e) {
            return back()->withErrors(['image' => 'Upload error: ' . $e->getMessage()])->withInput();
        }
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        $showSidebar = true;
        $showNavbar = false;
        return view('pages.admin.blog.show', compact('blog', 'showSidebar', 'showNavbar'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = ['penjaringan', 'teknologi', 'jaringan internet'];
        $showSidebar = true;
        $showNavbar = false;
        return view('pages.admin.blog.edit', compact('blog', 'categories', 'showSidebar', 'showNavbar'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'tanggal_berita' => 'required|date',
            'category' => 'required|string|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $validated['image'] = $request->file('image')->store('blog_images', 'public');
        }

        $blog->update($validated);

        return redirect()->route('admin.blog.index')->with('success', 'Blog berhasil diupdate.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }
        $blog->delete();

        return redirect()->route('admin.blog.index')->with('success', 'Blog berhasil dihapus.');
    }
}
