@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row justify-content-center" >
        <div class="col-md-8" >
            <div class="card" >
                <div class="card-header text-center">
                    <i class="now-ui-icons education_atom"></i> {{ __('Login') }}
                    <br>
                    <br>
                      <div class="container">
                            @auth

                        @endauth

                        @guest
                            <div class="alert alert-primary">
                                créer un nouveau compte pour accéder au tableau de bord
                          </div>
                        @endguest
                       </div>
                </div>

                <div class="card-body" >
                    <br>
                    <form method="POST" action="{{ route('login') }}"  >
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

                        <!--<div class="row justify-content-center">
                            <div class="col-lg-12" >
                               <div>
                                    <input class="form-control" type="checkbox" style="margin-right:150px" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                </div>
                            </div>
                        </div>-->
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Login') }}
                                </button>
                                &nbsp;&nbsp;<a href="{{route('register')}}" class="btn btn-outline-danger">
                                    {{ __('Register') }}
                                </a>
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
@endsection
