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
                <h3 class="card-title text-dark text-center">
                    FORM TAMBAH DATA MEMBER
                </h3>


            </div>
            <div class="card-body">

                <form action="/member" enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Member</label>
                        <input type="text" name="nm_member" class="form-control text-white" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Alamat</label>
                        <input type="text" name="alamat_member" class="form-control text-white"
                            id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">No HP</label>
                        <input type="text" name="noHp_member" class="form-control text-white" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">No Kartu Member</label>
                        <select name="pendaftaran" id="" class="form-control">
                            <option value="">-Pilih No Kartu Member-</option>
                            @foreach ($pendaftaran as $item)
                                <option value="{{ $item->id }}" {{ old('pendaftaran') == $item->id ? 'selected' : '' }}>
                                    {{ $item->no_kartuMember }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>

            </div>
        </div>
    </div>
@endsection
