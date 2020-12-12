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
                                    <span><a href="{{route('shops.create')}}" class="btn btn-custon-rounded-two btn-danger">Create</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="pull-right search">
                                <input type="text" class="form-control" placeholder="Search..">
                            </div>
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                @if(isset($shops))
                                <table id="table" data-toggle="table" data-pagination="true" data-search="false" data-show-columns="true"  data-toolbar="#toolbar">
                                    <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">ID</th>
                                        <th data-field="category">Category</th>
                                        <th data-field="name" >Name</th>
                                        <th data-field="phone" >Imagas</th>
                                        <th data-field="company">Status</th>
                                        <th data-field="complete">Edit</th>
                                        <th data-field="task" data-editable="">Delete</th>
                                        <th data-field="date" data-editable="">View</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($shops as $shop)
                                        <tr>
                                            <td></td>
                                            <td>{{$shop->id}}</td>
                                            <td>{{$shop->category->name['uz']}}</td>
                                            <td>{{$shop->name['uz']}}</td>
                                            <td><img style="width: 100px; height:100px" src="{{'/'.$shop->img}}" alt=""></td>
                                            <td>{{$shop->status}}</td>
                                            <td class="datatable-ct">
                                                <a href="{{route('shops.edit',$shop->id)}}">
                                                    <i class="fa fa-pencil fa-2x"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{route('shops.delete',$shop->id)}}">
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
                                    {{$shops->links()}}
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
