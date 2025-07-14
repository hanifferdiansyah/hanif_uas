<?php

namespace App\Http\Controllers;

use App\Models\pendaftaran;
use Illuminate\Http\Request;

class pendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $pendaftaran = pendaftaran::all();
        return view('Pendaftaran.index', compact('pendaftaran','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pendaftaran.formPendaftaran');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pendaftaran = new Pendaftaran;
        $pendaftaran->tgl = $request->tgl;
        $pendaftaran->ket_pembayaran = $request->ket_pembayaran;
        $pendaftaran->no_kartuMember = $request->no_kartuMember;
        $pendaftaran->save();

        return redirect('/pendaftaran')->with('success', 'Data berhasil disimpan!');
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
        $pendaftaran = Pendaftaran::find($id);
        $pendaftaran->delete();

        return redirect('/pendaftaran');
    }
}
