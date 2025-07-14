
@extends('layouts.template')

@section('title')
    Data Member
@endsection

@section('headline')
    Data Member
@endsection

@section('content')
<div class="container-fluid">
<div class="card mt-4 col-12 ">
    <div class="card-header">
        <h3 class="card-title text-dark text-center" >
            FORM PENDAFTARAN
        </h3>


    </div>
    <div class="card-body">

        <form action="/pendaftaran" enctype="multipart/form-data" method="POST">
                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                            <input type="date" name="tgl" class="form-control text-white" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Keterangan Pembayaran</label>
                            <input type="file" name="ket_pembayaran" class="form-control text-white" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">No Kartu Member</label>
                            <input type="text" name="no_kartuMember" class="form-control text-white" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>

    </div>
</div>
</div>
@endsection

