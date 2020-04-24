<?php

namespace App\Http\Controllers;

use App\Dosen;
use App\Prodi;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_dosen = dosen::get();
        return view('dosen', compact('all_dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_prodi = prodi::get();
        return view('tambah_dosen', compact('all_prodi'));
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


        $dosen = new dosen();
        $dosen->id = $request->id;
        $dosen->nip_dosen = $request->nip_dosen;
        $dosen->nama_dosen = $request->nama_dosen;
        $dosen->id_prodi = $request->id_prodi;
        $dosen->foto = $name;
        $dosen->save();

        return redirect('/dosen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
        return view('detail_dosen', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosen $dosen)
    {
        $all_prodi = prodi::get();
        return view('edit_dosen', compact('dosen', 'all_prodi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dosen $dosen)
    {
        $resorce = $request->file('profile_image');
        $name   = $resorce->getClientOriginalName();
        $resorce->move(\base_path() ."/public/images", $name);


        $dosen->id = $request->id;
        $dosen->nip_dosen = $request->nip_dosen;
        $dosen->nama_dosen = $request->nama_dosen;
        $dosen->id_prodi = $request->id_prodi;
        $dosen->foto = $name;
        $dosen->save();

        return redirect('/dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect('/dosen');
    }
}
