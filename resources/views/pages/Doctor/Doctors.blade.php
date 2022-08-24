@extends('welcome')

@section('title', 'Doctors List')

@section('content')

<div class="row col-md-12">


    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Doctors List</h4>
                    </div>
                    <div class="col-md-6" align="right">
                       <a href="{{route('doctors')}}" class="btn btn-dark"><i class="now-ui-icons arrows-1_refresh-69"></i> Refresh</a> <a href="{{route('create.doctor')}}" class="btn btn-success" ><i class="now-ui-icons ui-1_simple-add"></i> Add New Doctor</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @if ($doctors->count() > 0)
                    <table class="table">
                        <thead class=" text-primary">
                            <th>
                                ID
                            </th>
                            <th>
                                Nom
                            </th>
                            <th>
                                Prenom
                            </th>
                            <th>
                                Téléphone
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Adresse
                            </th>
                            <th>
                                Spécialté
                            </th>
                            <th>
                                Created At
                            </th>
                            <th>
                                Actions
                            </th>
                        </thead>
                        <tbody>

                                @foreach ($doctors as $doctor)
                                    <tr>
                                        <td>
                                        {{$doctor->id}}
                                        </td>
                                        <td>
                                            {{$doctor->nom}}
                                        </td>
                                        <td>
                                            {{$doctor->prenom}}
                                        </td>
                                        <td>
                                            {{$doctor->tele}}
                                        </td>
                                        <td>
                                            {{$doctor->email}}
                                        </td>
                                        <td>
                                            {{$doctor->adresse}}
                                        </td>
                                        <td>
                                            {{$doctor->specialite}}
                                        </td>
                                        <td>
                                            {{$doctor->created_at}}
                                        </td>
                                        <td>
                                            <form action="{{route('delete.doctor')}}" method="POST" class="d-flex" onSubmit="return confirm('Are you sure !?')" class="d-flex">
                                                @csrf
                                                <input type="hidden" name="doctor_id" value="{{$doctor->id}}">
                                                <a class="btn btn-info  btn-sm" href="{{route('edit.doctor',$doctor->id)}}"><i class="now-ui-icons ui-2_settings-90"></i></a>
                                                &nbsp;&nbsp;
                                                <button class="btn btn-danger  btn-sm" type="submit">
                                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                    <br>
                    @if($doctors->count() <= 0 )
                        <span></span>
                    @else
                        <div class="d-flex justify-content-center" >
                            {{ $doctors->links("pagination::bootstrap-4") }}
                        </div>
                    @endif
                    @else
                        <div align="center">
                            <h2 class="display-5" style="margin-top:50px;">No Record ^+^ !</h2>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@stop
