@extends('FrontEnd.Master')
@section('css')
    <link rel='stylesheet' href='{{asset('Extra/css/custom.css')}}' type='text/css' media='all' />
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
    @endsection
@section('js')
@endsection
@section('MainContent')
    <br>
    <section>
        <div class="container">
            <div class="" style="padding: 5px">
                <div class="card detailCard">
                    <div class="row ">
                        <div class="col-md-4">
                            <img src="{{asset($product->image)}}" class="detailviewimage">
                        </div>
                        <div class="col-md-8 ">
                            <div class="card-block">
                                <h4 class="card-title color">{{$product->name}}</h4>
                                <br>
                                <p class="card-text color">{{$product->shortDescriptoin}}</p>
                                <br>
                                <p class="card-text color">{{$product->longDescriptoin}}</p>
                                <br>
                                <p class="card-text color">Full Day Rent :{{$product->fullDayRent}} ৳</p>
                                <p class="card-text color">Half Day Rent :{{$product->halfDayRent}} ৳</p>
                                <br><br>
                                <a href="{{url('/orderProduct/'.$product->id)}}" class="btn btn-primary color">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

        </div>
        </div>
    </section>



@endsection
