@extends('FrontEnd.Owner.master')
@section('rootcontent')
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">View Order</h3>
                    <br><br>
                    <div class="well">

                        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                        <br>
                        @foreach($data as $datas)
                            <table class="table table-hover table-bordered">
                                <tr>
                                    <th class="text-center">Cutomer Name</th>
                                    <th class="text-center">{{$datas->cutomerName}}</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Cutomer Phone</th>
                                    <th class="text-center">{{$datas->phone}}</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Vehicle Name</th>
                                    <th class="text-center">{{$datas->VehicleName}}</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Vehicle Code</th>
                                    <th class="text-center">{{$datas->VehicleCode}}</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Owner Name</th>
                                    <th class="text-center">{{$datas->ownerName}}</th>
                                </tr>
                                <tr>
                                    <th class="text-center">Vehicle Name</th>
                                    <th class="text-center"><img src="{{asset($datas->image)}}" alt="Image" height="250" width="400" class=" img-thumbnail"></th>
                                </tr>
                            </table>
                            @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
