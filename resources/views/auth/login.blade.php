@extends('auth.layout')

@section('content')
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Please enter your login information:</p>

        <form action="/community/login.php" method="post" class="form-element">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" name="login_email" placeholder="E-mail">
                <span class="ion ion-email form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="login_password" placeholder="Password">
                <span class="ion ion-locked form-control-feedback"></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-12">
                    <div class="fog-pwd">
                        <a href="{{ route('password.request') }}"><i class="ion ion-locked"></i> Lost password?</a><br>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-12 text-center">
                    <button type="submit" name="login_submit" class="btn btn-info btn-block margin-top-10">Login</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <!-- /.social-auth-links -->

        <div class="margin-top-30 text-center">
            <p class="login-footer">Not a member yet? <a href="{{ route('index') }}" class="text-info m-l-5">Join for free</a></p>
        </div>

    </div>
    <!-- /.login-box-body -->
@endsection