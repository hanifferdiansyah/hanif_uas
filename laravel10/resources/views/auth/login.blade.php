 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <title>MR GYM</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport">
     <meta content="" name="keywords">
     <meta content="" name="description">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

     <!-- Favicon -->
     <link href="{{ asset('img/favicon.ico') }}" rel="icon">

     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link
         href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
         rel="stylesheet">

     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

     <!-- Libraries Stylesheet -->
     <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
     <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

     <!-- Customized Bootstrap Stylesheet -->
     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

     <!-- Template Stylesheet -->
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
 </head>

 <body>
     <form method="POST" action="{{ route('login') }}">
         <div class="container-fluid position-relative d-flex p-0">
             <!-- Spinner Start -->
             <div id="spinner"
                 class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                 <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                     <span class="sr-only">Loading...</span>
                 </div>
             </div>
             <!-- Spinner End -->


             <!-- Sign In Start -->

             <div class="container-fluid">
                 <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                     <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                         <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                             <div class="d-flex align-items-center justify-content-between mb-3">
                                 <a href="{{ asset('index.html') }}" class="">
                                     {{-- <h3 class="text-primary"><i class="fa-solid fa-cloud-bolt"></i> Mr GYM</h3> --}}

                                     <div class="w-100 text-center mb-3">
                                         <a href="index.html" class="d-inline-block">
                                             <img class="rounded-circle" src="{{ asset('img/MRGYM1.png') }}"
                                                 alt="Logo Mr GYM" style="width: 150px; height: 150px;">
                                         </a>
                                     </div>
                                     {{-- </a> --}}
                                     {{-- <h3>Sign In</h3> --}}

                             </div>
                             <div class="form-floating mb-3">
                                 @csrf
                                 <div class="input-group mb-3">
                                     <input id="email" type="email"
                                         class="form-control @error('email') is-invalid @enderror" name="email"
                                         value="{{ old('email') }}" required autocomplete="email" autofocus>

                                     @error('email')
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>
                                 <div class="form-floating mb-4">
                                     <input id="password" type="password"
                                         class="form-control @error('password') is-invalid @enderror" name="password"
                                         required autocomplete="current-password">

                                     @error('password')
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror

                                 </div>
                                 <div class="d-flex align-items-center justify-content-between mb-4">
                                     <div class="form-check">
                                         <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                             {{ old('remember') ? 'checked' : '' }}>

                                         <label class="form-check-label" for="remember">
                                             {{ __('Remember Me') }}
                                         </label>
                                     </div>
                                     <a href="">Forgot Password</a>
                                 </div>
                                 <button type="submit" class="btn btn-primary py-3 w-100 mb-4">{{ __('Login') }}
                                 </button>

                                 <p class="text-center mb-0">Don't have an Account? <a
                                         href="{{ route('register') }}">Sign Up</a></p>
                             </div>
                         </div>
                     </div>
                 </div>


                 <!-- Sign In End -->
             </div>
     </form>

     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="{{ asset('lib/chart/chart.min.js') }}"></script>
     <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
     <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
     <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
     <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
     <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

     <!-- Template Javascript -->
     <script src="{{ asset('js/main.js') }}"></script>
 </body>

 </html>


 {{--

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
