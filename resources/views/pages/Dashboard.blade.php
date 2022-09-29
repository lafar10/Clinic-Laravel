@extends('welcome')

@section('title', 'Dashboard')

@section('content')

        <div class="container " >
            <div class="row shadow-lg" id="fl">
                <div class="col-lg-4 bg-white" >
                    <a href="{{route('appointment.status')}}"id="flx">
                        <h4 class="display-5"><i style="color:rgb(240, 98, 98);" class="now-ui-icons ui-1_calendar-60"></i>&nbsp;&nbsp;Appointments</h4>
                        <h2 class="display-5">{{ $appointments }}</h2>
                    </a>
                </div>
                 <div class="col-lg-4 bg-white" >
                    <a href="{{route('appointment.status')}}"id="flx">
                        <h4 class="display-5"><i style="color:rgb(240, 98, 98);" class="now-ui-icons ui-1_calendar-60"></i>&nbsp;&nbsp;Appointments</h4>
                        <h2 class="display-5">{{ $appointments1 }}</h2>
                    </a>
                </div>
                <div class="col-lg-4 bg-white" >
                    <a href="{{route('payments')}}"id="flx">
                        <h4 class="display-5"><i style="color:rgb(240, 98, 98);" class="now-ui-icons business_money-coins"></i>&nbsp;Payments Total</h4>
                        <h2 class="display-5">{{\App\Models\Payment::where('status','Payed')->sum('montant')}} <strong>DH's</strong></h2>
                    </a>
                </div>

            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

@endsection
