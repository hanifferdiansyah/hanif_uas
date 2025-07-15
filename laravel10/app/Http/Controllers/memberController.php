<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;
use App\Models\pendaftaran;

class memberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $member = Member::all();
        return view('Member.index', compact('member','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $pendaftaran = pendaftaran::all();
        return view('Member.formMember',compact('pendaftaran'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $member = new Member;
        $member->nm_member = $request->nm_member;
        $member->alamat_member = $request->alamat_member;
        $member->noHp_member = $request->noHp_member;
        $member->no_kartuMember = $request->no_kartuMember;
        $member->save();


        return redirect('/member')->with('success', 'Data berhasil disimpan!');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $member = Member::find($id);
        return view('Member.edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $member = Member::find($id);
        $member->nm_member = $request->nm_member;
        $member->alamat_member = $request->alamat_member;
        $member->noHp_member = $request->noHp_member;
        $member->no_kartuMember = $request->no_kartuMember;
        $member->save();

        return redirect('/member')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member = Member::find($id);
        $member->delete();

        return redirect('/member');
    }
}
