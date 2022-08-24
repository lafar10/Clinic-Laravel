@extends('welcome')

@section('title', 'Add New Doctor')

@section('content')

<div class="container bg-light">
    <form action="{{route('store.doctor')}}" method="post">
        @csrf
        <br>
        <h3 class="display-5" style="margin-top:5px;">Add New Doctor</h3>
        <div class="row bg-white  shadow-sm" style="padding:5px;">
            <div class="col-md-6">
                <br>
                <label for="">Nom :</label>
                <input type="text" name="nom" class="form-control" id="" >
                @error('nom')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Prenom :</label>
                <input type="text" name="prenom" class="form-control" id="" >
                @error('prenom')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Email :</label>
                <input type="email" name="email" class="form-control" id="" >
                @error('email')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">tele :</label>
                <input type="text" name="tele" class="form-control" id="" >
                @error('tele')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Adresse :</label>
                <input type="text" name="adresse" class="form-control" id="" >
                <br>
                @error('adresse')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Spécialité :</label>
                <input type="text" name="specialite" class="form-control" id="" >
                <br>
                @error('specialite')
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
