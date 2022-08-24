@extends('welcome')

@section('title', 'Update Doctor ' . $doctors->nom .' '. $doctors->prenom . ' ')

@section('content')

<div class="container bg-light">
    <form action="{{route('update.doctor')}}" method="post">
        @csrf
        <input type="hidden" name="doctor_id" value="{{$doctors->id}}">
        <br>
        <h3 class="display-5" style="margin-top:5px;">Update Doctor {{$doctors->nom}} {{$doctors->prenom}}</h3>
        <div class="row bg-white  shadow-sm" style="padding:5px;">
            <div class="col-md-6">
                <br>
                <label for="">Nom :</label>
                <input type="text" name="nom" class="form-control" value="{{$doctors->nom}}" >
                @error('nom')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Prenom :</label>
                <input type="text" name="prenom" class="form-control" value="{{$doctors->prenom}}" >
                @error('prenom')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Email :</label>
                <input type="email" name="email" class="form-control" value="{{$doctors->email}}" >
                @error('email')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">tele :</label>
                <input type="text" name="tele" class="form-control" value="{{$doctors->tele}}" >
                @error('tele')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Adresse :</label>
                <input type="text" name="adresse" class="form-control" value="{{$doctors->adresse}}" >
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
                <input type="text" name="specialite" class="form-control" value="{{$doctors->specialite}}" >
                <br>
                @error('specialite')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-12" align="center">
                <button type="submit" class="btn btn-info" >Update</button>
            </div>
        </div>
    </form>
</div>

@stop
