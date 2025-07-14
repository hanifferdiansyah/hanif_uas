
@extends('layouts.template')

@section('title')
    Data Petugas
@endsection

@section('headline')
    Data Petugas
@endsection

@section('content')
<div class="container-fluid">
<div class="card mt-4 col-12 ">
    <div class="card-header">
        <h3 class="card-title text-dark text-center" >
            FORM PETUGAS
        </h3>


    </div>
    <div class="card-body">

        <form action="/petugas" enctype="multipart/form-data" method="POST">
                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" name="nm_petugas" class="form-control text-white" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                            <input type="text" name="alamat_petugas" class="form-control text-white" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">No Hp</label>
                            <input type="text" name="noHp_petugas" class="form-control text-white" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Umur</label>
                            <input type="text" name="umur_petugas" class="form-control text-white" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>

    </div>
</div>
</div>
@endsection

