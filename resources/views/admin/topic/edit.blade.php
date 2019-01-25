@extends('layouts.admin')

@section('main')
    <h3>Edit Topic </h3>

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

                    <form method="post" role="form" class="form-horizontal form-groups-bordered" action="{{route('admin.forums.update', $forum->id)}}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf


                        @if($forum)
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Forum  Name</label>

                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <input type="text" class="form-control" placeholder="Forum Name" name ='title' value="{{$forum->title}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Forum  Description</label>

                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <textarea name="text" id="" cols="82" rows="5">{{$forum->text}}</textarea>
                                    </div>
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