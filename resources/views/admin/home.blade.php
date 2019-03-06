@extends('admin.layouts.design')

@section('breadcrumb-header', 'Dashboard')

@section('breadcrumb-item', 'Dashboard')

@section('content')

    <!-- Column -->
    <div class="col-lg-8 col-md-7">
        <div class="card">
            <div class="card-block">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex flex-wrap">
                            <div>
                                <h3 class="card-title">Students Overview</h3>
                                <h6 class="card-subtitle">New Vs Old</h6> </div>
                            <div class="ml-auto">
                                <ul class="list-inline">
                                    <li>
                                        <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>New</h6> </li>
                                    <li>
                                        <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Old</h6> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="amp-pxl" style="height: 360px;"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="col-lg-4 col-md-5">
        <div class="card">
            <div class="card-block">
                <h3 class="card-title">Site Visits </h3>
                <h6 class="card-subtitle">Different Devices Used to Visit</h6>
                <div id="visitor" style="height:290px; width:100%;"></div>
            </div>
            <div>
                <hr class="m-t-0 m-b-0">
            </div>
            <div class="card-block text-center ">
                <ul class="list-inline m-b-0">
                    <li>
                        <h6 class="text-muted text-info"><i class="fa fa-circle font-10 m-r-10 "></i>Mobile</h6> </li>
                    <li>
                        <h6 class="text-muted  text-primary"><i class="fa fa-circle font-10 m-r-10"></i>Desktop</h6> </li>
                    <li>
                        <h6 class="text-muted  text-success"><i class="fa fa-circle font-10 m-r-10"></i>Tablet</h6> </li>
                </ul>
            </div>
        </div>
    </div>

@endsection

                    