@extends('auth.layouts.app')
@section('content')
<div class="bg-light">
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="card" style="width: 400px;">
            <div class="card-header text-center">
                <h4>Login</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
            <div class="card-footer text-center">
                <small>Don't have an account? <a href="#">Sign up</a></small>
            </div>
        </div>
    </div>
</div>
@endsection