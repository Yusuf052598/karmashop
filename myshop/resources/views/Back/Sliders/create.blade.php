@extends('Back.Layouts.app')
@section('content')
    <div class="advanced-form-area mg-b-15">
        <div class="container-fluid">
            <form action="{{route('sliders.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sparkline10-graph">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="label" class="form-group">Name</label>
                                    <input required type="text" id="label" name="price" class="form-control" placeholder="Price">
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
                                    <label for="label" class="form-group">Name Uz</label>
                                    <textarea name="name[uz]" required id="label" rows="4" class="form-control" placeholder="Name uz"></textarea>
                                </div>
                                <div class="col-lg-6">
                                    <label for="label" class="form-group">Name Ru</label>
                                    <textarea name="name[ru]" required id="label" rows="4" class="form-control" placeholder="Name ru"></textarea>
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
