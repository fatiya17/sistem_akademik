<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa; // Import Model Mahasiswa

class MahasiswaController extends Controller
{
    // Fungsi untuk menampilkan data mahasiswa
    public function index()
    {
        // Ambil semua data mahasiswa dari database
        $mahasiswa = Mahasiswa::all();

        // Return view dengan data mahasiswa
        return view('mahasiswa.index', compact('mahasiswa'));
    }
}
