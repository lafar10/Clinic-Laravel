@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}  <strong>{{auth()->user()->name}}</strong>
                    <form action="{{route('logout')}}" method="post" align="right">
                        @csrf
                        <button class="btn btn-info" type="submit"><i class="now-ui-icons arrows-1_minimal-right"></i> LogOut</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
