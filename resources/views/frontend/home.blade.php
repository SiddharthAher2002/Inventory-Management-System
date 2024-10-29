@extends('frontend.layouts.app')
@section('style')
<style>

</style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <img class="mw-100" src="{{asset('images/home.png')}}" />
        </div>
    </div>
    <div class="row my-2">
        <div class="col-sm-6">
            <div class="card border border-primary">
                <div class="card-header">
                    <h5 class="mb-0">Products</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Manage Your Products</h6>
                    <p class="card-text">
                        Track and manage your product inventory effectively. Add new products, update stock levels, and
                        categorize items for better organization.
                    </p>
                    <a href="#" class="btn btn-primary">View Products</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card border border-dark">
                <div class="card-header">
                    <h5 class="mb-0">Suppliers</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Supplier Management</h6>
                    <p class="card-text">
                        Manage supplier information, track orders, and maintain strong relationships. Ensure timely
                        deliveries and manage procurement effectively.
                    </p>
                    <a href="#" class="btn btn-dark">View Suppliers</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection