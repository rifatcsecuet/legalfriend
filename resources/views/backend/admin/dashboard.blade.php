@extends('backend._layout')

@section('content')
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold"> Welcome to Dashboard , <strong> {{ Auth::user()->name }} </strong>  <br>
                   </b>
                </h2>
                <h4 class="text-white op-12 mb-2">You are authenticated as <b> {{   Auth::user()->role->name }} </b> </h4>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row mt--2">

   <!--  End Star -->
        <div class="col-md-4">
            <div class="card card-secondary">
                <div class="card-body skew-shadow">
                    <h1>{{ $users = \App\User::where('role_id', '4')->count() }}</h1>
                    <h5 class="op-10">Total Users</h5>
                    <div class="pull-right">
                        <h3 class="fw-bold op-10">User Database</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-dark bg-secondary-gradient">
                <div class="card-body bubble-shadow">
                    <h1>{{ $users = \App\User::where('role_id','2')->count() }}</h1>
                    <h5 class="op-10">Total Lawyer</h5>
                    <div class="pull-right">
                        <h3 class="fw-bold op-10">Lawyer Database</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-dark bg-secondary2">
                <div class="card-body curves-shadow">
                    <h1>{{ $users = \App\User::where('role_id','3')->count() }}</h1>
                    <h5 class="op-10">Total Nurse</h5>
                    <div class="pull-right">
                        <h3 class="fw-bold op-10">Nurse Database</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start -->
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-primary card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-shopping-bag"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Total Product</p>
                                <h4 class="card-title"></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-info card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-interface-6"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Product Booking</p>
                                <h4 class="card-title"></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-success card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-shapes-1"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Total Category</p>
                                <h4 class="card-title"></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-secondary card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-box-2"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Total Area </p>
                                <h4 class="card-title"></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!--   Data Table Add -->
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-chart-pie text-warning"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Lawyer Booking</p>
                                <h4 class="card-title"></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-coins text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Product Booking</p>
                                <h4 class="card-title"></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-delivery-truck text-primary"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Nurse Booking</p>
                                <h4 class="card-title"></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-success text-gray"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Dear , </p>
                                <h4 class="card-title">Thank You!</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Data -->
    <div class="row">
        <div class="col-md-12">
            <!-- Notification Start Here -->
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <!-- Another -->
            @if (session()->has('warning'))
                <div class="alert alert-danger">
                    {{ session()->get('warning') }}
                </div>
            @endif
        <!-- Notification End Here -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Appointment List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                            <tr>
                                <th>Patient Name</th>
                                <th>Lawyer Name</th>
                                <th>Category</th>
                                <th>Appointment date</th>
                                <th>User PHN No</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Delete</th>

                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Patient Name</th>
                                <th>Lawyer Name</th>
                                <th>Category</th>
                                <th>Appointment date</th>
                                <th>User PHN No</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Delete</th>

                            </tr>
                            </tfoot>
                            <tbody>

               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Lawyer Booking Table  -->
    <!-- Product Booking Start -->
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product Buying Request</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                            <tr>
                                <th>Buyer Name</th>
                                <th>Buyer Email</th>
                                <th>Buyer Phn</th>
                                <th>Product Name</th>
                                <th>Product Package Price</th>
                                <th>Booking Date</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Booking End --><!-- Product Booking Start -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 align="center" class="card-title" style="background-color: darkcyan; color: white;">Nursing Service Request</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                            <tr>
                                <th> Name</th>
                                <th> Email</th>
                                <th> PHN Number</th>
                                <th> Address</th>
                                <th> Service Requested</th>
                                <th> MSG</th>
                                <th> Booking Date</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Booking End -->
    <!-- Lawyer Service request Start -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 align="center" class="card-title" style="background-color: #1abc9c; color: white;">Lawyer Service Request</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                            <tr>
                                <th> Name</th>
                                <th> Email</th>
                                <th> PHN Number</th>
                                <th> Address</th>
                                <th> Booking Date</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Lawyer Service request End -->
</div>
@endsection
