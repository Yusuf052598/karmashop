@extends('Back.Layouts.app')
@section('content')
    <div class="advanced-form-area mg-b-15">
        <div class="container-fluid">
            <form action="{{route('pays.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sparkline10-graph">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="label" class="form-group">Name</label>
                                    <input required type="text" id="label" name="name" class="form-control" placeholder="Name uz">
                                </div>
                                <div class="col-lg-6">
                                    <label for="body" class="form-group">Images</label>
                                    <input name="img" required id="body" type="file" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sparkline10-graph">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="label" class="form-group">Title Uz</label>
                                    <textarea name="title[uz]" required id="label" rows="4" class="form-control" placeholder="Body uz"></textarea>
                                </div>
                                <div class="col-lg-6">
                                    <label for="label" class="form-group">Title Ru</label>
                                    <textarea name="title[ru]" required id="label" rows="4" class="form-control" placeholder="Body ru"></textarea>
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
