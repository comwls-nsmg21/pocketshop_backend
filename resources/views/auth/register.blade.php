@extends('auth.app')

@section('content')


    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h2 class="logo-name">SDK</h2>

            </div>
            <h3>Welcome to SSDK</h3>
            <form class="m-t" method="POST" role="form" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <input id="name" type="text" placeholder="Name"
                           class="form-control @error('name') is-invalid @enderror" name="name"
                           value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="email" type="email" placeholder="Email"
                           class="form-control @error('email') is-invalid @enderror" name="email"
                           value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password" type="password" placeholder="Password"
                           class="form-control @error('password') is-invalid @enderror" name="password" required
                           autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password-confirm" type="password" placeholder="PasswordConfirm" class="form-control"
                           name="password_confirmation" required autocomplete="new-password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <a class="btn btn-sm btn-white btn-block" href="{{ route('login') }}">  {{ __('Login') }}</a>
            </form>
        </div>
    </div>
    <!-- iCheck -->


@endsection
