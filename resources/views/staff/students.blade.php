@extends('staff.layouts.design')

@section('header')

@section('sidebar')

@section('content')

    <div class="container-fluid">

        <!-- Breadcrumb -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Students</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Students</li>
                </ol>
            </div>
        </div>
        <!-- End Breadcrumb -->
        
        <!-- Dashboard -->
        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-block">

                        <div class="row">

                            <div class="col-md-1">
                                <h4 class="text-themecolor m-b-0 m-t-0">Filter</h4>
                            </div>
                            
                            <div class="col-md-2">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <select class="form-control form-control-line">
                                                <option>Course</option>
                                                <option>Year</option>
                                                <option>Section</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-2">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <select class="form-control form-control-line">
                                                <option>BSCS</option>
                                                <option>BSOAD</option>
                                                <option>BSHM</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                            <div class="col-md-2">
                                <a href="#" class="btn btn-rounded waves-effect waves-light btn-outline-add hidden-md-down">Add Students</a>
                            </div>

                        </div>

                        
                    </div>

                </div>

            </div>

            <div class="col-md-12">

                <div class="card">

                    <div class="card-block">

                        <h4 class="card-title">
                            Students
                        </h4>

                        <div class="table-responsive">

                            <table class="table">

                                <thead>
                                    <tr>
                                        <th><b>Name</b></th>
                                        <th><b>Course</b></th>
                                        <th><b>Year</b></th>
                                        <th><b>Action</b></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Raffy C. Amoguis</td>
                                        <td>Bachelor of Science in Computer Science</td>
                                        <td>4th year</td>
                                        <td>
                                            <a href="#" class="btn waves-effect waves-light btn-danger hidden-md-down">Manage</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Raffy C. Amoguis</td>
                                        <td>Bachelor of Science in Computer Science</td>
                                        <td>4th year</td>
                                        <td>
                                            <a href="#" class="btn waves-effect waves-light btn-danger hidden-md-down">Manage</a>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!-- End Dashboard -->

    </div>
    <!-- End Container -->

    </div>

@endsection