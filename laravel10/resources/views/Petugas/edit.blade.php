@extends('layouts.template')

@section('content')
    <div class="container  ">
        <div class="row justify-content-center">
            <div class="">
                <div class="card mt-4 col-12">
                    <div class="card-header">Form Edit Data Petugas</div>

                    <div class="card-body">
                        <form method="post" action="/petugas/{{ $petugas->id }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Petugas</label>
                                <input type="text" value="{{ $petugas->nm_petugas }}" name="nm_petugas"
                                    class="form-control text-white" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Alamat Petugas</label>
                                <input type="text" value="{{ $petugas->alamat_petugas }}" name="alamat_petugas"
                                    class="form-control text-white" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">No Hp Petugas</label>
                                <input type="text" value="{{ $petugas->noHp_petugas }}" name="noHp_petugas"
                                    class="form-control text-white" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Umur Petugas</label>
                                <input type="text" value="{{ $petugas->umur_petugas }}" name="umur_petugas"
                                    class="form-control text-white" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
