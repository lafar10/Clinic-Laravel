@extends('welcome')

@section('title', 'Add New Report')

@section('content')

<div class="container bg-light">
    <form action="{{route('store.report')}}" method="post">
        @csrf
        <br>
        <h3 class="display-5" style="margin-top:5px;">Add New Report</h3>
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
                <label for="">Date Creation :</label>
                <input type="date" name="date_creation" class="form-control" id="" >
                @error('date_creation')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Traitment :</label>
                <input type="text" name="content" class="form-control" >
                @error('content')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Traitment 1:</label>
                <input type="text" name="content2" class="form-control" >
                @error('content2')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Traitment 2:</label>
                <input type="text" name="content3" class="form-control" >
                @error('content3')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Traitment 3:</label>
                <input type="text" name="content4" class="form-control" >
                @error('content4')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Traitment 4:</label>
                <input type="text" name="content5" class="form-control" >
                @error('content5')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for=""> Letter  :</label>
                <textarea name="letter" rows="10" class="form-control" ></textarea>
                @error('letter')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-12" align="center">
                <br>
                <br>
                <button type="submit" class="btn btn-info" >Create</button>
                <br>
                <br>

            </div>
        </div>
    </form>
</div>

@stop
