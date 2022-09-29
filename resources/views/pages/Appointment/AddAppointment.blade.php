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
                            <input type="checkbox" name="heure_appointment" class="form-control"" value="08:00" >
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
