<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        try {
            Message::create($validated);
            // Redirect to /kontak with success message
            return redirect()->route('kontak')->with('success', 'Pesan berhasil dikirim!');
        } catch (\Exception $e) {
            // Redirect to /kontak with error message
            return redirect()->route('kontak')->with('error', 'Gagal mengirim pesan. Silakan coba lagi.');
        }
    }
}
