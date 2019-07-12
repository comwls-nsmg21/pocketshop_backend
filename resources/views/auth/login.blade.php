@extends('auth.app')
@section('content')
<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>
            <h4 class="logo-name">SDK</h4>
        </div>
        <h3>Welcome to SSDK</h3>
        <form class="m-t" role="form"  method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            </div>
            <div class="form-group">
                <input id="password" type="password" placeholder="Password" class="form-control @error('password')  is-invalid @enderror" name="password" required autocomplete="current-password">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">
                {{ __('Login') }}
            </button>
            <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">Create an account</a>
        </form>
    </div>
</div>
@endsection
