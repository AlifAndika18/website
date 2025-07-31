<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function create()
    {
        return view('project.create');
    }

    public function store(Request $request)
    {
        $path = $request->file('gambar')->store('public/images');
        $filename = basename($path);

        DB::table('projects')->insert([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $filename
        ]);

        return redirect('/')->with('success', 'Project berhasil ditambahkan!');
    }
}
