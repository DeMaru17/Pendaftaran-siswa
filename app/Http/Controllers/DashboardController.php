<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::whereNull('deleted_at')->get();
        return view('dashboard', compact('jurusan'));
    }
}
