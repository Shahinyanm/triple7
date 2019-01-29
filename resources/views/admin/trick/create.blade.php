@extends('layouts.admin')

@section('main')
    <h3>Create New  Trick </h3>

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

                    <form method="post" role="form" class="form-horizontal form-groups-bordered" action="{{route('admin.tricks.store')}}" enctype="multipart/form-data">
                        {{--@method('PUT')--}}
                        @csrf

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Status</label>

                            <div class="col-sm-5">
                                <div class="input-group">
                                    <input class="form-check-input" type="checkbox" name="activated" id="activated" checked>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Trick  Description 1</label>

                            <div class="col-sm-5">
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="form-control" placeholder="Description 1" name ='description1'>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Trick  Description 2</label>

                            <div class="col-sm-5">
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="form-control" placeholder="Description 2" name ='description2'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Trick  Description 3</label>

                            <div class="col-sm-5">
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="form-control" placeholder="Description 3" name ='description3'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Trick  Description 4</label>

                            <div class="col-sm-5">
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="form-control" placeholder="Description 4" name ='description4'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Trick  Amount</label>

                            <div class="col-sm-5">
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="number" step="0.01" class="form-control" placeholder="Amount only Number" name ='amount'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Trick  Link</label>

                            <div class="col-sm-5">
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="form-control" placeholder="Link here" name ='link'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Upload Images</label>

                            <div class="col-sm-5">
                                <div id="file-uploader" >
                                        <input type="file" multiple="multiple" name="images[]"/>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Add New Forum</label>

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

@push('link')
    <link rel="stylesheet" href="{{asset('css/admin/jquery.uploadPreviewer.css')}}">

@endpush

@push('scripts')

<script src="{{asset('js/admin/jquery.uploadPreviewer.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            myUploadInput = $("input[type=file]").uploadPreviewer();

        });
</script>

@endpush
