@extends('welcome')

@section('title', 'Add New User')

@section('content')

    <div class="container">
        <form action="{{route('store.user')}}" method="post">
            @csrf
            <div class="row bg-white" style="padding:5px;">
                <div class="col-md-12">
                    <h4>Add New User</h4>
                </div>
                <div class="col-md-6">
                    <br>
                    <label for="">Nom :</label>
                    <input type="text" name="name" class="form-control" id="" >
                    @error('name')
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
                    <label for="">PassWord :</label>
                    <input type="password" name="password" class="form-control" id="" >
                    @error('password')
                        <small class="form-text text-danger">
                            {{$message}}
                        </small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <br>
                    <label for="">téléphone :</label>
                    <input type="text" name="tele" class="form-control" id="" >
                    @error('tele')
                        <small class="form-text text-danger">
                            {{$message}}
                        </small>
                    @enderror
                </div>
                <div class="col-md-12">
                    <br>
                    <label for="">Role As :</label>
                    <select name="role_as" class="form-control" id="">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    @error('role_as')
                        <small class="form-text text-danger">
                            {{$message}}
                        </small>
                    @enderror
                    <br>
                </div>

                <div class="col-md-12" align="center">
                    <button type="submit" class="btn btn-success">Create</button>
                </div>
            </div>
        </form>
    </div>

@stop
