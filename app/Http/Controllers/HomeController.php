<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;
use App\Models\kategoribuku;

class HomeController extends Controller
{
    public function index (string $id) {
        $categories = kategoribuku::where('kategoriid'. $id);
        $data = buku::all()->where('kategori'. $id);
        return view('welcome', compact('data', 'categories'));
    }

    public function welcome () {
        return view('welcome', [
            'data' => buku::all(),
            'categories' => kategoribuku::all()
        ]);
    }
}
