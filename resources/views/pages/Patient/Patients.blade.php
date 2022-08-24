@extends('welcome')

@section('title', 'Patients List')

@section('content')

<div class="row col-md-12">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Patients List</h4>
                    </div>
                    <div class="col-md-6" align="right">
                        <a href="{{route('patients')}}" class="btn btn-dark"><i class="now-ui-icons arrows-1_refresh-69"></i> Refresh</a>  <a href="{{route('create.patient')}}" class="btn btn-success" ><i class="now-ui-icons ui-1_simple-add"></i> Add New Patient</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if ($patients->count() > 0)

                <div class="table-responsive">
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
                                Type de Malade
                            </th>
                            <th>
                                Téléphone
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Created At
                            </th>
                            <th>
                                Actions
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($patients as $patient)
                                <tr>
                                    <td>
                                        {{$patient->id}}
                                    </td>
                                    <td>
                                        {{$patient->nom}}
                                    </td>
                                    <td>
                                        {{$patient->prenom}}
                                    </td>
                                    <td>
                                        {{$patient->maladie_type}}
                                    </td>
                                    <td>
                                        {{$patient->tele}}
                                    </td>
                                    <td>
                                        {{$patient->email}}
                                    </td>
                                    <td>
                                        {{$patient->created_at}}
                                    </td>
                                    <td>
                                        <form action="{{route('delete.patient')}}" method="POST" class="d-flex" onSubmit="return confirm('Are you sure !?')" class="d-flex">
                                            @csrf
                                            <input type="hidden" name="patient_id"  value="{{$patient->id}}">
                                            <a class="btn btn-info  btn-sm" href="{{route('edit.patient',$patient->id)}}"><i class="now-ui-icons ui-2_settings-90"></i></a>
                                            &nbsp;&nbsp;
                                            <button class="btn btn-danger  btn-sm">
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
                    @if($patients->count() <= 0 )
                        <span></span>
                    @else
                        <div class="d-flex justify-content-center" >
                            {{ $patients->links("pagination::bootstrap-4") }}
                        </div>
                    @endif
                @else

                    <div class="justify-content-center">
                        <h5 class="display-5">No Records ^+^ !</h5>
                    </div>

                @endif
            </div>
        </div>
    </div>
</div>

@stop
