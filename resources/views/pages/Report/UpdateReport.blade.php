@extends('welcome')

@section('title', 'Update Report ' . $reports->nom .' '. $reports->prenom . ' ')

@section('content')

<div class="container bg-light">
    <form action="{{route('update.report')}}" method="post">
        @csrf
        <input type="hidden" name="report_id" value="{{$reports->id}}">
        <br>
        <h3 class="display-5" style="margin-top:5px;">Update Report {{$reports->nom}} {{$reports->prenom}}</h3>
        <div class="row bg-white  shadow-sm" style="padding:5px;">
            <div class="col-md-6">
                <br>
                <label for="">Nom :</label>
                <input type="text" name="nom" class="form-control" value="{{$reports->nom}}" >
                @error('nom')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Prenom :</label>
                <input type="text" name="prenom" class="form-control" value="{{$reports->prenom}}" >
                @error('prenom')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Date Creation :</label>
                <input type="date" name="date_creation" class="form-control" value="{{$reports->date_creation}}" >
                @error('date_creation')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Traitment :</label>
                <input type="text" name="content" class="form-control" value="{{$reports->content}}">
                @error('content')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Traitment 1:</label>
                <input type="text" name="content2" class="form-control" value="{{$reports->content2}}">
                @error('content2')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Traitment 2:</label>
                <input type="text" name="content3" class="form-control" value="{{$reports->content3}}">
                @error('content3')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Traitment 3:</label>
                <input type="text" name="content4" class="form-control" value="{{$reports->content4}}">
                @error('content4')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Traitment 4:</label>
                <input type="text" name="content5" value="{{$reports->content5}}" class="form-control" >
                @error('content5')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-12">
                <br>
                <label for="">Letter :</label>
                <textarea name="letter" rows="20" cols="20" class="form-control" >{{$reports->letter}}</textarea>
                @error('letter')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-12" align="center">
                <br>
                <br>
                <button type="submit" class="btn btn-info" >Update</button>
                <br>
                <br>
            </div>
        </div>
    </form>
</div>

@stop
