<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user(); // Ambil data pengguna yang sedang login
        return view('profile', compact('user'));
    }
}
