@extends('Front.Layouts.layout')
@section('content')
    <!-- Start category Area -->
    <section class="category-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="/Front/img/category/c1.jpg" alt="">
                                <a href="/Front/img/category/c1.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Sneaker for Sports</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="/Front/img/category/c2.jpg" alt="">
                                <a href="/Front/img/category/c2.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Sneaker for Sports</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="/Front/img/category/c3.jpg" alt="">
                                <a href="/Front/img/category/c3.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Product for Couple</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="/Front/img/category/c4.jpg" alt="">
                                <a href="/Front/img/category/c4.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                        <h6 class="deal-title">Sneaker for Sports</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-deal">
                        <div class="overlay"></div>
                        <img class="img-fluid w-100" src="/Front/img/category/c5.jpg" alt="">
                        <a href="/Front/img/category/c5.jpg" class="img-pop-up" target="_blank">
                            <div class="deal-details">
                                <h6 class="deal-title">Sneaker for Sports</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="owl-carousel active-product-area section_gap" style="height: 1250px">
           @if(isset($shops))
            <div class="single-product-slider">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <div class="section-title">
                                <h1>Latest Products</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore
                                    magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- single product -->
                    @foreach($shops as $shop)
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" style="width: 230px ;height: 250px" src="{{'/'.$shop->img}}" alt="">
                                <div class="product-details">
                                    <h6>{{$shop->category->name()}}</h6>
                                    <p>{{$shop->name['uz']}}</p>
                                    <div class="price">
                                        <h6>$150.00</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                    <div class="prd-bottom">

                                        <a href="" class="social-info">
                                            <span class="ti-bag"></span>
                                            <p class="hover-text">add to bag</p>
                                        </a>
                                        <a href="#" class="social-info panel" data-id="{{$shop->id}}">
                                            <span @auth class="lnr lnr-heart likes {{$shop->check(auth()->user()->id, $shop->id)==1? 'bg-warning' :''}}" data-classname="{{$shop->check(auth()->user()->id,$shop->id)}}@endauth"
                                                  @guest class="lnr lnr-heart likes" @endguest>
                                            </span>
                                            <p class="hover-text">Wishlist</p>
                                        </a>

                                        <a href="{{route('category.single',[$shop->id,$shop->slugName()])}}" class="social-info">
                                            <span class="lnr lnr-move"></span>
                                            <p class="hover-text">view more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- single product -->
                    </div>
                </div>
            </div>
            @endif
            @if(isset($phones))
            <div class="single-product-slider">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h1>Phones</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore
                                magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single product -->
                    @foreach($phones as $phone)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" style="width: 200px ;height: 250px" src="{{'/'.$phone->img}}" alt="">
                            <div class="product-details">
                                <h6>{{$phone->category->name()}}</h6>
                                <p>{{$phone->name['uz']}}</p>
                                <div class="price">
                                    <h6>$150.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">add to bag</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">Wishlist</p>
                                    </a>

                                    <a href="{{route('category.single',[$phone->id,$phone->slugName()])}}" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">view more</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- single product -->
                </div>
            </div>
        </div>
             @endif
               @if(isset($tvs))
                   <div class="single-product-slider">
                       <div class="container">
                           <div class="row justify-content-center">
                               <div class="col-lg-6 text-center">
                                   <div class="section-title">
                                       <h1>Televizor</h1>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                           dolore
                                           magna aliqua.</p>
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <!-- single product -->
                               @foreach($tvs as $tv)
                                   <div class="col-lg-3 col-md-6">
                                       <div class="single-product">
                                           <img class="img-fluid" style="width: 250px ;height: 250px" src="{{'/'.$tv->img}}" alt="">
                                           <div class="product-details">
                                               <h6>{{$tv->category->name()}}</h6>
                                               <p>{{$tv->name['uz']}}</p>
                                               <div class="price">
                                                   <h6>$150.00</h6>
                                                   <h6 class="l-through">$210.00</h6>
                                               </div>
                                               <div class="prd-bottom">

                                                   <a href="" class="social-info">
                                                       <span class="ti-bag"></span>
                                                       <p class="hover-text">add to bag</p>
                                                   </a>
                                                   <a href="" class="social-info">
                                                       <span class="lnr lnr-heart"></span>
                                                       <p class="hover-text">Wishlist</p>
                                                   </a>
                                                   <a href="{{route('category.single',[$tv->id,$tv->slugName()])}}" class="social-info">
                                                       <span class="lnr lnr-move"></span>
                                                       <p class="hover-text">view more</p>
                                                   </a>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               @endforeach
                           </div>
                       </div>
                   </div>
               @endif
    </section>
    <section class="exclusive-deal-area">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 no-padding exclusive-left">
                    <div class="row clock_sec clockdiv" id="clockdiv">
                        <div class="col-lg-12">
                            <h1>Exclusive Hot Deal Ends Soon!</h1>
                            <p>Who are in extremely love with eco friendly system.</p>
                        </div>
                        <div class="col-lg-12">
                            <div class="row clock-wrap">
                                <div class="col clockinner1 clockinner">
                                    <h1 class="days">150</h1>
                                    <span class="smalltext">Days</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="hours">23</h1>
                                    <span class="smalltext">Hours</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="minutes">47</h1>
                                    <span class="smalltext">Mins</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="seconds">59</h1>
                                    <span class="smalltext">Secs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="primary-btn">Shop Now</a>
                </div>
                <div class="col-lg-6 no-padding exclusive-right">
                    <div class="active-exclusive-product-slider">
                        @if(isset($sliders))
                         @foreach($sliders as $slider)
                             <div class="single-exclusive-slider">
                            <img class="img-fluid" src="{{'/'.$slider->img}}" alt="">
                            <div class="product-details">
                                <div class="price">
                                    <h6>{{$slider->price}}</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                                <h4>addidas New Hammer sole
                                    for Sports person</h4>
                                <div class="add-bag d-flex align-items-center justify-content-center">
                                    <a class="add-btn" href=""><span class="ti-bag"></span></a>
                                    <span class="add-text text-uppercase">Add to Bag</span>
                                </div>
                            </div>
                        </div>
                         @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End exclusive deal Area -->

    <!-- Start brand Area -->
    <section class="brand-area section_gap">
        <div class="container">
            <div class="row">
                @if(isset($brands))
                  @foreach($brands as $brand)
                <a class="col single-img" href="{{route('myShop.contact')}}">
                    <img class="img-fluid d-block mx-auto" style="width: 150px;height: 100px" src="{{'/'.$brand->img}}" alt="">
                </a>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- End brand Area -->
    <!-- Start related-product Area -->
    <section class="related-product-area section_gap_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Deals of the Week</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="/Front/img/r1.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Black lace Heels</a>
                                    <div class="price">
                                        <h6>$189.00</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="/Front/img/r2.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Black lace Heels</a>
                                    <div class="price">
                                        <h6>$189.00</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="/Front/img/r3.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Black lace Heels</a>
                                    <div class="price">
                                        <h6>$189.00</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="/Front/img/r5.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Black lace Heels</a>
                                    <div class="price">
                                        <h6>$189.00</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="/Front/img/r6.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Black lace Heels</a>
                                    <div class="price">
                                        <h6>$189.00</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="/Front/img/r7.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Black lace Heels</a>
                                    <div class="price">
                                        <h6>$189.00</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="/Front/img/r9.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Black lace Heels</a>
                                    <div class="price">
                                        <h6>$189.00</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="/Front/img/r10.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Black lace Heels</a>
                                    <div class="price">
                                        <h6>$189.00</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-related-product d-flex">
                                <a href="#"><img src="/Front/img/r11.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Black lace Heels</a>
                                    <div class="price">
                                        <h6>$189.00</h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ctg-right">
                        <a href="#" target="_blank">
                            <img class="img-fluid d-block mx-auto" src="/Front/img/category/c5.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End related-product Area -->
        {{--MOdal--}}
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="alert alert-success p-2">
                    <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="text-center">
                        Yozildi
                    </div>
                </div>
            </div>
        </div>
        {{--/Modal--}}
