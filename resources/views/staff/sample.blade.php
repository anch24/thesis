@extends('staff.layouts.design')

@section('header')

@section('sidebar')

@section('content')

    <!-- Container -->
    <div class="container-fluid">

        <!-- Breadcrumb -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- End Breadcrumb -->
        
        <!-- Dashboard -->
        <div class="row">

            <!-- Column -->
            <div class="col-lg-8 col-md-7">
                <div class="card">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex flex-wrap">
                                    <div>
                                        <h3 class="card-title">School Activity</h3>
                                        <h6 class="card-subtitle">--------</h6> 
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-md-5">
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">Other links </h3>
                        <h6 class="card-subtitle">No idea what should I put here</h6>
                        <!--<div id="visitor" style="height:290px; width:100%;"></div>-->
                    </div>
                    <!--
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
                  -->
                </div>
            </div>


        </div>
        <!-- End Dashboard -->

    </div>
    <!-- End Container -->

@endsection