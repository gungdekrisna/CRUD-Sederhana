<?php

namespace App\Http\Controllers;

use App\Dosen;
use App\Prodi;
use App\Kurikulum;
use App\Matakuliah;
use App\Mahasiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function index()
    {
    	$mahasiswa_count = Mahasiswa::get()->count();
    	$matakuliah_count = Matakuliah::get()->count();
    	$dosen_count = Dosen::get()->count();
    	$prodi_count = Prodi::get()->count();
        $kurikulum_count = Kurikulum::get()->count();
        return view('dashboard', compact('kurikulum_count', 'mahasiswa_count', 'matakuliah_count', 'dosen_count', 'prodi_count', 'kurikulum_count'));
    }
}