@endsection
@if(session()->get('success'))
    @push('js')
        <script>
            $(document).ready(function () {
                $('#myModal').modal('show');
            })
        </script>
    @endpush
@endif
@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>
@endif
@push('css')
    <style>
        .owl-controls>.owl-nav{
            margin-bottom: 180px;
        }
    </style>

@endpush
@guest
    @push('js')
        <script>
            $(document).ready(function () {
                $(".likes").click(function(e) {
                    e.preventDefault();
                    alert('Royhatdan otishingiz kerak')
                });
            });
        </script>
    @endpush
@endguest
@auth
 @push('js')
        <script>
            $(document).ready(function () {
                $(".likes").click(function(e) {
                    e.preventDefault();
                    var id = $(this).parents(".panel").data('id');
                    var className = $(this).data('classname');
                    if (className===1){
                       $(this).removeClass('bg-warning');
                       // $(this).addClass('bg-warning');
                        $(this).data('classname',0);
                    }
                    if(className===0){
                       // $(this).removeClass('bg-warning');
                        $(this).addClass('bg-warning');
                        $(this).data('classname',1);
                    }
                    $.ajax({
                        type: 'POST',
                        url: "{{route('likes.store')}}",
                        data: {id:id,_token:'{{csrf_token()}}'},
                        dataType:"JSON",
                        success: function (data) {

                        }
                    });
                });
            });

        </script>
 @endpush
@endauth

