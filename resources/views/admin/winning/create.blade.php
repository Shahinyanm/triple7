@extends('layouts.admin')

@section('main')
    <h3>Create New  Winnin Image</h3>

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

                    <form method="post" role="form" class="form-horizontal form-groups-bordered" action="{{route('admin.winnings.store')}}" enctype="multipart/form-data">
                        {{--@method('PUT')--}}
                        @csrf

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select User</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="user_id">
                                    <option selected>Chose User</option>
                                @if($users)
                                        @foreach($users as $user)
                                            <option value ="{{$user->id}}"> {{$user->first_name}} {{$user->last_name}}</option>
                                        @endforeach
                                    @endif

                                </select>
                            </div>
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<label class="col-sm-3 control-label">Winning Name</label>--}}

                            {{--<div class="col-sm-5">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"></span>--}}
                                    {{--<input type="text" class="form-control" placeholder="Winning image Name" name ='name'>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Image Field</label>

                            <div class="col-sm-5">
                                <input type="file" class="form-control" id="field-file" placeholder="Placeholder" name="image">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Add New Product</label>

                            <div class="col-sm-5">
                                <div class="input-group">
                                    <button type="submit" class="form-control btn btn-info" > Save </button>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>




@endsection