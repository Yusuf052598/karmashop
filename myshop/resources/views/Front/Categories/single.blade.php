@extends('Front.Layouts.layout')
@section('content')
<!--================Single Product Area =================-->
<div class="product_image_area mb-5">
    <div class="container">
        @if(isset($single))
            @foreach($single as $model)
                 <div class="row s_product_inner">
            <div class="col-lg-6">
                <div class="s_Product_carousel">
                    <div class="single-prd-item">
                        <img class="img-fluid" src="{{'/'.$model->img}}" alt="">
                    </div>
                    <div class="single-prd-item">
                        <img class="img-fluid" src="{{'/'.$model->img}}" alt="">
                    </div>
                    <div class="single-prd-item">
                        <img class="img-fluid" src="{{'/'.$model->img}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3>Faded SkyBlu Denim Jeans</h3>
                    <h2>${{$model->price}}</h2>
                    <ul class="list">
                        <li><a class="active" href="#"><span>Category</span> : {{$model->category->name()}}</a></li>
                        <li><a href="#"><span>Availibility</span> : In Stock</a></li>
                    </ul>
                    <p>{{$model->name['uz']}}</p>
                    <form action="{{route('client.create')}}" method="post">
                        @csrf
                        <div class="product_count">
                            <input type="hidden" value="{{$model->id}}" name="id">
                            <label for="qty">Quantity:</label>
                            <input type="text" name="count" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                            <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                    class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                            <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                    class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                        </div>
                        <div class="card_area d-flex align-items-center">
                            <button class="primary-btn btn border-0" type="submit">Add to Cart</button>
                            <a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
                            <a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            @endforeach
        @endif
    </div>
</div>
<!--================End Single Product Area =================-->
@endsection
@push('css')
    <style>
        .owl-controls>.owl-nav{
            margin-bottom: 180px;
        }
    </style>
@endpush
