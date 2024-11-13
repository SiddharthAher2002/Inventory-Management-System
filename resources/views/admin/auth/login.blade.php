@extends('admin.layouts.auth')
@section('styling')
<style>
    form .error {
        color: #ff0000;
    }
</style>
@endsection
@section('content')
<div class="login-page bg-body-secondary">
    <div class="login-box">
        <div class="card">
            <div class="card-body login-card-body">
                <div class="login-logo"> <a href="{{ route('frontend.home') }}">IMS</a> </div>
                <p class="login-box-msg">Admin Login</p>
                <form action="{{ route('admin.validate.login') }}" id="admin-login-form" method="post">
                    @csrf
                    <div class="input-container mb-3">
                        <div class="input-group ">
                            <input class="form-control" type="email" name="email" id="email" placeholder="Email"
                                autocomplete="off">
                            <div class="input-group-text"> <span class="bi bi-envelope"></span> </div>
                        </div>
                        <div class="error-container">
                            <p class="validate-error text-danger fs-8 px-2"></p>
                        </div>
                    </div>

                    <div class="input-container mb-3">
                        <div class="input-group">
                            <input class="form-control" type="password" name="password" placeholder="Password"
                                autocomplete="off">
                            <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                        </div>
                        <div class="error-container">
                            <p class="validate-error text-danger fs-8 px-2"></p>
                        </div>
                    </div>

                    <div class="col-12 my-2">
                        @if($errors->any())
                            @foreach ($errors->all() as $err)
                                <p class="text-danger text-center">{{$err}}</p>
                            @endforeach
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="form-check"> <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Remember Me</label>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" id="admin-login-btn">Sign In</button>
                            </div>
                        </div>
                    </div>
                </form>
                <p class="mb-1"> <a href="forgot-password.html">I forgot my password</a> </p>
            </div>
        </div>

    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function () {
        $("#admin-login-btn").click(function () {

            $('#admin-login-form').validate({
                onfocusout: false,
                onkeyup: false,
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                        minlength: 5
                    }
                },
                messages: {
                    email: {
                        required: "Please enter registered email",
                        email: "Please enter valid email"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    }
                },
                errorPlacement: function (error, element) {
                    error.appendTo(element.parent('div').next('div').find('.validate-error'));
                }
            });
        });

    })


</script>
@endsection