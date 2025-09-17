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

    public function blog()
    {
        return view('pages.blog');
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
