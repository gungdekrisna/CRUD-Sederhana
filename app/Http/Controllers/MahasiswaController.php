<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use App\dosen;
use App\prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_mahasiswa = mahasiswa::get();
        return view('mahasiswa', compact('all_mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_prodi = prodi::get();
        $all_dosen = dosen::get();
        return view('tambah_mahasiswa', compact('all_dosen', 'all_prodi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resorce = $request->file('profile_image');
        $name   = $resorce->getClientOriginalName();
        $resorce->move(\base_path() ."/public/images", $name);


        $mahasiswa = new mahasiswa();
        $mahasiswa->id = $request->id;
        $mahasiswa->id_prodi = $request->id_prodi;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->email = $request->email;
        $mahasiswa->tempat_lahir = $request->tempat_lahir;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->id_pa = $request->id_pa;
        $mahasiswa->foto = $name;
        $mahasiswa->save();
        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(mahasiswa $mahasiswa)
    {
        $all_prodi = prodi::get();
        $all_dosen = dosen::get();
        return view('detail_mahasiswa', compact('mahasiswa', 'all_dosen', 'all_prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(mahasiswa $mahasiswa)
    {
        $all_prodi = prodi::get();
        $all_dosen = dosen::get();
        return view('edit_mahasiswa', compact('mahasiswa', 'all_dosen', 'all_prodi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mahasiswa $mahasiswa)
    {
        $resorce = $request->file('profile_image');
        $name   = $resorce->getClientOriginalName();
        $resorce->move(\base_path() ."/public/images", $name);


        $mahasiswa->id = $request->id;
        $mahasiswa->id_prodi = $request->id_prodi;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->email = $request->email;
        $mahasiswa->tempat_lahir = $request->tempat_lahir;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->id_pa = $request->id_pa;
        $mahasiswa->foto = $name;
        $mahasiswa->save();
        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect('/mahasiswa');
    }
}
