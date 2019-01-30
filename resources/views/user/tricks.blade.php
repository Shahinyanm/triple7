@extends('layouts.user')

@section('content')
    <div class="content-wrapper" style="min-height: 800px;">
        <!-- Content Header (Page header) -->
        <section class="content-header" id="help_trick_site">
            <h1>
                Tricks      </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row tricks">
                @isset($tricks)
                    @foreach($tricks as $trick)
                <div class="col-xl-6 col-12">
                    <div class="box">
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
                                            <div class="isotope-box" id="help_image_trick" href="{{asset('images/tricks')}}/{{$image->src}}" data-toggle="lightbox" data-gallery="multiimages" data-title="Bonus symbol"><img src="{{asset('images/tricks')}}/{{$image->src}}" alt="gallery" class="all studio"> </div>
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
                            <p><strong>Use trick now:</strong></p><button type="button" class="casino-link1 btn btn-info btn-lg " id="help_link_button" uid="15959" tick="53" url="{{$trick->link}}" data-id="{{$trick->id}}"><i class="fa fa-angle-double-right"></i> Trick <span id="apply_count">{{$trick->apply}}</span> apply</button><button type="button" class="trick-review btn btn-info btn-lg pull-right " id="help_review_button" uid="15959" tick="53"><i class="fa fa-thumbs-up"></i> Rate trick</button></div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                    @endforeach
                @endif
            	</div>
        </section>
        <!-- /.content -->
    </div>
@endsection

@push('styles')
    <link href="{{asset('css/user/animated-masonry-gallery.css')}}">
    <link href="{{asset('css/user/ekko-lightbox.css')}}">
@endpush
@push('scripts')
    <script src="{{asset('js/user/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('js/user/ekko-lightbox.js')}}"></script>
@endpush

@push('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function load_matrix(casinourl) {

            var	element = "#swal2-content",
                element_height,
                number_block,
                speed = 1,
                chars = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '!', '$', '@', '#', '?'];

            function create_string() {
                return chars[Math.floor(Math.random() * chars.length)];
            }

            count = 0;
            function create_matrix() {

                if(count <= 500){
                    number_block = create_string();
                    element_height = $(document).height();
                    $("#swal2-content").append('<div>' + number_block + '</div>');
                    $("#swal2-content").children().css({'position':'relative','float':'left'});
                    count = parseInt($("#swal2-content > div").length);
                }

                if(count == 501){
                    $("#swal2-content").append('<div style="position: relative; float: left; text-align:justify; margin-top:20px;"><strong>Der Trick wurde vorbereitet...</strong><br><br><strong style="color:#b2504b;">Achtung:</strong><br>Nutze <strong style="color:#b2504b;">nur dieses Gerät und diesen Browser</strong> für die Registrierung und Tricknutzung beim Casino, wenn du anschließend ein anderes Gerät oder ein anderen Browser nutzt, wird der Trick nicht funktionieren. Außerdem verlierst du dann dein Recht auf eine Erstattung, wenn ein Trick mal nicht funktioniert.</div>');
                    $(".swal2-actions").show();
                    $(".swal2-actions").html('<button type="button" class="casino_link_button btn btn-info btn-lg " id="casino_link_button" uid="183" tick="50" url="'+casinourl+'"><i class="fa fa-angle-double-right"></i> Zum Casino</button>');
                    clearInterval(trickInterval);
                }
            }

            var trickInterval = setInterval(create_matrix, speed);
        };

        function load_tricks(){
            var $tricks = $(".tricks");
            // $.ajax({
            //     type: "POST",
            //     cache: false,
            //     url: "ajax/user_tricks_load.php",
            //     data: {},
            //     success: function(msg) {
            //         $tricks.html('');
            //         $tricks.html(msg);
            //     },
            //     error: function (XMLHttpRequest, textStatus, errorThrown) {
            //         $tricks.html('Timeout loading from the server....');
            //     }
            // });
        }

        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });

        $(document).on("click",".casino-link",function() {
            var uid = $(this).attr("uid");
            var tick = $(this).attr("tick");
            var url = $(this).attr("url");
            swal({
                html: true,
                title: 'Vorbereitung des Tricks',
                html: ' ',
                allowOutsideClick: false,
                showCancelButton: false,
                showCloseButton: false,
                showConfirmButton: false,
                confirmButtonText: "Zum Casino",
                confirmButtonColor: '#b3984c'
            });

            $(".swal2-modal").css('background-color', '#212121').css('border', '1px solid #b3984c');
            $(".swal2-title").css('color', '#ffffff');
            $(".swal2-content").css('color', '#ffffff');
            $("#swal2-content").append('<div><strong>Trick wird vorbereitet...</strong></div><br><br>');
            $("#swal2-content").append('<div>Injecting Cookie: </div>');
            load_matrix(url);
        });

        $(document).on("click",".casino_link_button",function() {
            var url = $(this).attr("url");
            var tick = $(this).attr("tick");
            var win = window.open(url, '_blank');
            swal.closeModal();
            if (win) {
                win.focus();
            } else {
                alert('Please allow popups for this website');
            }
            review_trick(tick);
        });

        $(document).on("click",".casino-link1",function() {
            var id = $(this).data('id')
            var uid = $(this).attr("uid");
            var tick = $(this).attr("tick");
            var url = $(this).attr("url");
            var win = window.open(url, '_blank');
            $.ajax({
                type: "POST",
                cache: false,
                url: "user/update_apply",
                data: {id: id},
                success: function(msg) {
                $('#apply_count').html(parseInt($('#apply_count').html())+1)
                }
            });
            if (win) {
                win.focus();
            } else {
                alert('Please allow popups for this website');
            }
        });

        $(document).on("click",".trick_info", function(event) {
            var userid = '15610';
            // $.ajax({
            //     type: "POST",
            //     cache: false,
            //     url: "ajax/user_trick_info.php",
            //     data: {userid: userid, trickinfo: "1"},
            //     success: function(msg) {
            //     }
            // });
        });

        $(document).on("click",".trick-review",function() {
            var trickid = $(this).attr('tick');
            review_trick(trickid);
        });


    </script>
    @endpush