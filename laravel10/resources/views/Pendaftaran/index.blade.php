@extends('layouts.template')

@section('title')
    Data Pendaftaran
@endsection

@section('headline')
    Data Pendaftaran
@endsection

@section('content')
<div class="container-fluid">
<div class="card mt-4 col-12 ">
    <div class="card-header">
        <h3 class="card-title">
            <a href="{{ route('pendaftaran.create') }}" class="btn btn-primary btn-sm">
                <i class="fa fa-user-plus"></i> Tambah Data
            </a>



        </h3>

        {{-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
        </button>
        </div> --}}
    </div>
    <div class="card-body">
        <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Ket Pembayaran</th>
                                <th scope="col">No Kartu</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ( $pendaftaran as $data)
                                <tr>
                                    {{-- <th scope="row">{{$nomor++}}</th> --}}
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{$data->tgl}}</td>
                                    <td>{{$data->ket_pembayaran}}</td>
                                    <td>{{$data->no_kartuMember}}</td>

                                    <td>

                                        <a href="/pendaftaran/edit/{{$data->id}}" class="btn btn-info btn-sm"><i class="fa fa-pen"></i></a>

                                        <!-- Button trigger modal -->

                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$data->id}}">

                                        <i class="fa fa-trash"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteModal{{ $data->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $data->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalLabel{{ $data->id }}">Konfirmasi Hapus</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah kamu yakin ingin menghapus data pada tanggal <br><strong>{{ $data->tgl }}</strong>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <form action="{{ route('pendaftaran.destroy', $data->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="5" scope="row">Data Tidak Ada</th>
                                </tr>
                            @endforelse




                        </tbody>
                    </table>
    </div>
</div>
</div>
@endsection
