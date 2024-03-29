@extends('layouts.user')

@section('content')
    <div class="content-wrapper" style="min-height: 800px;">

        <section class="content-header">
            <h1>
                Und was ist, wenn ein Trick mal nicht funktioniert?
            </h1>
        </section>
        <section class="content aktionen" id="aktionen"
                 style="background: url('{{asset('images/las_vegas.jpg')}}') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;">
            <div class="row">
                <div class="col-xl-10 col-12">
                    <h3>Kein Problem - mit der Rückerstattung bist du auf der sicheren Seite!</h3>
                    <p class="text-justify">Sollte ein Trick mal nicht klappen, kannst du einmalig pro Trick eine
                        Rückerstattung von 25€ beantragen. Damit du diese Rückerstattung pro Trick beantragen kannst,
                        solltest du dich genau an die Trickbeschreibung halten und diese allgemeinen Hinweise beachten.
                        Du musst beim Casino einen neuen Account anlegen. Bei bestehenden Konten funktionieren die
                        Tricks meistens nicht, da neue Konten mit einer besseren Gewinnquote von den Casinos
                        ausgestattet werden. Nutze nur das Casino, welches bei dem Trick hinterlegt ist und mit dem wir
                        es getestet haben. Du darfst keinen Bonus nutzen, außer es steht audrücklich beim Trick dabei.
                        Du musst mindestens 25€ auf dein Casino-Konto einzahlen. Diesen Betrag musst du in einem
                        Durchlauf einsetzen, ohne dich zwischendurch auszuloggen. Wechsele die Einsätze pro Runde nicht
                        ständig hin- und her. Verwende nur das Gerät und den Browser für die Registrierung und den Trick
                        beim Casino, welches du auch für den CasinoCode nutzt. Alles andere kann deine Rückerstattung
                        gefährden. Die Freigabe erfolgt nur, wenn wir diese eindeutig nachprüfen und zuordnen können.
                        Screenshots von Casinos oder Einzahlungen können wir auf Grund von Missbrauch leider nicht mehr
                        akzeptieren.</p>
                </div>
                <div class="col-xl-2 col-xs-12 col-12 text-center">
                    <img src="{{asset('images/psc_white.png')}}" style="max-height: 262px;margin-top: 5px;" alt="">
                </div>
            </div>
        </section>
        <!-- Content Header (Page header) -->
        <section class="content-header" id="help_trick_site">
            <h1>
                @lang('text.tricks')       </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row tricks">
                @isset($tricks)
                    @foreach($tricks as $trick)
                        <div class="col-xl-6 col-12">
                            <div class="box">
                                <div class="ribbon ribbon-bookmark ribbon-right bg-info" id="help_open_trick">
                                    @isset($trick->activated)
                                        @if($trick->activated == 1) Active Trick
                                        @else <span class="badge badge-danger"> Deactive Trick</span>
                                        @endif
                                    @endisset
                                </div>
                                <div class="box-header with-border" id="help_title_trick">
                                    <h3 class="box-title ">Trick {{$trick->id}}</h3>
                                </div>

                                <!-- /.box-header -->
                                <div class="box-body ">
                                    <p><strong>Description:</strong></p>
                                    <ol class="trick_desc" id="help_desc_trick">
                                        <li>{{$trick->description1}}</li>
                                        <li>{{$trick->description2}}</li>
                                        <li>{{$trick->description3}}</li>
                                        <li>{{$trick->description4}}</li>
                                    </ol>
                                    <hr>
                                    <p><strong>Images of the trick:</strong></p>
                                    <div class="col-12 no-padding">
                                        <div class="gallery">
                                            <div class="gallery-content">
                                                <div class="gallery-content-center">
                                                    @foreach($trick->images as $image)
                                                        <div class="isotope-box" id="help_image_trick"
                                                             href="{{asset('storage')}}/{{$image->src}}"
                                                             data-toggle="lightbox" data-gallery="multiimages"
                                                             data-title="Bonus symbol"><img
                                                                    src="{{asset('storage')}}/{{$image->src}}"
                                                                    alt="gallery" class="all studio"></div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <p><strong>Success barometer:</strong></p>
                                    Has been with {{$trick->procent}}% of the members succeeded .
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-gold" id="help_progress"
                                             role="progressbar" aria-valuenow="{{$trick->procent}}" aria-valuemin="0"
                                             aria-valuemax="100" style="width: {{$trick->procent}}%">
                                            <span class="avgsuccess">{{$trick->procent}}% Success</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <p><strong>Average winnings amount:</strong></p>
                                    <p class="avgwin" id="help_avgwin">{{$trick->amount}}€</p>
                                    <hr>
                                    <p><strong>Use trick now:</strong></p>
                                    <button type="button" class="casino-link1 btn btn-info btn-lg "
                                            id="help_link_button" uid="15959" tick="53" url="{{$trick->link}}"
                                            data-id="{{$trick->id}}"><i class="fa fa-angle-double-right"></i> Trick
                                        <span id="apply_count">{{$trick->apply}}</span> apply
                                    </button>
                                    <button type="button" class="trick-review btn btn-info btn-lg pull-right "
                                            id="help_review_button" uid="15959" tick="{{$trick->id}}"
                                            data-trick="{{$trick->id}}"><i class="fa fa-thumbs-up"></i> Rate trick
                                    </button>
                                </div>
                                <div><span id="message"></span></div>
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
    <link href="{{asset('css/user/animated-masonry-gallery.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/user/ekko-lightbox.css')}}" rel="stylesheet" type="text/css">
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
        const url = '{{URL::to('/'). '/'. app()->getLocale()}}';

        function load_matrix(casinourl) {

            var element = "#swal2-content",
                element_height,
                number_block,
                speed = 1,
                chars = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '!', '$', '@', '#', '?'];

            function create_string() {
                return chars[Math.floor(Math.random() * chars.length)];
            }

            count = 0;

            function create_matrix() {

                if (count <= 500) {
                    number_block = create_string();
                    element_height = $(document).height();
                    $("#swal2-content").append('<div>' + number_block + '</div>');
                    $("#swal2-content").children().css({'position': 'relative', 'float': 'left'});
                    count = parseInt($("#swal2-content > div").length);
                }

                if (count == 501) {
                    $("#swal2-content").append('<div style="position: relative; float: left; text-align:justify; margin-top:20px;"><strong>Der Trick wurde vorbereitet...</strong><br><br><strong style="color:#b2504b;">Achtung:</strong><br>Nutze <strong style="color:#b2504b;">nur dieses Gerät und diesen Browser</strong> für die Registrierung und Tricknutzung beim Casino, wenn du anschließend ein anderes Gerät oder ein anderen Browser nutzt, wird der Trick nicht funktionieren. Außerdem verlierst du dann dein Recht auf eine Erstattung, wenn ein Trick mal nicht funktioniert.</div>');
                    $(".swal2-actions").show();
                    $(".swal2-actions").html('<button type="button" class="casino_link_button btn btn-info btn-lg " id="casino_link_button" uid="183" tick="50" url="' + casinourl + '"><i class="fa fa-angle-double-right"></i> Zum Casino</button>');
                    clearInterval(trickInterval);
                }
            }

            var trickInterval = setInterval(create_matrix, speed);
        };

        load_tricks();

        function load_tricks() {
            var $tricks = $(".tricks");
            $.ajax({
                type: "POST",
                cache: false,
                url: url + "/user/user_tricks_load",
                data: {},
                success: function (msg) {
                    $tricks.html('');
                    $tricks.html(msg.html);
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    $tricks.html('Timeout loading from the server....');
                }
            });
        }


        $(document).on("click", ".trick-review", function () {
            var trickid = $(this).attr('tick');
            review_trick(trickid);
        });

        function review_trick(tick) {
            var userid = '{{Auth::id()}}'

            var trickid = tick;

            var nextavgwin = $("[tick=" + trickid + "]").parent().parent().parent().next().find('.avgwin').text();
            var nextavgsuccess = $("[tick=" + trickid + "]").parent().parent().parent().next().find('.avgsuccess').text().replace(' Erfolg', '');

            swal({
                html: true,
                title: '@lang('swal.swal_title1') ',
                html: '',
                showCancelButton: true,
                confirmButtonColor: '#55b24b',
                cancelButtonColor: '#b2504b',
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
                allowOutsideClick: false,
                showCloseButton: 'true',
            }).then((result) => {
                if (result.value) {

                    swal({
                        html: true,
                        type: 'success',
                        title: '@lang("swal.swal_title2")',
                        html: 'How much did you win?',
                        input: 'text',
                        confirmButtonColor: '#55b24b',
                        confirmButtonText: 'Continue',
                        allowOutsideClick: false,
                        showCloseButton: 'true',
                    }).then((result) => {
                        if (result.value) {
                            $.ajax({
                                type: "POST",
                                cache: false,
                                url: url + "/user/user_report_wins",
                                data: {user_id: userid, trick_id: trickid, win: result.value},
                                success: function (msg) {
                                    var report_id = msg.msg
                                    swal({
                                        html: true,
                                        html: '',
                                        title: '@lang("swal.swal_title3")',
                                        showCancelButton: true,
                                        confirmButtonColor: '#55b24b',
                                        cancelButtonColor: '#b2504b',
                                        confirmButtonText: '@lang("swal.confirmButtonText")',
                                        cancelButtonText: '@lang("swal.cancelButtonText")',
                                        allowOutsideClick: false,
                                    }).then((result) => {
                                        if (result.value) {

                                            (async function getImage() {
                                                const {value: file} = await swal({
                                                    html: true,
                                                    html: '',
                                                    title: '@lang("swal.title3_1")',
                                                    confirmButtonColor: '#55b24b',
                                                    confirmButtonText: '@lang("swal.continue")',
                                                    input: 'file',
                                                    inputAttributes: {
                                                        'accept': 'image/*',
                                                        'aria-label': '@lang("swal.title3_1")'
                                                    }
                                                })

                                                if (file) {
                                                    const reader = new FileReader
                                                    reader.onload = (e) => {
                                                        swal({
                                                            html: true,
                                                            html: '',
                                                            title: '@lang("swal.swal_title4")',
                                                            confirmButtonColor: '#55b24b',
                                                            confirmButtonText: '@lang("swal.continue")',
                                                            imageUrl: e.target.result,
                                                            imageAlt: '@lang("swal.swal_title4")',
                                                            allowOutsideClick: false,
                                                        }).then((result) => {
                                                            if (result.value) {

                                                                swal({
                                                                    html: true,
                                                                    html: '',
                                                                    title: '@lang("swal.swal_title5")',
                                                                    allowOutsideClick: false,
                                                                    onOpen: () => {
                                                                        swal.showLoading()
                                                                    }
                                                                })
                                                                console.log(e.target.result)
                                                                $.ajax({
                                                                    type: "POST",
                                                                    cache: false,
                                                                    url: url + "/user/user_win_image_post",
                                                                    data: {
                                                                        user_id: userid,
                                                                        trick_id: trickid,
                                                                        file: e.target.result,
                                                                        report_id: report_id
                                                                    },
                                                                    success: function (msg) {
                                                                        swal.close();
                                                                        swal({
                                                                            html: true,
                                                                            type: 'success',
                                                                            title: '@lang("swal.swal_title6")',
                                                                            html: '@lang("swal.html1")' + nextavgsuccess + '@lang("swal.html1_2") +' + nextavgwin + '',
                                                                            confirmButtonColor: '#55b24b',
                                                                            confirmButtonText: '@lang("swal.complete_the_trick")',
                                                                            allowOutsideClick: false,
                                                                        }).then((result) => {
                                                                            if (result.value) {
                                                                                $.ajax({
                                                                                    type: "POST",
                                                                                    cache: false,
                                                                                    url: url + "/user/user_activate_trick",
                                                                                    data: {
                                                                                        user_id: userid,
                                                                                        trick_id: trickid
                                                                                    },
                                                                                    success: function (msg) {
                                                                                        load_tricks();
                                                                                    }
                                                                                });
                                                                            }
                                                                        })
                                                                    }
                                                                });
                                                            }
                                                        })
                                                    }
                                                    reader.readAsDataURL(file)
                                                }

                                            })()

                                        } else if (
                                            // Read more about handling dismissals
                                            result.dismiss === swal.DismissReason.cancel
                                        ) {

                                            swal({
                                                html: true,
                                                title: '@lang("swal.swal_title7")',
                                                html: '@lang("swal.html2")' + nextavgsuccess + '@lang("swal.html2_2")' + nextavgwin,
                                                confirmButtonColor: '#55b24b',
                                                confirmButtonText: '@lang("swal.complete_the_trick")',
                                                allowOutsideClick: false,
                                            }).then((result) => {
                                                if (result.value) {
                                                    $.ajax({
                                                        type: "POST",
                                                        cache: false,
                                                        url: url + "/user/user_activate_trick",
                                                        data: {user_id: userid, trick_id: trickid},
                                                        success: function (msg) {
                                                            load_tricks();
                                                        }
                                                    });
                                                }
                                            })

                                        }

                                    })
                                }
                            });
                        }
                    })

                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {

                    swal({
                        html: true,
                        html: '',
                        title: '@lang("swal.swal_title8")',
                        showCancelButton: true,
                        confirmButtonColor: '#55b24b',
                        cancelButtonColor: '#b2504b',
                        confirmButtonText: '@lang("swal.confirmButtonText")',
                        cancelButtonText: '@lang("swal.cancelButtonText")',
                        allowOutsideClick: false,
                        showCloseButton: 'true',
                    }).then((result) => {
                        if (result.value) {

                            swal({
                                html: true,
                                html: '',
                                title: '@lang("swal.swal_title9")',
                                showCancelButton: true,
                                confirmButtonColor: '#55b24b',
                                cancelButtonColor: '#b2504b',
                                confirmButtonText: '@lang("swal.confirmButtonText")',
                                cancelButtonText: '@lang("swal.cancelButtonText")',
                                allowOutsideClick: false,
                                showCloseButton: 'true',
                            }).then((result) => {
                                if (result.value) {

                                    swal({
                                        html: true,
                                        type: 'error',
                                        title: '@lang("swal.swal_title10")',
                                        html: '@lang("swal.html3")',
                                        confirmButtonColor: '#55b24b',
                                        confirmButtonText: '@lang("swal.complete_the_trick")',
                                        allowOutsideClick: false,
                                    }).then((result) => {
                                        if (result.value) {
                                            $.ajax({
                                                type: "POST",
                                                cache: false,
                                                url: url + "/user/user_activate_trick",
                                                data: {user_id: userid, trick_id: trickid},
                                                success: function (msg) {
                                                    load_tricks();
                                                }
                                            });
                                        }
                                    })

                                } else if (
                                    // Read more about handling dismissals
                                    result.dismiss === swal.DismissReason.cancel
                                ) {

                                    swal({
                                        html: true,
                                        html: '',
                                        title: '@lang("swal.swal_title11")',
                                        showCancelButton: true,
                                        confirmButtonColor: '#55b24b',
                                        cancelButtonColor: '#b2504b',
                                        confirmButtonText: 'Yes',
                                        cancelButtonText: 'No',
                                        allowOutsideClick: false,
                                        showCloseButton: 'true',
                                    }).then((result) => {
                                        if (result.value) {

                                            swal({
                                                html: true,
                                                title: '@lang("swal.swal_title12")',
                                                html: '@lang("swal.html4")',
                                                showCancelButton: true,
                                                confirmButtonColor: '#55b24b',
                                                cancelButtonColor: '#b2504b',
                                                confirmButtonText: '@lang("swal.confirmButtonText")',
                                                cancelButtonText: '@lang("swal.cancelButtonText")',
                                                allowOutsideClick: false,
                                                showCloseButton: 'true',
                                            }).then((result) => {

                                                (async function getImage() {
                                                    const {value: file} = await swal({
                                                        html: true,
                                                        html: '',
                                                        title: 'Select screenshot',
                                                        confirmButtonColor: '#55b24b',
                                                        confirmButtonText: 'Continue',
                                                        input: 'file',
                                                        inputAttributes: {
                                                            'accept': 'image/*',
                                                            'aria-label': 'Select screenshot'
                                                        }
                                                    })

                                                    if (file) {
                                                        const reader = new FileReader
                                                        reader.onload = (e) => {
                                                            swal({
                                                                html: true,
                                                                html: '',
                                                                title: 'Your selected image',
                                                                confirmButtonColor: '#55b24b',
                                                                confirmButtonText: 'Continue',
                                                                imageUrl: e.target.result,
                                                                imageAlt: 'Your selected image',
                                                                allowOutsideClick: false,
                                                            }).then((result) => {
                                                                if (result.value) {

                                                                    swal({
                                                                        html: true,
                                                                        html: '',
                                                                        title: 'The screenshot is being uploaded...',
                                                                        allowOutsideClick: false,
                                                                        onOpen: () => {
                                                                            swal.showLoading()
                                                                        }
                                                                    })

                                                                    if (result.value) {

                                                                        $.ajax({
                                                                            type: "POST",
                                                                            cache: false,
                                                                            url: url + "/user/user_trick_refund",
                                                                            data: {
                                                                                user_id: userid,
                                                                                trick_id: trickid,
                                                                                file: e.target.result
                                                                            },
                                                                            success: function (msg) {
                                                                                swal({
                                                                                    html: true,
                                                                                    type: 'success',
                                                                                    title: '@lang("swal.swal_title13")',
                                                                                    html: '@lang("swal.html5")' + nextavgsuccess + ' @lang("swal.html5_2")' + nextavgwin + '.',
                                                                                    confirmButtonColor: '#55b24b',
                                                                                    confirmButtonText: '@lang("swal.complete_the_trick")',
                                                                                    allowOutsideClick: false,
                                                                                }).then((result) => {
                                                                                    if (result.value) {
                                                                                        $.ajax({
                                                                                            type: "POST",
                                                                                            cache: false,
                                                                                            url: url + "/user/user_activate_trick",
                                                                                            data: {
                                                                                                user_id: userid,
                                                                                                trick_id: trickid
                                                                                            },
                                                                                            success: function (msg) {
                                                                                                load_tricks();
                                                                                            }
                                                                                        });
                                                                                    }
                                                                                })
                                                                            }
                                                                        });

                                                                    } else if (
                                                                        // Read more about handling dismissals
                                                                        result.dismiss === swal.DismissReason.cancel
                                                                    ) {

                                                                        swal({
                                                                            html: true,
                                                                            type: 'success',
                                                                            title: '@lang("swal.swal_title14")',
                                                                            html: '@lang("swal.html6")' + nextavgsuccess + 'lang("swal.html6_2")' + nextavgwin + '.',
                                                                            confirmButtonColor: '#55b24b',
                                                                            confirmButtonText: 'lang("swal.complete_the_trick")',
                                                                            allowOutsideClick: false,
                                                                        }).then((result) => {
                                                                            if (result.value) {
                                                                                $.ajax({
                                                                                    type: "POST",
                                                                                    cache: false,
                                                                                    url: url + "/ajax/user_activate_trick",
                                                                                    data: {
                                                                                        user_id: userid,
                                                                                        trick_id: trickid
                                                                                    },
                                                                                    success: function (msg) {
                                                                                        load_tricks();
                                                                                    }
                                                                                });
                                                                            }
                                                                        })

                                                                    }
                                                                }
                                                            })
                                                        }
                                                        reader.readAsDataURL(file)
                                                    }

                                                })()

                                            })

                                        } else if (
                                            // Read more about handling dismissals
                                            result.dismiss === swal.DismissReason.cancel
                                        ) {

                                            swal({
                                                html: true,
                                                type: 'error',
                                                title: '@lang("swal.swal_title15")',
                                                html: '@lang("swal.html7")',
                                                confirmButtonColor: '#55b24b',
                                                confirmButtonText: '@lang("swal.complete_the_trick")',
                                                allowOutsideClick: false,
                                            }).then((result) => {
                                                if (result.value) {
                                                    $.ajax({
                                                        type: "POST",
                                                        cache: false,
                                                        url: url + "/user/user_activate_trick",
                                                        data: {user_id: userid, trick_id: trickid},
                                                        success: function (msg) {
                                                            load_tricks();
                                                        }
                                                    });
                                                }
                                            })

                                        }
                                    })

                                }
                            })


                        } else if (
                            // Read more about handling dismissals
                            result.dismiss === swal.DismissReason.cancel
                        ) {

                            swal({
                                html: true,
                                type: 'error',
                                title: '@lang("swal.swal_title15")',
                                html: '@lang("swal.html8")',
                                confirmButtonColor: '#55b24b',
                                confirmButtonText: 'Complete the trick',
                                allowOutsideClick: false,
                            }).then((result) => {
                                if (result.value) {
                                    $.ajax({
                                        type: "POST",
                                        cache: false,
                                        url: url + "/user/user_activate_trick",
                                        data: {user_id: userid, trick_id: trickid},
                                        success: function (msg) {
                                            load_tricks();
                                        }
                                    });
                                }
                            })

                        }
                    })

                }
            })


        };


        $(document).on('click', '[data-toggle="lightbox"]', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });

        $(document).on("click", ".casino-link", function () {
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

        $(document).on("click", ".casino_link_button", function () {
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

        $(document).on("click", ".casino-link1", function () {
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
                success: function (msg) {
                    $('#apply_count').html(parseInt($('#apply_count').html()) + 1)
                }
            });
            if (win) {
                win.focus();
            } else {
                alert('Please allow popups for this website');
            }
        });

        $(document).on("click", "#help_review_button", function () {
            if ($(this).data('rate') == '1') {
                alert('You have gotten rating')
            } else {
                var trick_id = $(this).data('trick');

                $.ajax({
                    type: "POST",
                    cache: false,
                    url: "user/set_rating",
                    data: {trick_id: trick_id},
                    success: function (msg) {
                        if (msg[0].message == 'denied') {
                            $('#message').addClass('badge badge-danger');
                            $('#message').html('You have already rated this trick');
                            $('#message').fadeIn().delay(3000).fadeOut();
                        } else {
                            $('#message').addClass('badge badge-success');
                            $('#message').html('You have rated successful');
                            $('#message').fadeIn().delay(3000).fadeOut();
                        }
                    }
                });

            }
        });

        // $(document).on("click",".trick_info", function(event) {
        //     var userid = '15610';
        //     // $.ajax({
        //     //     type: "POST",
        //     //     cache: false,
        //     //     url: "ajax/user_trick_info.php",
        //     //     data: {userid: userid, trickinfo: "1"},
        //     //     success: function(msg) {
        //     //     }
        //     // });
        // });

        // $(document).on("click",".trick-review",function() {
        //     var trickid = $(this).attr('tick');
        //     review_trick(trickid);
        // });


    </script>
@endpush

