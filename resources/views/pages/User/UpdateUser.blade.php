@extends('welcome')

@section('title', 'Update User ' . $users->name . ' ')

@section('content')

    <div class="container">
        <form action="{{route('update.user')}}" method="post">
            @csrf
            <input type="hidden" name="user_id" value="{{$users->id}}">
            <div class="row bg-white" style="padding:5px;">
                <div class="col-md-12">
                    <h4>Update User {{$users->name}}</h4>
                </div>
                <div class="col-md-6">
                    <br>
                    <label for="">Nom :</label>
                    <input type="text" name="name" class="form-control"  value="{{$users->name}}" >
                    @error('name')
                        <small class="form-text text-danger">
                            {{$message}}
                        </small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <br>
                    <label for="">Email :</label>
                    <input type="email" name="email" class="form-control"  value="{{$users->email}}" >
                    @error('email')
                        <small class="form-text text-danger">
                            {{$message}}
                        </small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <br>
                    <label for="">PassWord :</label>
                    <input type="password" name="password" class="form-control"  value="{{$users->password}}" >
                    @error('password')
                        <small class="form-text text-danger">
                            {{$message}}
                        </small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <br>
                    <label for="">téléphone :</label>
                    <input type="text" name="tele" class="form-control"  value="{{$users->tele}}" >
                    @error('tele')
                        <small class="form-text text-danger">
                            {{$message}}
                        </small>
                    @enderror                </div>
                <div class="col-md-12">
                    <br>
                    <label for="">Role As :</label>
                    <select name="role_as" class="form-control" value="{{$users->id}}">
                        <option value="0" {{$users->role_as == '0' ? 'selected' : '' }}>0</option>
                        <option value="1" {{$users->role_as == '1' ? 'selected' : '' }} >1</option>
                        <option value="2" {{$users->role_as == '2' ? 'selected' : '' }} >2</option>
                    </select>
                    @error('role_as')
                        <small class="form-text text-danger">
                            {{$message}}
                        </small>
                    @enderror
                    <br>
                </div>
                <div class="col-md-12" align="center">
                    <button type="submit" class="btn btn-info">Update</button>
                </div>
            </div>
        </form>
    </div>

@stop
