@extends('welcome')

@section('title', 'Users List')

@section('content')

<div class="row col-md-12">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Users List</h4>
                    </div>
                    <div class="col-md-6" align="right">
                        <a href="{{route('users')}}" class="btn btn-dark"><i class="now-ui-icons arrows-1_refresh-69"></i> Refresh</a>   <a href="{{route('add.user')}}" class="btn btn-success" ><i class="now-ui-icons ui-1_simple-add"></i> Add New User</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if($users->count() > 0)
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>
                                ID
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Téléphne
                            </th>
                            <th>
                                Role As
                            </th>
                            <th>
                                Created At
                            </th>
                            <th>
                                Actions
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                    {{$user->id}}
                                    </td>
                                    <td>
                                        {{$user->name}}
                                    </td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    <td>
                                        {{$user->tele}}
                                    </td>
                                    <td>
                                        {{$user->role_as}}
                                    </td>
                                    <td>
                                        {{$user->created_at}}
                                    </td>
                                    <td>
                                        <form action="{{route('delete.user')}}" method="POST" class="d-flex" onsubmit="return confirm('Are you sure ^+^ ?!')">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{$user->id}}">
                                            <a class="btn btn-info  btn-sm" href="{{route('edit.user',$user->id)}}"><i class="now-ui-icons ui-2_settings-90"></i></a>
                                            &nbsp;&nbsp;
                                            <button class="btn btn-danger  btn-sm" type="submit"">
                                                <i class="now-ui-icons ui-1_simple-remove"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
                    @if($users->count() <= 0 )
                        <span></span>
                    @else
                        <div class="d-flex justify-content-center" >
                            {{ $users->links("pagination::bootstrap-4") }}
                        </div>
                    @endif
                @else
                    <div class="justify-content-center">
                        <h3>No Records Found ^-^</h3>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@stop
