@extends('welcome')

@section('title', 'Reports List')

@section('content')


    <div class="row col-md-12">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="card-title">Reports List</h4>
                        </div>
                        <div class="col-md-6" align="right">
                            <a href="{{route('reports')}}" class="btn btn-dark"><i class="now-ui-icons arrows-1_refresh-69"></i> Refresh</a>  <a href="{{route('create.report')}}" class="btn btn-success" ><i class="now-ui-icons ui-1_simple-add"></i> Add New Report</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if($reports->count() > 0)

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
                                    Date Creation
                                </th>
                                <th>
                                    Traitment
                                </th>
                                <th>
                                    Traitment 1
                                </th>
                                <th>
                                    Traitment 2
                                </th>
                                <th>
                                    Traitment 4
                                </th>
                                <th>
                                    Traitment 5
                                </th>
                                <th style="width:100px;">
                                    Letter
                                </th>
                                <th>
                                    Row Actions
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($reports as $report)

                                <tr>
                                    <td>
                                        {{$report->id}}
                                    </td>
                                    <td>
                                        {{$report->nom}}
                                    </td>
                                    <td>
                                        {{$report->prenom}}
                                    </td>
                                    <td>
                                        {{$report->date_creation}}
                                    </td>
                                    <td>
                                        <p>{{$report->content}} </p>
                                    </td>
                                    <td>
                                        <p>{{$report->content2}} </p>
                                    </td>
                                    <td>
                                        <p>{{$report->content3}} </p>
                                    </td>
                                    <td>
                                        <p>{{$report->content4}} </p>
                                    </td>
                                    <td>
                                        <p>{{$report->content5}} </p>
                                    </td>
                                    <td >
                                        <textarea class="form-control" rows="10" style="width:300px;height:100px;" style="border-color:white">{{$report->letter}} </textarea>
                                    </td>
                                    <td>
                                        <form action="{{route('delete.report')}}" method="POST" class="d-flex" onSubmit="return confirm('Are you Sure !?')" >
                                            @csrf
                                            <input type="hidden" name="report_id" value="{{$report->id}}">
                                            <a class="btn btn-info  btn-sm" href="{{route('edit.report',$report->id)}}"><i class="now-ui-icons ui-2_settings-90"></i></a>
                                            &nbsp;&nbsp;
                                            <button class="btn btn-danger  btn-sm">
                                                <i class="now-ui-icons ui-1_simple-remove"></i>
                                            </button>
                                            &nbsp;&nbsp;
                                            <a class="btn btn-warning btn-sm" href="{{route('pdf.report',$report->id)}}"><i class="now-ui-icons arrows-1_share-66"></i> PDF</a>
                                        </form>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <br>
                        @if($reports->count() <= 0 )
                            <span></span>
                        @else
                            <div class="d-flex justify-content-center" >
                                {{ $reports->links("pagination::bootstrap-4") }}
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
