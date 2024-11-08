@extends('frontend.layouts.auth')
@section('content')
<div class="bg-light">
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="card" style="width: 400px;">
            <div class="card-header text-center">
                <h4>Register</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" placeholder="Enter your first name"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="middle_name" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="middle_name" placeholder="Enter your middle name">
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter your last name"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Create a password"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>
            </div>
            <div class="card-footer text-center">
                <small>Already have an account? <a href="#">Login here</a></small>
            </div>
        </div>
    </div>
</div>
@endsection