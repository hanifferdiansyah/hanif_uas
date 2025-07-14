<?php

namespace App\Http\Controllers;

use App\Models\petugas;
use Illuminate\Http\Request;

class petugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petugas = petugas::all();
        return view('Petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Petugas.formPetugas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $petugas = new Petugas;
        $petugas->nm_petugas = $request->nm_petugas;
        $petugas->alamat_petugas = $request->alamat_petugas;
        $petugas->noHp_petugas = $request->noHp_petugas;
        $petugas->umur_petugas = $request->umur_petugas;
        $petugas->save();

        return redirect('/petugas')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $petugas = Petugas::find($id);
        $petugas->delete();

        return redirect('/petugas');
    }
}
