@extends('Back.Layouts.app')
@section('content')
    <div class="basic-form-area mg-b-15">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline12-list shadow-reset mg-t-30">
                    <div class="sparkline12-hd">
                        <div class="main-sparkline12-hd">
                            <h1>Categories Create</h1>
                            <div class="sparkline12-outline-icon">
                                <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline12-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                @if(session()->get('success'))
                                    <div class="alert alert-success text-dark">
                                        {{session()->get('success')}}
                                    </div>
                                @endif
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach($errors->all() as $error)
                                            <p>{{$error}}</p>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="row">
                                <form action="{{route('categories.store')}}" method="post">
                                            @csrf
                                            <div class="col-lg-6">
                                                <label class="login2">Name Uz</label>
                                                    <input type="text" id="logi2" name="name[uz]" class="form-control " />
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="login3">Name Ru</label>
                                                    <input type="text" id="login3" name="name[ru]" class="form-control " />
                                            </div>
                                    <div class="col-lg-12 mg-t-30" >
                                        <input type="submit" class="btn btn-danger" value="create">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
