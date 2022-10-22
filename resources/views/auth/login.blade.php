@extends('layouts.app')
@section('content')

<div class="container">
<div class="black">
<h1 style="color:white; font-size:60px;">Quick Park</h1>
<p clas="smalltitle" style="color:white; font-size:20px;">More convenient to reserve car park and save time looking for a parking.</p>
</div>
        <div class="col-md-6 offset-md-6">
            <div class="card">
                <div class="card-body" style="background-color:lightgray;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2" >
                                <button type="submit" class="btn btn-primary" style="background-color:green; width:330px">
                                    {{ __('Login') }}
                                </button><br>
                            </div>
                            <div class="form-group row">
                        </div>
                            <div class="col-md-8 offset-md-3" >
                                Don't have an account?
                                <a  class="register" href="{{ route('register') }}" style="color:black;">
                                    <b>{{ __('Register') }}</b>
                                </a><br>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection