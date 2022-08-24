@extends('welcome')

@section('title', 'Add New Patient')

@section('content')

<div class="container bg-light">
    <form action="{{route('store.patient')}}" method="post">
        @csrf
        <br>
        <h3 class="display-5" style="margin-top:5px;">Add New Patient</h3>
        <div class="row bg-white  shadow-sm" style="padding:5px;">
            <div class="col-md-6">
                <br>
                <label for="">Nom :</label>
                <input type="text" name="nom" class="form-control" value="{{old('nom')}}" >
                @error('nom')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Prenom :</label>
                <input type="text" name="prenom" class="form-control" value="{{old('prenom')}}" >
                @error('prenom')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Email :</label>
                <input type="email" name="email" class="form-control" value="{{old('email')}}" >
                @error('email')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">tele :</label>
                <input type="text" name="tele" class="form-control" value="{{old('tele')}}"  >
                @error('tele')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-12">
                <br>
                <label for="">Type de Malade :</label>
                <input type="text" name="maladie_type" value="{{old('maladie_type')}}" class="form-control">
                @error('maladie_type')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-12" align="center">
                <button type="submit" class="btn btn-info" >Create</button>
            </div>
        </div>
    </form>
</div>

@stop
