<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $jumlah_user = User::count();
        return view('dashboard.homepage', compact('jumlah_user'));
    }
}
