@extends('Back.Layouts.app')
@section('content')
    <div class="advanced-form-area mg-b-15">
        <div class="container-fluid">
            <form action="{{route('shops.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sparkline10-graph">
                            <label for="id" class="form-group">Category</label>
                            <select class="form-control" name="category_id" id="id">
                                <option value="">Tanlang</option>
                                @if(isset($categories))
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name['uz']}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sparkline10-graph">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="label" class="form-group">Name Uz</label>
                                    <input required type="text" id="label" name="name[uz]" class="form-control" placeholder="Name uz">
                                </div>
                                <div class="col-lg-6">
                                    <label for="name" class="form-group">Name Ru</label>
                                    <input required type="text" id="name" name="name[ru]" class="form-control" placeholder="Name ru">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sparkline10-graph">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="label" class="form-group">Body Uz</label>
                                    <textarea name="body[uz]" required id="label" rows="4" class="form-control" placeholder="Body uz"></textarea>
                                </div>
                                <div class="col-lg-6">
                                    <label for="label" class="form-group">Body Ru</label>
                                    <textarea name="body[ru]" required id="label" rows="4" class="form-control" placeholder="Body ru"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sparkline10-graph">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="body" class="form-group">Images</label>
                                    <input name="img" required id="body" type="file" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    <label for="body1" class="form-group">Status</label>
                                    <select name="status" id="body1" class="form-control">
                                        <option value="inactive">inactive</option>
                                        <option value="active">active</option>
                                    </select>
                                </div>
                            </div>
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
