<?php

namespace App\Http\Controllers;

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
}
