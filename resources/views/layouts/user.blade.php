
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('/images/favicon.png')}}">

    <title>CasinoCode by TrioXx - Community</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{asset('css/user/bootstrap.min.css')}}">

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{asset('css/user/bootstrap-extend.css')}}">

    <!-- flags CSS -->
    <link href="{{asset('css/user/flags.css')}}" rel="stylesheet">

    <!-- Bootstrap Tour -->
    <link rel="stylesheet" href="{{asset('css/user/bootstrap-tour.css')}}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/user/master_style.css?v=1')}}">

    <!--alerts CSS -->
    <link href="{{asset('css/user/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">

    <!-- MinimalLite Admin skins -->
    <link rel="stylesheet" href="{{asset('css/user/skin-gold.css?v=1')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition skin-gold sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    @include('_partials.user_header')


        @yield('content')

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <!-- /.content-wrapper -->

   @include('_partials.user_footer')
</div>
<!-- ./wrapper -->


<!-- jQuery 3 -->
<script src="{{asset('js/jquery.min.js')}}"></script>

<!-- popper -->
<script src="{{asset('js/user/popper.min.js')}}"></script>

<!-- Bootstrap 4.0-->
<script src="{{asset('js/user/bootstrap.min.js')}}"></script>

<!-- flags.js - Flags plugin -->
<script src="{{asset('js/user/jquery.flagstrap.min.js')}}"></script>

<!-- SlimScroll -->
<script src="{{asset('js/user/jquery.slimscroll.min.js')}}"></script>

<!-- FastClick -->
<script src="{{asset('js/user/fastclick.js')}}"></script>

<!-- MinimalLite Admin App -->

<!-- Sweet-Alert  -->
<script src="{{asset('js/user/sweetalert2.min.js')}}"></script>

<!-- Bootstrap Tour -->
<script src="{{asset('js/user/bootstrap-tour.js')}}"></script>

<!-- Snow Plugin -->
<script src="{{asset('js/user/snow-plugin.js')}}"></script>

<script>
    $(".snow-canvas").snow();

    function go_to_tricks() {
        document.location.href = 'tricks.blade.php?tour=1';
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
                content: function(){document.location.href = 'tricks.blade.php?tour=1';},
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
        var userid = '15391';
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
        var userid = '15391';
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
        var userid = '15391';
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
        var userid 		= '15391';
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

    $('#languages').flagStrap({
        countries: {
            "DK": "Dansk",
            "DE": "Deutsch",
            "EU": "English",
            "FR": "Francais",
            "IT": "Italiano",
            "NL": "Nederlands",
            "NO": "Norsk",
            "FI": "Suomi",
            "SE": "Svenska"
        },
        labelMargin: "5px",
        scrollable: false,
        placeholder: false,
        scrollableHeight: "350px",
        onSelect: function(value, element) {
            if(value === "EU"){
                $.ajax({
                    type: "POST",
                    url: "ajax/user_lang_update.php",
                    data: {userid: "15391", userlang: "en"},
                    success: function(msg) {
                        window.open("/en/community/index.php","_self");
                    }
                });

            } else {
                $.ajax({
                    type: "POST",
                    url: "ajax/user_lang_update.php",
                    data: {userid: "15391", userlang: value.toLowerCase()},
                    success: function(msg) {
                        window.open("/"+value.toLowerCase()+"/community/index.php","_self");
                    }
                });

            }
        }
    });
</script>

</body>
</html>
