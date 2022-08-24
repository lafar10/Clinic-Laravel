@extends('welcome')

@section('title', 'Payments List')

@section('content')


    <div class="row col-md-12">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="card-title">Payments List</h4>
                        </div>
                        <div class="col-md-6" align="right">
                            <a href="{{route('payments')}}" class="btn btn-dark"><i class="now-ui-icons arrows-1_refresh-69"></i> Refresh</a>  <a href="{{route('create.payment')}}" class="btn btn-success" ><i class="now-ui-icons ui-1_simple-add"></i> Add New Payment</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if($payments->count() > 0)

                    <div class="table-responsive">
                        <table class="table" width="100%">
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
                                    Type_Malade
                                </th>
                                <th>
                                    Montant
                                </th>
                                <th>
                                    Méth Paiement
                                </th>
                                <th>
                                    Paiement Status
                                </th>
                                <th>
                                    Created At
                                </th>
                                <th>
                                    Row Actions
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment)

                                <tr>
                                    <td>
                                        {{$payment->id}}
                                    </td>
                                    <td>
                                        {{$payment->nom}}
                                    </td>
                                    <td>
                                        {{$payment->prenom}}
                                    </td>
                                    <td>
                                        {{$payment->maladie_type}}
                                    </td>
                                    <td class="text-right">
                                        {{$payment->montant}} <strong>Dh's</strong>
                                    </td>
                                    <td>
                                        {{$payment->payment_method}}
                                    </td>
                                    <td>
                                        @if($payment->status == 'Payed')
                                            <div class="alert alert-success">
                                                <span>{{$payment->status}}</span>
                                            </div>
                                        @else
                                            <div class="alert alert-primary">
                                                <span>{{$payment->status}}</span>
                                            </div>
                                        @endif

                                    </td>
                                    <td>
                                        {{$payment->created_at}}
                                    </td>
                                    <td>
                                        <form action="{{route('delete.payment')}}" method="POST" class="d-flex" onSubmit="return confirm('Are you Sure !?')" >
                                            @csrf
                                            <input type="hidden" name="payment_id" value="{{$payment->id}}">
                                            <a class="btn btn-info  btn-sm" href="{{route('edit.payment',$payment->id)}}"><i class="now-ui-icons ui-2_settings-90"></i></a>
                                            &nbsp;&nbsp;
                                            <button class="btn btn-danger  btn-sm">
                                                <i class="now-ui-icons ui-1_simple-remove"></i>
                                            </button>
                                            &nbsp;&nbsp;
                                            <a class="btn btn-warning btn-sm" href="{{route('pdf.payment',$payment->id)}}"><i class="now-ui-icons arrows-1_share-66"></i> PDF</a>
                                        </form>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <br>
                        @if($payments->count() <= 0 )
                            <span></span>
                        @else
                            <div class="d-flex justify-content-center" >
                                {{ $payments->links("pagination::bootstrap-4") }}
                            </div>
                        @endif
                    @else
                        <div class="justify-content-center">
                            <h5 class="display-5">No Records ^-^ !</h5>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@stop
