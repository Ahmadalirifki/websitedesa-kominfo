<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Photo;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'artikel' => Blog::orderBy('id', 'desc')->limit(3)->get(),
            'photos' => Photo::orderBy('id', 'desc')->limit(4)->get()
        ]);
    }

    public function berita()
    {
        return view('dashboard.berita.index', [
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);
    }

    public function detailBerita($slug)
    {
        $artikel = Blog::where('slug', $slug)->first();
        return view('dashboard.berita.detail-berita', [
            'artikel' => $artikel
        ]);
    }

    public function photoKegiatan()
    {
        return view('dashboard.photo.index', [
            'photos' => Photo::orderBy('id', 'desc')->get()
        ]);
    }
}
