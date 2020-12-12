@extends('Front.Layouts.layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
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
        <div class="col-lg-8 my-3">
            <form method="POST" action="{{route('client.store')}}">
            @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Name</label>
                        <input name="name" required type="text" class="form-control" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">LastName</label>
                        <input name="last_name" required type="text" class="form-control" id="inputPassword4">
                        <input type="hidden" name="count" value="{{$count}}">
                        <input type="hidden" name="shop_id" value="{{$db->id}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Email">Email</label>
                        <input name="email" required type="email" class="form-control" id="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Password">Tel</label>
                        <input name="tel" required type="tel" class="form-control" value="+9989" id="Password">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="ca_id" class="mb-2">Country</label>
                            </div>
                            <div class="col-lg-12">
                                <select required name="country_id" id="ca_id" class="js-example-basic-single form-control">
                                    <option>Tanlang</option>
                                    @if(isset($countries))
                                        @foreach($countries as $country)
                                            <option value="{{$country->id}}">{{$country->name['uz']}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="sub_id" class="mb-2">City</label>
                            </div>
                            <div class="col-lg-12">
                                <select required  name="city_id" id="sub_id" class="js-example-basic-single form-control">
                                    <option>Tanlang</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="id">Manzil..</label>
                        <textarea required name="place" class="form-control" id="id" rows="4" placeholder="Manzil......."></textarea>
                    </div>
                    <div class="col-lg-6 text-center">
                        <button type="submit" class="btn btn-primary mt-5">Send</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-heading text-center">
                Mahsulot
            </div>
            <div class="result"></div>
            <div class="panel panel-body">
                @if(isset($db))
                    <div class="row">
                        <div class="col-lg-12">
                            <img style="width: 100px;height: 100px"  src="{{'/'.$db->img}}" alt=""><span>{{$db->name['uz']}}</span>
                        </div>
                        <div class="col-lg-12">Soni: <span>{{$count}}</span></div>
                        <div class="col-lg-12">Narxi: <span>{{$count*$db->price }}</span></div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
@push('css')
    <link href="{{asset('Front')}}/select2/select2.min.css" rel="stylesheet"/>
@endpush
@push('js')
    <script src="{{asset('Front')}}/select2/select2.full.min.js"></script>
    <script src="{{asset('Front')}}/select2/select2-active.js"></script>
    <script>
        $(document).ready(function () {
            $('.js-example-basic-single').select2({

            });
            $(".js-example-basic-single").change(function(event) {
                event.preventDefault();
                var id = $('#ca_id').val();
                $.ajax({
                    type: 'POST',
                    url: "{{route('client.select')}}",
                    data: {id:id,_token:'{{csrf_token()}}'},
                    dataType:"JSON",
                    success: function (data) {
                      if (data.success){
                          $('#sub_id').html(data.success);
                      }
                    }
                });
            });
        });
    </script>
@endpush
