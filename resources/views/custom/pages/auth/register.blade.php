@extends('custom.layouts.auth')

@section('title', 'Register')

@section('content')
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register</h1>

                            </div>
                            <form class="user" action="{{ route('register') }}" method="POST">@csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        id="exampleInputEmail" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama">
                                        @error('name')<p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"
                                        id="exampleInputEmail" name="email" value="{{ old('email') }}" placeholder="Masukkan Email">
                                        @error('email')<p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleInputPassword" name="password" placeholder="Masukkan Password">
                                        @error('password')<p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleInputPassword" name="password_confirmation" placeholder="Masukkan Konfirmasi Password">
                                        @error('password_confirmation')<p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                                <button type="submit" class="btn btn-success btn-user btn-block">
                                    Register
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/login">Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection