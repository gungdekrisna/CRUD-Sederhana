<?php

namespace App\Http\Controllers;

use App\Matakuliah;
use App\Kurikulum;
use App\Dosen;
use App\Prodi;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_matakuliah = matakuliah::get();
        return view('matakuliah', compact('all_matakuliah'));
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
        $all_kurikulum = kurikulum::get();
        return view('tambah_matakuliah', compact('all_dosen', 'all_prodi', 'all_kurikulum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matakuliah = new matakuliah();
        $matakuliah->id = $request->id;
        $matakuliah->kode_matakuliah = $request->kode_matakuliah;
        $matakuliah->nama_matakuliah = $request->nama_matakuliah;
        $matakuliah->sks = $request->sks;
        $matakuliah->semester = $request->semester;
        $matakuliah->id_kurikulum = $request->id_kurikulum;
        $matakuliah->id_dosen = $request->id_dosen;
        $matakuliah->id_prodi = $request->id_prodi;
        $matakuliah->save();
        return redirect('/matakuliah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function show(Matakuliah $matakuliah)
    {
        $all_kurikulum = kurikulum::get();
        $all_dosen = dosen::get();
        $all_prodi = prodi::get();
        return view('detail_matakuliah',compact('matakuliah', 'all_kurikulum', 'all_dosen', 'all_prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(Matakuliah $matakuliah)
    {
        $all_kurikulum = kurikulum::get();
        $all_dosen = dosen::get();
        $all_prodi = prodi::get();
        return view('edit_matakuliah',compact('matakuliah', 'all_kurikulum', 'all_dosen', 'all_prodi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matakuliah $matakuliah)
    {
        $matakuliah->id = $request->id;
        $matakuliah->kode_matakuliah = $request->kode_matakuliah;
        $matakuliah->nama_matakuliah = $request->nama_matakuliah;
        $matakuliah->sks = $request->sks;
        $matakuliah->semester = $request->semester;
        $matakuliah->id_kurikulum = $request->id_kurikulum;
        $matakuliah->id_dosen = $request->id_dosen;
        $matakuliah->id_prodi = $request->id_prodi;
        $matakuliah->save();
        return redirect('/matakuliah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matakuliah $matakuliah)
    {
        $matakuliah->delete();
        return redirect('/matakuliah');
    }
}
