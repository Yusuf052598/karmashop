@extends('Back.Layouts.app')
@section('content')
    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>SHops <span class="table-project-n">Data</span> Table</h1>
                                <div class="sparkline13-outline-icon">
                                    <span><a href="#" class="btn btn-custon-rounded-two btn-danger">Create</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                @if(isset($clients))
                                    <table id="table"  data-toggle="table"   data-pagination="true"  data-search="true" data-show-columns="true"  data-toolbar="#toolbar">
                                        <thead>
                                        <tr>
                                            <th data-field="id">ID</th>
                                            <th data-field="P_name" >Product Name</th>
                                            <th data-field="C_name" >City</th>
                                            <th data-field="name" >Name</th>
                                            <th data-field="phone" >Imagas</th>
                                            <th data-field="status" >Status</th>
                                            <th data-field="complete">Edit</th>
                                            <th data-field="task" data-editable="">Delete</th>
                                            <th data-field="date" data-editable="">View</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($clients as $client)
                                            <tr @if($client->status==1)  class="bg-danger" @else class="bg-white" @endif >
                                                <td class="align-center" style="text-align: center">{{$client->id}}</td>
                                                <td><span style="margin-top: 10px"> {{$client->shop->name['uz']}}</span></td>
                                                <td class="text-center">{{$client->city->name['uz']}}</td>
                                                <td class="text-center">{{$client->name}}</td>
                                                <td><img style="width: 100px; height:80px" src="{{'/'.$client->shop->img}}" alt=""></td>
                                                <td>{{$client->status}}</td>
                                                <td class="datatable-ct">
                                                    <a href="{{route('client.edit',$client->id)}}">
                                                        <i class="fa fa-pencil fa-2x"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="#">
                                                        <i class="fa fa-trash fa-2x text-danger"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <i class="fa fa-eye fa-2x text-white"></i>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{$clients->links()}}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->
@endsection
