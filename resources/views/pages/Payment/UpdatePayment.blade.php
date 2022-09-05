@extends('welcome')

@section('title', 'Update Paiement N° ' . $payments->id . ' ')

@section('content')

<div class="container bg-light">
    <form action="{{route('update.payment')}}" method="post">
        @csrf
        <input type="hidden" name="payment_id" value="{{$payments->id}}">
        <br>
        <h3 class="display-5" style="margin-top:5px;">Update Paiement N° {{$payments->id}}</h3>
        <div class="row bg-white  shadow-sm" style="padding:5px;">
            <div class="col-md-6">
                <br>
                <label for="">Nom :</label>
                <input type="text" name="nom" class="form-control" value="{{$payments->nom}}" >
                @error('nom')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Prenom :</label>
                <input type="text" name="prenom" class="form-control" value="{{$payments->prenom}}" >
                @error('prenom')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Téléphne :</label>
                <input type="text" name="tele" class="form-control" value="{{$payments->tele}}" >
                @error('tele')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Montant :</label>
                <input type="text" name="montant" class="form-control" value="{{$payments->montant}}" >
                @error('montant')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Type de Malade :</label>
                <input type="text" name="maladie_type" class="form-control" value="{{$payments->maladie_type}}" >
                @error('maladie_type')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-6">
                <br>
                <label for="">Méthode de Paiement :</label>
                <select name="payment_method" class="form-control" value="{{$payments->payment_method}}">
                    <option value="Cash" {{$payments->payment_method == 'Cash' ? 'selected':''}}>Cash</option>
                    <option value="Chéque" {{$payments->payment_method == 'Chéque' ? 'selected':''}}>Chéque</option>
                </select>
                <br>
                @error('payment_method')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-12">
                <br>
                <label for="">Status :</label>
                <select name="status" class="form-control" value="{{$payments->status}}">
                    <option value="Payed" {{$payments->status == 'Payed' ? 'selected':''}}>Payed</option>
                    <option value="Not Payed" {{$payments->status == 'Not Payed' ? 'selected':''}}>Not Payed</option>
                </select>
                <br>
                @error('status')
                    <small class="form-text text-danger">
                        {{$message}}
                    </small>
                @enderror
            </div>
            <div class="col-md-12" align="center">
                <button type="submit" class="btn btn-info" >Update</button>
            </div>
        </div>
    </form>
</div>

@stop
