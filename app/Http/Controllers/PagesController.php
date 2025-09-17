<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Message;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.beranda');
    }

    public function about()
    {
        return view('pages.tentang-kami');
    }

    public function service()
    {
        return view('pages.layanan');
    }

    public function contact()
    {
        return view('pages.kontak');
    }

    public function blog(Request $request)
    {
        $perPage = 3;
        $page = (int) $request->query('page', 1);

        $blogsQuery = Blog::orderBy('tanggal_berita', 'desc');
        $totalBlogs = $blogsQuery->count();

        $blogs = $blogsQuery->skip(($page - 1) * $perPage)->take($perPage)->get();

        $latestBlogs = Blog::orderBy('tanggal_berita', 'desc')->take(3)->get();

        \Carbon\Carbon::setLocale('id');

        if ($request->ajax()) {
            // Use the correct partial for multiple blogs
            $html = view('pages.content.blogs', ['blogs' => $blogs])->render();
            $hasMore = ($page * $perPage) < $totalBlogs;
            return response()->json(['html' => $html, 'hasMore' => $hasMore]);
        }

        return view('pages.blog', [
            'blogs' => $blogs,
            'latestBlogs' => $latestBlogs,
            'totalBlogs' => $totalBlogs,
            'perPage' => $perPage,
            'page' => $page,
        ]);
    }

    public function blogDetail($id)
    {
        $blog = Blog::findOrFail($id);
        $latestBlogs = Blog::orderBy('tanggal_berita', 'desc')->take(3)->get();

        \Carbon\Carbon::setLocale('id');

        if (request()->ajax()) {
            $html = view('pages.content.blog-detail', compact('blog'))->render();
            return response()->json(['html' => $html]);
        }

        return view('pages.blog-detail', compact('blog', 'latestBlogs'));
    }

    public function showLoginForm()
    {
        return view('pages.login');
    }

    // admin page
    public function dashboard()
    {
        $messagesCount = Message::count();
        $blogsCount = Blog::count();
        return view('pages.admin.dashboard', compact('messagesCount', 'blogsCount'));
    }

    public function adminMessage()
    {
        $messages = Message::orderBy('created_at', 'desc')->get();
        $showSidebar = true;
        $showNavbar = false;
        return view('pages.admin.message.index', compact('messages', 'showSidebar', 'showNavbar'));
    }
}
