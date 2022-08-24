@extends('welcome')

@section('title', 'Add New Paiement')

@section('content')

<div class="container bg-light">
    <form action="{{route('store.payment')}}" method="post">
        @csrf
        <br>
        <h3 class="display-5" style="margin-top:5px;">Add New Paiement</h3>
        <div class="row bg-white  shadow-sm" style="padding:5px;">
            <div class="col-md-6">
                <br>
                <label for="">Nom :</label>
                <input type="text" name="nom" class="form-control" value="{{old('nom')}}" >
                @error('nom')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Prenom :</label>
                <input type="text" name="prenom" class="form-control"  value="{{old('prenom')}}" >
                @error('prenom')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Montant :</label>
                <input type="text" name="montant" class="form-control"  value="{{old('montant')}}" >
                @error('montant')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Type de Malade :</label>
                <input type="text" name="maladie_type" class="form-control"  value="{{old('maladie_type')}}" >
                @error('maladie_type')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Méthode de Paiement :</label>
                <select name="payment_method" class="form-control" id="">
                    <option class="selected" disabled>--- Select Method ---</option>
                    <option value="Cash">Cash</option>
                    <option value="Chéque">Chéque</option>
                </select>
                <br>
                @error('payment_method')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Status :</label>
                <select name="status" class="form-control" id="">
                    <option class="selected" disabled>--- Select Status ---</option>
                    <option value="Payed">Payed</option>
                    <option value="Not Payed">Not Payed</option>
                </select>
                <br>
                @error('status')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-12" align="center">
                <button type="submit" class="btn btn-info" >Create</button>
            </div>
        </div>
    </form>
</div>

@stop
