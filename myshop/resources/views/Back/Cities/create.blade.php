@extends('Back.Layouts.app')
@section('content')
    <div class="advanced-form-area mg-b-15">
        <div class="container-fluid">
            <form action="{{route('city.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sparkline10-graph">

                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="id">Country</label>
                                    <select class="form-control" name="country_id" id="id">
                                        @if(isset($countries))
                                           @foreach($countries as $country)
                                                <option value="{{$country->id}}">{{$country->name['uz']}}</option>
                                           @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="label" class="form-group">Name</label>
                                    <input required type="text" id="label" name="name[uz]" class="form-control" placeholder="City uz">
                                </div>
                                <div class="col-lg-6">
                                    <label for="label" class="form-group">Name</label>
                                    <input required type="text" id="label" name="name[ru]" class="form-control" placeholder="City ru">
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
