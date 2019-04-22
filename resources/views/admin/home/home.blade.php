@extends('admin.master')
@section('rootcontent')
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <a href="#">
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-eye"> </i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Products</h4>
                        <h3>{{$Product}}</h3>
                        <p>All product</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            </a>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-1">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-users" ></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Users</h4>
                        <h3>{{$User}}</h3>
                        <p>All user </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <a href="">
            <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-3">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-usd"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Order</h4>
                    <h3>{{$Order}}</h3>
                    <p>All order , </p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
            </a>
            <div class="clearfix"> </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //market-->
        <div class="row">
            <div class="panel-body">
            
            </div>
        </div>
        <div class="agil-info-calendar">
            <!-- calendar -->
            <div class="col-md-3"></div>
            <div class="col-md-6 agile-calendar">
                <div class="calendar-widget">
                    <div class="panel-heading ui-sortable-handle">
					<span class="panel-icon">
                      <i class="fa fa-calendar-o"></i>
                    </span>
                        <span class="panel-title"> Calendar Widget</span>
                    </div>
                    <!-- grids -->
                    <div class="agile-calendar-grid">
                        <div class="page">

                            <div class="w3l-calendar-left">
                                <div class="calendar-heading">

                                </div>
                                <div class="monthly" id="mycalendar"></div>
                            </div>

                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
            <!-- //calendar --> 
            <div class="clearfix"> </div>
        </div>
        <!-- tasks -->
    
        <!-- //tasks -->
    </section>
    @endsection
