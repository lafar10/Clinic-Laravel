@extends('welcome')

@section('title', 'Add New Appointment')

@section('content')

    <div class="container">
        <form action="{{route('store.appointment')}}" method="post">
            @csrf
            <div class="row bg-white" style="padding:5px;">
                <div class="col-md-12">
                    <h4>Add New Appointment</h4>
                </div>
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
                    <label for="">prenom :</label>
                    <input type="text" name="prenom" class="form-control" id="" >
                    @error('prenom')
                        <small class="form-text text-danger">
                            {{$message}}
                        </small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <br>
                    <label for="">Type Visite :</label>
                    <select name="type_maladie" class="form-control" >
                        <option value="Visite"  >Visite</option>
                        <option value="Control" >Control</option>
                    </select>
                    @error('type_maladie')
                        <small class="form-text text-danger">
                            {{$message}}
                        </small>
                    @enderror
                    <br>
                </div>
                <div class="col-md-6">
                    <br>
                    <label for="">Montant :</label>
                    <input type="text" name="montant" class="form-control" id="" >
                    @error('montant')
                        <small class="form-text text-danger">
                            {{$message}}
                        </small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <br>
                    <label for="">Status :</label>
                    <select name="status" class="form-control" id="">
                        <option value="En Attente">En Attente</option>
                        <option value="Annulé">Annulé</option>
                        <option value="Confirmé">Confirmé</option>
                    </select>
                    @error('status')
                        <small class="form-text text-danger">
                            {{$message}}
                        </small>
                    @enderror
                    <br>
                </div>
                <div class="col-md-6">
                    <br>
                    <label for="">Téléphone :</label>
                    <input type="text" name="tele" class="form-control">
                    @error('tele')
                        <small class="form-text text-danger">
                            {{$message}}
                        </small>
                    @enderror
                    <br>
                </div>
                <div class="col-md-12">
                    <br>
                    <label for="">Date Appointment :</label>
                    <input type="date" name="date_appointment" class="form-control">
                    @error('date_appointment')
                        <small class="form-text text-danger">
                            {{$message}}
                        </small>
                    @enderror
                    <br>
                </div>

                <div class="col-md-12" align="center">
                    <br>
                    <h5 >Select Heure Appointment</h5>
                    <br>
                    <div class="row">

                        <div class="col-md-1">
                            08:00
                            <input type="checkbox" name="heure_appointment" class="form-control"" value="08:00" {{ \App\Models\Appointment::whereDate('date_appointment',\Carbon\Carbon::now()->format('y-m-d'))->where('heure_appointment','08:00')->where('status','En Attente')->exists() ? 'hidden':''}}>
                        </div>
                        <div class="col-md-1">
                            08:30
                            <input type="checkbox" name="heure_appointment" class="form-control"" value="08:30" {{ \App\Models\Appointment::whereDate('date_appointment',\Carbon\Carbon::now()->format('y-m-d'))->where('heure_appointment','08:30')->where('status','En Attente')->exists() ? 'hidden':''}}>
                        </div>
                        <div class="col-md-1">
                            09:00
                            <input type="checkbox" name="heure_appointment" class="form-control" value="09:00"  {{ \App\Models\Appointment::whereDate('date_appointment',\Carbon\Carbon::now()->format('y-m-d'))->where('heure_appointment','09:00')->where('status','En Attente')->exists() ? 'hidden':''}}>
                        </div>
                        <div class="col-md-1">
                            09:30
                            <input type="checkbox" name="heure_appointment" class="form-control"" value="09:30" {{ \App\Models\Appointment::whereDate('date_appointment',\Carbon\Carbon::now()->format('y-m-d'))->where('heure_appointment','09:30')->where('status','En Attente')->exists() ? 'hidden':''}}>
                        </div>
                        <div class="col-md-1">
                            10:00
                            <input type="checkbox" name="heure_appointment" class="form-control"" value="10:00" {{ \App\Models\Appointment::whereDate('date_appointment',\Carbon\Carbon::now()->format('y-m-d'))->where('heure_appointment','10:00')->where('status','En Attente')->exists() ? 'hidden':''}}>
                        </div>
                        <div class="col-md-1">
                            10:30
                            <input type="checkbox" name="heure_appointment" class="form-control"" value="10:30" {{ \App\Models\Appointment::whereDate('date_appointment',\Carbon\Carbon::now()->format('y-m-d'))->where('heure_appointment','10:30')->where('status','En Attente')->exists() ? 'hidden':''}}>
                        </div>
                        <div class="col-md-1">
                            11:00
                            <input type="checkbox" name="heure_appointment" class="form-control"" value="11:00" {{ \App\Models\Appointment::whereDate('date_appointment',\Carbon\Carbon::now()->format('y-m-d'))->where('heure_appointment','11:00')->where('status','En Attente')->exists() ? 'hidden':''}}>
                        </div>
                        <div class="col-md-1">
                            11:30
                            <input type="checkbox" name="heure_appointment" class="form-control"" value="11:30" {{ \App\Models\Appointment::whereDate('date_appointment',\Carbon\Carbon::now()->format('y-m-d'))->where('heure_appointment','11:30')->where('status','En Attente')->exists() ? 'hidden':''}}>
                        </div>
                        <div class="col-md-1">
                            12:00
                            <input type="checkbox" name="heure_appointment" class="form-control"" value="12:00" {{ \App\Models\Appointment::whereDate('date_appointment',\Carbon\Carbon::now()->format('y-m-d'))->where('heure_appointment','12:00')->where('status','En Attente')->exists() ? 'hidden':''}}>
                        </div>
                        <div class="col-md-1">
                            12:30
                            <input type="checkbox" name="heure_appointment" class="form-control"" value="12:30" {{ \App\Models\Appointment::whereDate('date_appointment',\Carbon\Carbon::now()->format('y-m-d'))->where('heure_appointment','12:30')->where('status','En Attente')->exists() ? 'hidden':''}}>
                        </div>
                        <div class="col-md-1">
                            13:00
                            <input type="checkbox" name="heure_appointment" class="form-control"" value="13:00" {{ \App\Models\Appointment::whereDate('date_appointment',\Carbon\Carbon::now()->format('y-m-d'))->where('heure_appointment','13:00')->where('status','En Attente')->exists() ? 'hidden':''}}>
                        </div>
                        <div class="col-md-1">
                            13:30
                            <input type="checkbox" name="heure_appointment" class="form-control"" value="13:30" {{ \App\Models\Appointment::whereDate('date_appointment',\Carbon\Carbon::now()->format('y-m-d'))->where('heure_appointment','13:30')->where('status','En Attente')->exists() ? 'hidden':''}}>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-1">
                            14:00
                            <input type="checkbox" name="heure_appointment" class="form-control"" value="14:00" {{ \App\Models\Appointment::whereDate('date_appointment',\Carbon\Carbon::now()->format('y-m-d'))->where('heure_appointment','14:00')->where('status','En Attente')->exists() ? 'hidden':''}}>
                        </div>
                        <div class="col-md-1">
                            14:30
                            <input type="checkbox" name="heure_appointment" class="form-control"" value="14:30" {{ \App\Models\Appointment::whereDate('date_appointment',\Carbon\Carbon::now()->format('y-m-d'))->where('heure_appointment','14:30')->where('status','En Attente')->exists() ? 'hidden':''}}>
                        </div>
                        <div class="col-md-1">
                            15:00
                            <input type="checkbox" name="heure_appointment" class="form-control"" value="15:00" {{ \App\Models\Appointment::whereDate('date_appointment',\Carbon\Carbon::now()->format('y-m-d'))->where('heure_appointment','15:00')->where('status','En Attente')->exists() ? 'hidden':''}}>
                        </div>
                        <div class="col-md-1">
                            15:30
                            <input type="checkbox" name="heure_appointment" class="form-control"" value="15:30" {{ \App\Models\Appointment::whereDate('date_appointment',\Carbon\Carbon::now()->format('y-m-d'))->where('heure_appointment','15:30')->where('status','En Attente')->exists() ? 'hidden':''}}>
                        </div>
                        <div class="col-md-1">
                            16:00
                            <input type="checkbox" name="heure_appointment" class="form-control"" value="16:00" {{ \App\Models\Appointment::whereDate('date_appointment',\Carbon\Carbon::now()->format('y-m-d'))->where('heure_appointment','16:00')->where('status','En Attente')->exists() ? 'hidden':''}}>
                        </div>
                        <div class="col-md-1">
                            16:30
                            <input type="checkbox" name="heure_appointment" class="form-control"" value="16:30" {{ \App\Models\Appointment::whereDate('date_appointment',\Carbon\Carbon::now()->format('y-m-d'))->where('heure_appointment','16:30')->where('status','En Attente')->exists() ? 'hidden':''}}>
                        </div>
                        <div class="col-md-1">
                            17:00
                            <input type="checkbox" name="heure_appointment" class="form-control"" value="17:00" {{ \App\Models\Appointment::whereDate('date_appointment',\Carbon\Carbon::now()->format('y-m-d'))->where('heure_appointment','17:00')->where('status','En Attente')->exists() ? 'hidden':''}}>
                        </div>
                        <div class="col-md-1">
                            17:30
                            <input type="checkbox" name="heure_appointment" class="form-control"" value="17:30" {{ \App\Models\Appointment::whereDate('date_appointment',\Carbon\Carbon::now()->format('y-m-d'))->where('heure_appointment','17:30')->where('status','En Attente')->exists() ? 'hidden':''}}>
                        </div>
                        <div class="col-md-1">
                            18:00
                            <input type="checkbox" name="heure_appointment" class="form-control"" value="18:00" {{ \App\Models\Appointment::whereDate('date_appointment',\Carbon\Carbon::now()->format('y-m-d'))->where('heure_appointment','18:00')->where('status','En Attente')->exists() ? 'hidden':''}}>
                        </div>
                    </div>
                    <br>
                    @error('heure_appointment')
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
