@extends('welcome')

@section('title', 'Appointments List En Cours')

@section('content')

<div class="row col-md-12">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Appointments List</h4>
                    </div>
                    <div class="col-md-6" align="right">
                        <a href="{{route('appointment.status')}}" class="btn btn-dark"><i class="now-ui-icons arrows-1_refresh-69"></i> Refresh</a>   <a href="{{route('create.appointment')}}" class="btn btn-success" ><i class="now-ui-icons ui-1_simple-add"></i> Add New Appointment</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if ($appointments->count() > 0)
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
                                    Téléphone
                                </th>
                                <th>
                                    Type Maladie
                                </th>
                                <th>
                                    Montant
                                </th>
                                <th>
                                    Date RDV
                                </th>
                                <th>
                                    Heure RDV
                                </th>
                                <th>
                                    Status
                                </th>

                                <th>
                                    Actions
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment)
                                    <tr>
                                        <td>
                                            {{$appointment->id}}
                                        </td>
                                        <td>
                                            {{$appointment->nom}}
                                        </td>
                                        <td>
                                            {{$appointment->prenom}}
                                        </td>
                                        <td>
                                            {{$appointment->tele}}
                                        </td>
                                        <td>
                                            {{$appointment->type_maladie}}
                                        </td>
                                        <td class="text-right">
                                            {{$appointment->montant}} <strong>Dh's</strong>
                                        </td>
                                        <td >
                                            {{$appointment->date_appointment}}
                                        </td>
                                        <td >
                                            {{$appointment->heure_appointment}}
                                        </td>
                                        <td>
                                            @if ($appointment->status == 'En Attente')
                                                <div class="alert alert-warning">
                                                    {{$appointment->status}}
                                                </div>
                                            @elseif($appointment->status == 'Annulé')
                                                <div class="alert alert-danger">
                                                    {{$appointment->status}}
                                                </div>
                                            @elseif($appointment->status == 'Confirmé')
                                                <div class="alert alert-success">
                                                    {{$appointment->status}}
                                                </div>
                                            @endif
                                        </td>

                                        <td>
                                            <form action="{{route('delete.appointment')}}" method="POST" class="d-flex" onsubmit="return confirm('Are You Sure ^*^ ?!')">
                                                @csrf
                                                <input type="hidden" name="appointment_id" value="{{$appointment->id}}">
                                                <a class="btn btn-info  btn-sm" href="{{route('edit.appointment',$appointment->id)}}"><i class="now-ui-icons ui-2_settings-90"></i></a>
                                                &nbsp;&nbsp;
                                                <button class="btn btn-danger  btn-sm">
                                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                                </button>
                                                &nbsp;&nbsp;
                                                <a class="btn btn-warning btn-sm" href="{{route('pdf.appointment',$appointment->id)}}"><i class="now-ui-icons arrows-1_share-66"></i> PDF</a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <br>
                    @if($appointments->count() <= 0 )
                        <span></span>
                    @else
                        <div class="d-flex justify-content-center" >
                            {{ $appointments->links("pagination::bootstrap-4") }}
                        </div>
                    @endif
                @else
                    <div class="justify-content-center">
                        <h3 class="display-5">No Records Found ^-^ !</h3>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@stop
