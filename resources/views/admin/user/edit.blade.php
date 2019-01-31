@extends('layouts.admin')

@section('main')
    <h3>Create New  User </h3>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">

                    <div class="panel-options">
                        <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                        <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                    </div>
                </div>
                @if($errors->all())
                    @foreach($errors->all() as $error)
                        <span class="danger">{{$errors}}</span>
                    @endforeach
                @endif
                <div class="panel-body">
                    @isset($user)
                    <form method="post" role="form" class="form-horizontal form-groups-bordered" action="{{route('admin.users.update', $user->id)}}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Admin</label>

                            <div class="col-sm-5">
                                <div class="input-group">
                                    <input type="checkbox" name="isAdmin" @if($user->isAdmin) checked @endif>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">User Title</label>

                            <div class="col-sm-5">
                                <div class="input-group">
                                    <select class="form-control" name="title" style="border:none">
                                        <option value="mr" @if($user->title=='mr') selected @endif  >Mr</option>
                                        <option value="ms" @if($user->title=='ms') selected @endif>Ms</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">User First Name</label>

                            <div class="col-sm-5">
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="form-control" placeholder="First name" name ='first_name' value ="{{$user->first_name}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">User Last Name</label>

                            <div class="col-sm-5">
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="form-control" placeholder="Last Name" name ='last_name' value ="{{$user->last_name}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">User E-mail</label>

                            <div class="col-sm-5">
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="form-control" placeholder="Email" name ='email' value ="{{$user->email}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">User Password</label>

                            <div class="col-sm-5">
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="password" class="form-control" placeholder="Password" name ='password'>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Confirm Password</label>

                            <div class="col-sm-5">
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="password" class="form-control" placeholder="Password" name ='password_confirmation'>
                                </div>
                            </div>
                        </div>





                        <div class="form-group">
                            <label class="col-sm-3 control-label">Add New User</label>

                            <div class="col-sm-5">
                                <div class="input-group">
                                    <button type="submit" class="form-control btn btn-info" > Save </button>
                                </div>
                            </div>
                        </div>

                    </form>
            @endisset
                </div>

            </div>

        </div>
    </div>




@endsection


