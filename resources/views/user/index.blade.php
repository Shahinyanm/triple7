@extends('layouts.user')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">

        <section class="content-header">
            <h1>
                CasinoCode News
            </h1>
        </section>
        <section class="content aktionen" id="aktionen" style="background: url("{{asset('images/winter.jpg')}}") no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;">
            <div class="row">
                <canvas class="snow-canvas" speed="1" interaction="false" size="2" count="80" opacity="0.00001" start-color="rgba(253,252,251,1)" end-color="rgba(251,252,253,0.3)" wind-power="0" image="false" width="1680" height="364"></canvas>
                <canvas class="snow-canvas" speed="2" interaction="true" size="6" count="30" start-color="rgba(253,252,251,1)" end-color="rgba(251,252,253,0.3)" opacity="0.00001" wind-power="2" image="false" width="1680" height="364"></canvas>
                <canvas class="snow-canvas" speed="3" interaction="true" size="25" count="20" wind-power="-4" image="assets/vendor_components/snow-plugin/snow.png" width="1680" height="364"></canvas>
                <div class="col-xl-5 col-12">
                    <h3>Wir möchten den <span class="gold font-weight-bold">CasinoCode</span> verbessern - Hilf uns doch dabei!</h3>
                    <p class="text-justify">Der CasinoCode hat eingeschlagen wie eine Bombe. Trotz einiger Schwierigkeiten zum Beginn, blicken wir voller stolz auf eine Community mit mehr als 15.000 Mitgliedern. Gemeinsam könnt ihr euch täglich an Tricks erfreuen und in Casinos gewinnen. Teste unsere aktuellen Casino Tricks. Wie gewohnt kannst du jeden Trick einmalig kostenlos im Wert von 25€ nutzen, denn diesen Betrag erstatten wir dir zurück. Um den CasinoCode noch besser zu machen brauchen wir dich. Hast du Ideen für Veränderungen am Design, Aufbau der Seite, dem gesamten Ablauf oder andere Vorschläge – dann her damit! Es lohnt sich.</p>
                </div>
                <div class="col-xl-4 col-xs-12 col-12 text-center">
                    <h3><span class="gold font-weight-bold">1.</span> Vorschlag einsenden</h3>
                    <textarea class="form-control" id="text_suggestion" style="max-height: 250px; min-height: 150px;"></textarea>
                    <br>
                    <div class="response_suggestion"></div>
                    <button type="button" class="btn btn-info btn-lg send_suggestion"><i class="fa fa-angle-double-right"></i> Vorschlag einsenden</button>

                </div>
                <div class="col-xl-3 col-xs-12 col-12 text-center">
                    <h3><span class="gold font-weight-bold">2.</span> Paysafecard gewinnen</h3>
                    <p class="text-justify">Unter allen Teilnehmern verlosen wir insgesamt 15 Paysafecards. Eine im Wert von 100€, 4 Stück im Wert von 50€ und 10 Stück im Wert von 25€. Also schnell mitmachen, Vorschlag einsenden und gewinnen. Diese Aktion endet am 05.02.2019. Nur sinnvolle Vorschläge landen in unserem Lostopf 😉. Die Gewinner werden per E-Mail am 06.02.2019 benachrichtigt.</p>

                </div>
            </div>
        </section>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Overview      </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xl-4 col-md-12 col" id="help_found_tricks">
                    <a class="info-box-link" href="tricks.php">
                        <div class="info-box">
                            <span class="info-box-icon bg-info"><i class="fa fa-search"></i></span>

                            <div class="info-box-content">
				  <span class="info-box-number">
				  50				  </span>
                                <span class="info-box-text">Unveiled tricks</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-xl-4 col-md-12 col" id="help_active_tricks">
                    <a class="info-box-link" href="tricks.php">
                        <div class="info-box">
                            <span class="info-box-icon bg-info"><i class="fa fa-check"></i></span>

                            <div class="info-box-content">
				  <span class="info-box-number">
				  0				  </span>
                                <span class="info-box-text">Active tricks</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </a>
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block"></div>

                <div class="col-xl-4 col-md-12 col" id="help_used_tricks">
                    <a class="info-box-link" href="tricks.php">
                        <div class="info-box">
                            <span class="info-box-icon bg-info"><i class="fa fa-gamepad"></i></span>

                            <div class="info-box-content">
				  <span class="info-box-number">
				  0				  </span>
                                <span class="info-box-text">Tricks taken part in</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </a>
                </div>
                <!-- /.col -->

            </div>

            <div class="row">
                <div class="col-xl-4 col-12">
                    <div class="box box-inverse box-carousel slide" data-ride="carousel" style="background-color: #212121">
                        <div class="box-header no-border">
                            <span class="fa fa-trophy font-size-30"></span>
                            <div class="box-tools pull-right">
                                <h5 class="box-title box-title-bold">Latest winners</h5>
                            </div>
                        </div>

                        <div class="carousel-inner">


                        </div>

                        <div class="carousel-link text-center">
                            <a href="tricks.php"><span><i class="fa fa-gamepad"></i> Show all tricks</span></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-12">
                    <div class="box box-inverse" style="background-color: #212121">
                        <div class="box-header no-border">
                            <span class="fa fa-comments font-size-30"></span>
                            <div class="box-tools pull-right">
                                <h5 class="box-title box-title-bold">FAQ - Forum</h5>
                            </div>
                        </div>

                        <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
                            <p class="text-justify">If you have any questions, this is your first contact point. Contact the community. Here you will find many answered questions, and you can also ask questions yourself. These will then be answered either by us as a team or by other users.</p>
                            <div class="text-center">
                                <a href="forum.php"><span><i class="fa fa-comments"></i> FAQ - Forum</span></a>
                            </div>
                        </blockquote>
                    </div>
                </div>

                <div class="col-xl-4 col-12">
                    <div class="box box-inverse" style="background-color: #212121">
                        <div class="box-header no-border">
                            <span class="fa fa-whatsapp font-size-30"></span>
                            <div class="box-tools pull-right">
                                <h5 class="box-title box-title-bold">Whatsapp support</h5>
                            </div>
                        </div>

                        <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
                            <p class="text-justify">If you have very specific questions, you can also contact our team directly via WhatsApp. We are glad to help you individually and will be of assistance with any queries you may have. Don't be afraid or shy! We look forward to your enquiry!</p>
                            <div class="text-center">
                                <a href="https://wa.me/447501980397" target="_blank"><span><i class="fa fa-phone-square"></i> +44 7501 98 03 97</span></a>
                            </div>
                        </blockquote>
                    </div>
                </div>

            </div>


        </section>
        <!-- /.content -->
    </div>

    @endsection


