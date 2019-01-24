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
                <div class="col-12">
                    <div class="alert alert-danger mb-10" role="alert">
                        Currently there are no tricks in your country. We're working to provide you with tricks again soon. As soon as we have found a trick, we will inform you by e-mail.
                    </div>
                </div>		</div>
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
            var uid = $(this).attr("uid");
            var tick = $(this).attr("tick");
            var url = $(this).attr("url");
            var win = window.open(url, '_blank');
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