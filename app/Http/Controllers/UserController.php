<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\buku;
use App\Models\kategoribuku;

class UserController extends Controller
{
    public function kategori (string $id) {
        $categories = kategoribuku::where('kategoriid', $id)->get();
        $data = buku::all()->where('kategori', $id);
        return view('user.buku.blogbuku', compact('data', 'categories'));
    }

    public function detailbuku () {
        return view('user.buku.detailbuku', [
            'data' => buku::all(),
            'categories' => kategoribuku::all()
        ]);
    }

    public function blog () {
        return view('user.buku.blogbuku', [
            'data' => buku::all(),
            'categories' => kategoribuku::all()
        ]);
    }
}
