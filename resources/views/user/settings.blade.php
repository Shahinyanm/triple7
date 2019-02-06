@extends('layouts.user')

@section('content')
    <div class="content-wrapper" style="min-height: 534px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @lang('text.settings')      </h1>
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
                        @lang('text.settings_text')
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
                                    <h5>@lang('text.user_title') <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="title" id="salutation" required="" class="form-control">
                                            <option value="" disabled="">@lang('text.select_title')</option>
                                            @if($user->title == 'Mr')
                                            <option value="Mr" selected>@lang('text.mr')</option>
                                            <option value="Mrs">@lang('text.ms')</option>
                                            @else
                                                <option value="Mr" >@lang('text.mr')</option>
                                                <option value="Mrs" selected>@lang('text.ms')</option>
                                            @endif

                                        </select>
                                        <div class="help-block"></div></div>
                                </div>
                                <div class="form-group">
                                    <h5>@lang('text.first_name') <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" id="first_name" name="first_name" class="form-control" required="" data-validation-required-message="Please fill in!"  autocomplete="off" value="{{$user->first_name}}"> <div class="help-block"></div></div>
                                </div>
                                <div class="form-group">
                                    <h5>@lang('text.last_name') <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" id="last_name" name="last_name"  class="form-control" required="" data-validation-required-message="Please fill in!" value="{{$user->last_name}}" autocomplete="off"> <div class="help-block"></div></div>
                                </div>
                                <div class="form-group">
                                    <h5>@lang('text.email') <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="email" id="email" name="email"  class="form-control" required="" data-validation-required-message="Please fill in!" data-validation-email-message="Please enter a valid e-mail address!" value="{{$user->email}}" autocomplete="off"> <div class="help-block"></div></div>
                                </div>
                                <div class="form-group">
                                    <h5>@lang('text.password') <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="password" minlength="6" id="password" name="password" class="form-control" data-validation-required-message="Please fill in!" data-validation-minlength-message="Please enter at least 6 characters!" required="" value="" autocomplete="off"> <div class="help-block"></div></div>
                                </div>
                                <div class="form-group">
                                    <h5>@lang('text.re_password')<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="password" name="password_confirmation" data-validation-match-match="password" data-validation-required-message="Please fill in!" data-validation-match-message="Both password values need to be identical!" class="form-control" required="" value="" autocomplete="off"> <div class="help-block"></div></div>
                                </div>
                                <div class="form-group">
                                    <h5>@lang('text.newsletter') <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="select" id="newsletter" required="" class="form-control" aria-invalid="false">
                                            <option value="" disabled="">@lang('text.select')</option>
                                            <option value="1">@lang('text.inactive') </option>
                                            <option value="2" selected="selected">@lang('text.active')</option>
                                        </select>
                                        <div class="help-block"></div></div>
                                </div>
                                <button type="submit" class="btn btn-info btn-lg" uid="4" tick="18">@lang('text.save')</button>
                            </form></div>
                        <button type="button" class="btn btn-danger btn-lg pull-right delete-account"><i class="fa fa-trash"></i> @lang('text.delete_account')</button>

                        <!-- /.box-body -->
                    </div>
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>@endsection