@push('js')
    <script>
        $(".snow-canvas").snow();

        function go_to_tricks() {
            document.location.href = 'tricks.php?tour=1';
        }


        var tour = new Tour({
            name: "tour",
            steps: [
                {
                    element: ".sidebar-toggle",
                    title: 'Navigation',
                    content: 'Using this symbol you can access the menu on each page.',
                    onNext: function(){

                        if ($(window).width() <= 767){
                            $('[data-toggle="push-menu"]').pushMenu('toggle');
                        }
                    },
                },
                {
                    element: ".sidebar",
                    title: 'Navigation',
                    content: 'After the menu has been opened you can access each page.'
                },
                {
                    element: "#help_dashboard",
                    title: 'Overview',
                    content: 'Clicking the "overview" button will redirect you back to the start page.'
                },
                {
                    element: "#help_tricks",
                    title: 'Tricks',
                    content: 'Here you can find your active casinos tricks.'
                },
                {
                    element: "#help_wins",
                    title: 'Winnings',
                    content: '"Winnings" are the latest reported winnings of our members.'
                },
                {
                    element: "#help_forum",
                    title: 'FAQ - Forum',
                    content: 'In the FAQ forum you can find support  and find previous questions.'
                },
                {
                    element: "#help_settings",
                    title: 'Settings',
                    content: 'In the "settings" you are able to change your personal information and password.'
                },
                {
                    element: "#help_logout",
                    title: 'Logout',
                    content: 'You can logout via the menu item Logout.',
                    onNext: function(){

                        if ($(window).width() <= 767){
                            $('[data-toggle="push-menu"]').pushMenu('toggle');
                        }
                    },
                },
                {
                    element: ".helper",
                    title: 'Support',
                    content: 'Using this symbol you are able to re-start the tour.',
                    onPrev: function(){

                        if ($(window).width() <= 767){
                            $('[data-toggle="push-menu"]').pushMenu('toggle');
                        }
                    },
                },
                {
                    element: "#help_found_tricks",
                    title: 'Unveiled tricks',
                    content: 'Here you can find the amount of tricks which we have identified since we started our community.'
                },
                {
                    element: "#help_active_tricks",
                    title: 'Active tricks',
                    content: 'Here you can see the number of tricks which are currently still working and which you can use.'
                },
                {
                    element: "#help_used_tricks",
                    title: 'Tricks taken part in',
                    content: 'Here you are seeing the amount of tricks which you have already used. ',
                },
                {
                    element: "#help_tricks",
                    title: 'Tricks',
                    content: function(){document.location.href = 'tricks.php?tour=1';},
                },
            ],
            container: "body",
            smartPlacement: true,
            keyboard: true,
            storage: window.localStorage,
            debug: false,
            backdrop: true,
            backdropContainer: 'body',
            backdropPadding: 0,
            redirect: true,
            orphan: false,
            duration: false,
            delay: false,
            template: "<div class='popover tour-tour tour-tour-0 bs-popover-bottom show'><div class='arrow'></div><h3 class='popover-header'></h3><div class='popover-body'></div><div class='popover-navigation'><button class='btn btn-sm btn-secondary' data-role='prev'>« Back</button><span data-role='separator'>|</span><button class='btn btn-sm btn-secondary' data-role='next'>Continue »</button></div></div>",

        });



        function help(){
            var userid = '15610';
            swal({
                type: 'question',
                html: true,
                title: 'Welcome to the CasinoCode community!',
                html: 'Let us give you a short introduction to the system so that you can find your way around and get started.',
                showCancelButton: true,
                confirmButtonColor: '#55b24b',
                cancelButtonColor: '#b2504b',
                confirmButtonText: 'Start tour',
                cancelButtonText: 'Cancel',
                allowOutsideClick: false,
            }).then((result) => {
                if (result.value) {
                    // Initialize the tour
                    tour.init();

                    // Start the tour
                    tour.start();
                    tour.goTo(0);
                    tour.restart();
                } else {
                    $.ajax({
                        type: "POST",
                        cache: false,
                        url: "ajax/user_tour_end.php",
                        data: {userid: userid},
                        success: function(msg) {
                        }
                    });
                }
            });
        }

        $(document).on("click",".helper",function() {
            // Start the tour
            tour.start();
            tour.goTo(0);
            tour.restart();
        });

        $(document).on("click",".deleterefund", function(event) {
            var userid = '15610';
            var refundid = $(this).attr("refundid");

            $.ajax({
                type: "POST",
                cache: false,
                url: "ajax/user_delete_refund.php",
                data: {userid: userid, refundid: refundid},
                success: function(msg) {
                    $(".deleterefund[refundid='"+refundid+"']").closest('tr').hide();
                    $(".deleterefund[refundid='"+refundid+"']").closest('tr').next().hide();
                }
            });
        });

        $(document).on("click",".paysafe_get", function(event) {
            var userid = '15610';
            var campaign = 'Christmas';

            $.ajax({
                type: "POST",
                cache: false,
                dataType: "json",
                url: "ajax/user_welcome_offer.php",
                data: {userid: userid, campaign:campaign},
                success: function(msg) {
                    if(msg.status == 'success'){
                        $(".paysafecard-content").empty().html(msg.message)
                    } else {
                        if(msg.message == 'no-paysafecard'){
                            swal({
                                type: 'error',
                                html: true,
                                title: 'Es ist ein Fehler aufgetreten!',
                                html: 'Leider stehen im System momentan keine Paysafe Karten für den Abruf bereit. Wir haben jedoch schon welche nachbestellt. Bitte versuche es einfach Morgen nochmal.',
                                showCancelButton: false,
                                confirmButtonColor: '#55b24b',
                                cancelButtonColor: '#b2504b',
                                confirmButtonText: 'Ok',
                                allowOutsideClick: false,
                            })
                        } else if(msg.message == 'cookie'){
                            swal({
                                type: 'error',
                                html: true,
                                title: 'Es ist ein Fehler aufgetreten!',
                                html: 'Anscheinend hast du bereits eine Paysafe Karte für diese Aktion abgerufen. Die Aktionen stehen jedem Nutzer nur einmal zur Verfügung. Das CasinoCode Team wurde über den versuchten Abruf einer weiteren Karte informiert.',
                                showCancelButton: false,
                                confirmButtonColor: '#55b24b',
                                cancelButtonColor: '#b2504b',
                                confirmButtonText: 'Ok',
                                allowOutsideClick: false,
                            })
                        } else if(msg.message == 'ip-blocked'){
                            swal({
                                type: 'error',
                                html: true,
                                title: 'Es ist ein Fehler aufgetreten!',
                                html: 'Anscheinend hast du bereits eine Paysafe Karte für diese Aktion abgerufen. Die Aktionen stehen jedem Nutzer nur einmal zur Verfügung. Das CasinoCode Team wurde über den versuchten Abruf einer weiteren Karte informiert.',
                                showCancelButton: false,
                                confirmButtonColor: '#55b24b',
                                cancelButtonColor: '#b2504b',
                                confirmButtonText: 'Ok',
                                allowOutsideClick: false,
                            })
                        }  else if(msg.message == 'failure'){
                            swal({
                                type: 'error',
                                html: true,
                                title: 'Es ist ein Fehler aufgetreten!',
                                html: 'Durch einen massiven Missbrauchsversuch durch einzelne oder mehrere Nutzer mussten wir diese Aktion leider einstellen. Gerne kannst du dich aber per Whatsapp bei mir melden. Ich werde dann gucken, dass wir eine Lösung finden und auch du deine Paysafe Karte bekommst.',
                                showCancelButton: false,
                                confirmButtonColor: '#55b24b',
                                cancelButtonColor: '#b2504b',
                                confirmButtonText: 'Ok',
                                allowOutsideClick: false,
                            })
                        }
                    }
                }
            });
        });

        $(document).on("click",".welcome", function(event) {
            var userid 		= '15610';
            var campaign 	= 'Christmas';
            var url			= $(this).attr("dataurl");
            var casinoid	= $(this).attr("dataid");
            window.open(url, '_blank');

            $.ajax({
                type: "POST",
                cache: false,
                url: "ajax/user_welcome_track.php",
                data: {userid: userid, campaign:campaign, url:url, casinoid:casinoid},
                success: function(msg) {

                }
            });
        });

        $(document).on("click",".send_suggestion", function(event) {
            var userid 		= '15610';
            var suggestion 	= $("#text_suggestion").val();
            var firstname 	= 'Asdadsa';
            var lastname 	= 'Fdfg';
            var email	 	= 'fgfg@asd.ru';
            $.ajax({
                type: "POST",
                cache: false,
                url: "ajax/user_send_suggestion.php",
                data: {userid: userid, suggestion:suggestion, firstname:firstname, lastname:lastname, email:email},
                success: function(msg) {
                    $(".response_suggestion").empty();
                    $(".response_suggestion").html('<div class="alert alert-success mb-10" role="alert">Dein Vorschlag wurde eingesendet und du nimmst an der Verlosung teil. Vielen Dank!</div>');
                }
            });
        });

        // $('#languages').flagStrap({
        //     countries: {
        //         "DK": "Dansk",
        //         "DE": "Deutsch",
        //         "EU": "English",
        //         "FR": "Francais",
        //         "IT": "Italiano",
        //         "NL": "Nederlands",
        //         "NO": "Norsk",
        //         "FI": "Suomi",
        //         "SE": "Svenska"
        //     },
        //     labelMargin: "5px",
        //     scrollable: false,
        //     placeholder: false,
        //     scrollableHeight: "350px",
        //     onSelect: function(value, element) {
        //         if(value === "EU"){
        //             $.ajax({
        //                 type: "POST",
        //                 url: "ajax/user_lang_update.php",
        //                 data: {userid: "15610", userlang: "en"},
        //                 success: function(msg) {
        //                     window.open("/en/community/index.php","_self");
        //                 }
        //             });
        //
        //         } else {
        //             $.ajax({
        //                 type: "POST",
        //                 url: "ajax/user_lang_update.php",
        //                 data: {userid: "15610", userlang: value.toLowerCase()},
        //                 success: function(msg) {
        //                     window.open("/"+value.toLowerCase()+"/community/index.php","_self");
        //                 }
        //             });
        //
        //         }
        //     }
        // });
    </script>
@endpush