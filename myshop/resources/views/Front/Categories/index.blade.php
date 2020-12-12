@extends('Front.Layouts.layout')
@section('content')
    <section class="category category-area">
        <div class="container-fluid">
            <div class="row">
                @if(isset($models))
                <div class="col-lg-12">
                    <div class="card-header my-3 text-center bg-warning border-warning">
                        <h1>{{$models[0]->category->name()}}</h1>
                    </div>
                </div>
                    @foreach($models as $model)
                        <div class="col-lg-3 my-3">
                            <div class="card" style="width: 18rem;">
                                  <img class="card-img-top" style="height: 300px"  src="{{'/'.$model->img}}" alt="Card image cap">
                                  <div class="card-body">
                                       <h5 class="card-title">{{$model->category->name()}}</h5>
                                       <p class="card-text">{{$model->name['uz']}}</p>
                                       <a href="{{route('category.single',[$model->id,$model->slugName()])}}" class="btn btn-primary">Read</a>
                                      <a href="" class="btn btn-default border-danger"><i class="fa fa-heart-o text-danger"></i></a>
                                  </div>
                            </div>
                        </div>
                    @endforeach
                <div class="col-lg-12">
                    {{$models->links()}}
                </div>
                 @endif
            </div>
        </div>
    </section>
@endsection
@push('css')
    <style>
        .owl-controls>.owl-nav{
            margin-bottom: 180px;
        }
        .pagination>.page-item>.page-link{
            height: 50px;
            width: 50px;
            padding-top: 5px;
        }
        .pagination{
            margin: 10px 0 10px 0;
        }
        .pagination>.active>.page-link{
            height: 50px;
            width: 50px;
            text-align: center;
            padding-top: 15px;
        }
        .pagination>.disabled>.page-link{
            height: 50px;
            width: 50px;
            text-align: center;
            padding-top: 15px;
        }
    </style>
@endpush
