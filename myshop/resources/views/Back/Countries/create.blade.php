@extends('Back.Layouts.app')
@section('content')
    <div class="advanced-form-area mg-b-15">
        <div class="container-fluid">
            <form action="{{route('country.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sparkline10-graph">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="label" class="form-group">Name</label>
                                    <input required type="text" id="label" name="name[uz]" class="form-control" placeholder="Name Uz">
                                </div>
                                <div class="col-lg-6">
                                    <label for="label" class="form-group">Name</label>
                                    <input required type="text" id="label" name="name[ru]" class="form-control" placeholder="Name Ru">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sparkline10-graph">
                            <div class="row">
                                <div class="col-lg-12 text-center mg-t-30" >
                                    <input type="submit" class="btn btn-danger" value="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
