@extends('layouts.admin')

@section('main')

    <h3>Edit Forum </h3>
    <a href="{{route('admin.tricks.index')}}" class="btn btn-info"> Back to Trick</a>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">

                    <div class="panel-options">
                        <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i
                                    class="entypo-cog"></i></a>
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

                    <form method="post" role="form" class="form-horizontal form-groups-bordered"
                          action="{{route('admin.tricks.update', $trick->id)}}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Status</label>

                            <div class="col-sm-5">
                                <div class="input-group">
                                    <select class="form-control" name="language" id="languages">
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <option value="{{$localeCode}}"
                                                    @if($localeCode==='en') selected @endif>{{ $properties['native'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        @if($trick)

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Status</label>

                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <input class="form-check-input" type="checkbox" name="activated" id="activated"
                                               @if($trick->activated) checked @endif>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Trick Description 1</label>

                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <input type="text" class="form-control lang" placeholder="Description 1"
                                                   name='description1[{{$localeCode}}]' id="description1{{$localeCode}}"
                                                   value='{{$trick->newDescription1->$localeCode}}'
                                                   style="display:none">
                                        @endforeach                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Trick Description 2</label>

                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <input type="text" class="form-control lang" placeholder="Description 2"
                                                   name='description2[{{$localeCode}}]' id="description2{{$localeCode}}"
                                                   value='{{$trick->newDescription2->$localeCode}}'
                                                   style="display:none">
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Trick Description 3</label>

                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <input type="text" class="form-control lang" placeholder="Description 3"
                                                   name='description3[{{$localeCode}}]' id="description3{{$localeCode}}"
                                                   value='{{$trick->newDescription3->$localeCode}}'
                                                   style="display:none">
                                        @endforeach                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Trick Description 4</label>

                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <input type="text" class="form-control lang" placeholder="Description 4"
                                                   name='description4[{{$localeCode}}]' id="description4{{$localeCode}}"
                                                   value='{{$trick->newDescription4->$localeCode}}'
                                                   style="display:none">
                                        @endforeach                                     </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Trick Amount</label>

                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <input type="number" step="0.01" class="form-control" value="{{$trick->amount}}"
                                               name='amount'>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Trick Link</label>

                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <input type="text" class="form-control" value="{{$trick->link}}" name='link'>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Images</label>
                                <div class="col-sm-5">
                                    <div id="file-uploader">

                                        @foreach($trick->images  as $image)

                                            <div class="img-wrap">
                                                <a href="{{route('admin.images', $trick->id)}}">
                                                    <span class="close">&times;</span>
                                                    <img src="{{asset('storage/'.$image->src)}}" style="width:100px"
                                                         class="img-fluid img-thumbnail" data-id="{{$image->id}}">
                                                </a>
                                            </div>


                                        @endforeach

                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Upload Images</label>

                                <div class="col-sm-5">
                                    <div id="file-uploader">
                                        <input type="file" multiple="multiple" name="images[]"/>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label">Add New Forum</label>

                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <button type="submit" class="form-control btn btn-info"> Save</button>
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

@push('link')
    <link rel="stylesheet" href="{{asset('css/admin/jquery.uploadPreviewer.css')}}">
    <style>
        .img-wrap {
            position: relative;
            display: inline-block;
            /*border: 1px red solid;*/
            font-size: 0;
        }

        .img-wrap .close {
            position: absolute;
            top: 2px;
            right: 2px;
            z-index: 100;
            background-color: #FFF;
            padding: 5px 2px 2px;
            color: #000;
            font-weight: bold;
            cursor: pointer;
            opacity: .2;
            text-align: center;
            font-size: 22px;
            line-height: 10px;
            border-radius: 50%;
        }

        .img-wrap:hover .close {
            opacity: 1;
        }
    </style>
@endpush

@push('scripts')
    <script src="{{asset('js/admin/jquery.uploadPreviewer.js')}}"></script>
    <script>
        $(function () {
            // $('.img-wrap .close').on('click', function() {
            //     var id = $(this).closest('.img-wrap').find('img').data('id');
            //
            //     $.ajax({
            //         type: "POST",
            //         cache: false,
            //         url: "",
            //         data: {userid: userid},
            //         success: function(msg) {
            //         }
            // });
            checkLanguage();

            $('#languages').on('change', function () {
                var id = $(this).val();
                $('.lang').each(function (i, item) {
                    if (item.id == 'description1' + id || item.id == 'description2' + id || item.id == 'description3' + id || item.id == 'description4' + id) {
                        $(item).show()
                    } else {
                        $(item).hide()
                    }

                })

            })

            function checkLanguage() {
                var id = $('#languages').val()
                console.log(id)
                $('.lang').each(function (i, item) {
                    if (item.id == 'description1' + id || item.id == 'description2' + id || item.id == 'description3' + id || item.id == 'description4' + id) {
                        $(item).show()
                    } else {
                        $(item).hide()
                    }
                })
            }
        });


    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            myUploadInput = $("input[type=file]").uploadPreviewer();

        });
    </script>

@endpush


