@extends('auth.layout')

@section('content')
    <div class="login-box-body">
        <p class="login-box-msg">Request new password</p>

        <form action="/community/lost-password.php" method="post" class="form-element">
            <div class="form-group has-feedback">
                <input type="email" name="lost_email" class="form-control" placeholder="E-mail">
                <span class="ion ion-email form-control-feedback"></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-12 text-center">
                    <button type="submit" name="lost_submit" class="btn btn-info btn-block margin-top-10">Request password</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <!-- /.social-auth-links -->

        <div class="margin-top-30 text-center">
            <p class="login-footer">Back to <a href="{{ route('login') }}" class="text-info m-l-5">Login</a></p>
        </div>

    </div>
    <!-- /.login-box-body -->
@endsection
