@extends('admin.layouts.design')

@section('breadcrumb-header', 'Chairperson')
@section('breadcrumb-item', 'Chairperson')

@section('content')
<div class="col-md-12">

    <div class="card">

        <div class="card-block bg-info">
            <h4 class="text-white card-title">Chairperson</h4>
            <h6 class="card-subtitle text-white m-b-0 op-5">Manage Chairperson</h6>
        </div>

        <div class="card-block">
                
            <div class="message-box contact-box">
                <h2 class="add-ct-btn">
                    <button type="button" data-toggle="tooltip" title="Add New Staff" class="btn btn-circle btn-lg bg-green waves-effect waves-dark">+</button>
                </h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Raffy Amoguis</td>
                            <td>--</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>
@endsection