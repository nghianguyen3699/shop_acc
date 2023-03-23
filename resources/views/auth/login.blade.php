@extends('layouts.hidden')

@section('content')
<section class="login-content">
    <div class="container h-100">
        <div class="row align-items-center justify-content-center h-100">
            <div class="col-md-5">
                <div class="card p-3">
                    <div class="card-body">
                        <div class="auth-logo">
                            <img src="localhost/assets/storage/images/logo_dark_8H0.png"
                                class="img-fluid rounded-normal darkmode-logo d-none" alt="logo">
                            <img src="localhost/assets/storage/images/logo_light_HJB.png"
                                class="img-fluid rounded-normal light-logo" alt="logo">
                        </div>
                        <h3 class="mb-3 font-weight-bold text-center">Đăng Nhập</h3>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-secondary">Email người dùng</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-2">
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <label class="text-secondary">Mật khẩu</label>

                                        </div>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="btnLogin" class="btn btn-primary btn-block mt-2">Đăng Nhập</button>
                            <div class="col-lg-12 mt-3">
                                <p class="mb-0 text-center">Bạn không có tài khoản? <a
                                        href="{{ route('register') }}">Đăng Ký</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection