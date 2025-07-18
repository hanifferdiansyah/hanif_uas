@extends('layouts.template')

@section('content')
    <div class="container  ">
        <div class="row justify-content-center">
            <div class="">
                <div class="card mt-4 col-12">
                    <div class="card-header">Form Edit Data Member</div>

                    <div class="card-body">
                        <form method="post" action="/member/{{ $member->id }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Member</label>
                                <input type="text" value="{{ $member->nm_member }}" name="nm_member"
                                    class="form-control text-white" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Alamat</label>
                                <input type="text" value="{{ $member->alamat_member }}" name="alamat_member"
                                    class="form-control text-white" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">No Hp</label>
                                <input type="text" value="{{ $member->noHp_member }}" name="noHp_member"
                                    class="form-control text-white" id="exampleInputPassword1">
                            </div>
                            {{-- <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">No Kartu Member</label>
                            <input type="text" value="{{$member->pendaftaran->no_kartuMember}}" name="email" class="form-control text-white" id="exampleInputPassword1">
                            </div> --}}
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">No Kartu Member</label>
                                <select name="pendaftaran" id="" class="form-control">
                                    <option value="">-Pilih No Kartu Member-</option>
                                    @foreach ($pendaftaran as $item)
                                        <option {{ $member->no_kartuMember == $item->id ? 'selected' : '' }}
                                            value="{{ $item->id }}">{{ $item->no_kartuMember }}</option>
                                    @endforeach


                                </select>
                            </div>




                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
