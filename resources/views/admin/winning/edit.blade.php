@extends('layouts.admin')

@section('main')
    <h3>Edit Winning Image</h3>

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

                    <form method="post" role="form" class="form-horizontal form-groups-bordered" action="{{route('admin.winnings.update', $winning->id)}}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Select User</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="user_id">
                                    @if($users)
                                        @foreach($users as $user)
                                            @if($user->id == $winning->user->id)
                                                <option value ="{{$user->id}}" selected>  {{$user->first_name}}  {{$user->last_name}}</option>
                                            @else
                                                <option value ="{{$user->id}}"> {{$user->first_name}}  {{$user->last_name}}</option>
                                            @endif
                                        @endforeach
                                    @endif

                                </select>
                            </div>
                        </div>
                        @if($winning)
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label">Image Field</label>

                            <div class="col-sm-5">
                                <input type="hidden" value="{{$winning->image}}" name="check_image">
                                <input type="file" class="form-control" id="field-file" placeholder="Placeholder" name="image">
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label">Image Field</label>

                                <div class="col-sm-5">
                                    <img src="{{asset('images/winnings')}}/{{$winning->image}}" alt="" style="width:300px; height: 200px;">
                                </div>
                            </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Add New Winning Image</label>

                            <div class="col-sm-5">
                                <div class="input-group">
                                    <button type="submit" class="form-control btn btn-info" > Save </button>
                                </div>
                            </div>
                        </div>
                        @endif
                    </form>

                </div>

            </div>

        </div>
    </div>




@endsection