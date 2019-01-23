@extends('layouts.user')

@section('content')
    <div class="content-wrapper" style="min-height: 534px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Settings      </h1>
        </section>

        <!-- Main content -->
        <section class="content settings">
            <div class="row">
                <div class="col-xl-3 col-md-12 col">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fa fa-question"></i></span>

                        <div class="info-box-content">
						  <span class="info-box-number">
							CC15563						  </span>
                            <span class="info-box-text">Support - Pin</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-danger mb-10" role="alert">
                        <strong>Attention:</strong> It is important that you do not enter false or incomplete data here. In the event that a trick doesn't work, we'll have to refuse your refund directly.
                    </div>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    @endif
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body ">
                            <form class="form-horizontal" id="user_settings" method="POST" novalidate="" action="{{route('user.update_user')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <h5>Title <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="title" id="salutation" required="" class="form-control">
                                            <option value="" disabled="">Select title</option>
                                            @if($user->title == 'Mr')
                                            <option value="Mr" selected>Mr</option>
                                            <option value="Mrs">Ms</option>
                                            @else
                                                <option value="Mr" >Mr</option>
                                                <option value="Mrs" selected>Ms</option>
                                            @endif

                                        </select>
                                        <div class="help-block"></div></div>
                                </div>
                                <div class="form-group">
                                    <h5>First name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" id="first_name" name="first_name" class="form-control" required="" data-validation-required-message="Please fill in!"  autocomplete="off" value="{{$user->first_name}}"> <div class="help-block"></div></div>
                                </div>
                                <div class="form-group">
                                    <h5>Surname <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" id="last_name" name="last_name"  class="form-control" required="" data-validation-required-message="Please fill in!" value="{{$user->last_name}}" autocomplete="off"> <div class="help-block"></div></div>
                                </div>
                                <div class="form-group">
                                    <h5>E-mail <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="email" id="email" name="email"  class="form-control" required="" data-validation-required-message="Please fill in!" data-validation-email-message="Please enter a valid e-mail address!" value="{{$user->email}}" autocomplete="off"> <div class="help-block"></div></div>
                                </div>
                                <div class="form-group">
                                    <h5>Password <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="password" minlength="6" id="password" name="password" class="form-control" data-validation-required-message="Please fill in!" data-validation-minlength-message="Please enter at least 6 characters!" required="" value="" autocomplete="off"> <div class="help-block"></div></div>
                                </div>
                                <div class="form-group">
                                    <h5>Re-enter password<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="password" name="password_confirmation" data-validation-match-match="password" data-validation-required-message="Please fill in!" data-validation-match-message="Both password values need to be identical!" class="form-control" required="" value="" autocomplete="off"> <div class="help-block"></div></div>
                                </div>
                                <div class="form-group">
                                    <h5>Newsletter <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="select" id="newsletter" required="" class="form-control" aria-invalid="false">
                                            <option value="" disabled="">Select</option>
                                            <option value="1">Inactive </option>
                                            <option value="2" selected="selected">Active</option>
                                        </select>
                                        <div class="help-block"></div></div>
                                </div>
                                <button type="submit" class="btn btn-info btn-lg" uid="4" tick="18">Save</button>
                            </form></div>
                        <button type="button" class="btn btn-danger btn-lg pull-right delete-account"><i class="fa fa-trash"></i> Delete Account</button>

                        <!-- /.box-body -->
                    </div>
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>@endsection