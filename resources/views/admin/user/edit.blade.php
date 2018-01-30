@extends('admin.master')

@section('content-admin')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Tables</li>
</ol>
<div class="card card-register mx-auto mt-5">
    <div class="card-header">Register an Account</div>
    <div class="card-body">
    <form>
        <div class="form-group">
        <div class="form-row">
            <div class="col-md-6">
            <label for="exampleInputName">First name</label>
            <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name">
            </div>
            <div class="col-md-6">
            <label for="exampleInputLastName">Last name</label>
            <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
            </div>
        </div>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
        <div class="form-row">
            <div class="col-md-6">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
            </div>
            <div class="col-md-6">
            <label for="exampleConfirmPassword">Confirm password</label>
            <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password">
            </div>
        </div>
        </div>
        <a class="btn btn-primary btn-block" href="login.html">Save</a>
    </form>
    </div>
</div>
@endsection