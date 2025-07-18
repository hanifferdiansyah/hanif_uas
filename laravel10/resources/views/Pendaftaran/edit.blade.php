@extends('layouts.template')

@section('content')
    <div class="container  ">
        <div class="row justify-content-center">
            <div class="">
                <div class="card mt-4 col-12">
                    <div class="card-header">Form Edit Data Pendaftaran</div>

                    <div class="card-body">
                        <form method="post" action="/pendaftaran/{{ $pendaftaran->id }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                <input type="date" value="{{ $pendaftaran->tgl }}" name="tgl"
                                    class="form-control text-white" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Keterangan Pembayaran</label>
                                <input type="file" value="{{ $pendaftaran->ket_pembayaran }}" name="ket_pembayaran"
                                    class="form-control text-white" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">No Kartu Member</label>
                                <input type="text" value="{{ $pendaftaran->no_kartuMember }}" name="no_kartuMember"
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
