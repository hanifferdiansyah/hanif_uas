@extends('layouts.template')
@section('title')
    Halaman Dashboard
@endsection

@section('headline')
    Dashboard
@endsection

@section('content')
<style>
    .red-text-shadow {
        color: red;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }
</style>

<div class="container-fluid pt-4 px-4">
                <div class="row vh-100 rounded align-items-center justify-content-center mx-0 ">
                    <div class="col-md-6 text-center">
                        <h3 class="red-text-shadow"><- WELCOME ADMIN -> </h3>
                    </div>
                </div>
</div>
@endsection

