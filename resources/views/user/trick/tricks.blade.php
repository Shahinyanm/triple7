

        @isset($tricks)
            @foreach($tricks as $trick)
                <div class="col-xl-6 col-12">
                    <div class="box">
                        @if($trick->user_activated)
                            <div class="ribbon ribbon-bookmark ribbon-right bg-info" id="help_open_trick">@if($trick->activated == 1) Active Trick @else <span class="badge badge-danger"> Deactive Trick</span> @endif</div>
                        @endif
                        <div class="ribbon ribbon-bookmark ribbon-right bg-info" id="help_open_trick">@if($trick->activated == 1) Active Trick @else <span class="badge badge-danger"> Deactive Trick</span> @endif</div>
                        <div class="box-header with-border" id="help_title_trick">
                            <h3 class="box-title ">Trick {{$trick->id}}</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body ">
                            <p><strong>Description:</strong></p>
                            <ol class="trick_desc" id="help_desc_trick"><li>{{$trick->description1}}</li><li>{{$trick->description2}}</li><li>{{$trick->description3}}</li><li>{{$trick->description4}}</li></ol>
                            <hr>
                            <p><strong>Images of the trick:</strong></p>
                            <div class="col-12 no-padding">
                                <div class="gallery">
                                    <div class="gallery-content">
                                        <div class="gallery-content-center">
                                            @foreach($trick->images as $image)
                                                <div class="isotope-box" id="help_image_trick" href="{{asset('storage')}}/{{$image->src}}" data-toggle="lightbox" data-gallery="multiimages" data-title="Bonus symbol"><img src="{{asset('storage')}}/{{$image->src}}" alt="gallery" class="all studio"> </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <p><strong>Success barometer:</strong></p>
                            Has been with {{$trick->procent}}% of the members succeeded .
                            <div class="progress">
                                <div class="progress-bar progress-bar-gold" id="help_progress" role="progressbar" aria-valuenow="{{$trick->procent}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$trick->procent}}%">
                                    <span class="avgsuccess">{{$trick->procent}}% Success</span>
                                </div>
                            </div>
                            <hr>
                            <p><strong>Average winnings amount:</strong></p>
                            <p class="avgwin" id="help_avgwin">{{$trick->amount}}€</p>
                            <hr>
                            <p><strong>Use trick now:</strong></p><button type="button" class="casino-link1 btn btn-info btn-lg " id="help_link_button" uid="15959" tick="53" url="{{$trick->link}}" data-id="{{$trick->id}}"><i class="fa fa-angle-double-right"></i> Trick <span id="apply_count">{{$trick->apply}}</span> apply</button>


                            <button
                                            @if($trick->user_activated)
                                    style ='display: none'
                                    @endif
                                    type="button" class="trick-review btn btn-info btn-lg pull-right" id="help_review_button" uid="15959" tick="{{$trick->id}}" data-trick="{{$trick->id}}"   ><i class="fa fa-thumbs-up"></i> Rate trick</button></div>
                        <div><span id="message"></span> </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            @endforeach
        @endif


