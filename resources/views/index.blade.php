    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Anonymous group led by TrioXx regularly reveals new software bugs and tricks in online casinos.">
    <meta name="author" content="TrioXx">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="Software bug in online casinos" /> <!-- website name -->
    <meta property="og:site" content="CasinoCode.net" /> <!-- website link -->
    <meta property="og:title" content="CasinoCode by TrioXx - we discover software bugs and tricks in online casinos"/> <!-- title shown in actual shared post -->
    <meta property="og:description" content="Anonymous group led by TrioXx regularly reveals new software bugs and tricks in online casinos." /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="images/screenshot.jpg" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="https://www.CasinoCode.net" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Website Title -->
    <title>@lang('text.main_title')</title>
    <link rel="alternate" href="https://www.casinocode.net/dk/index.php" hreflang="dk" /><link rel="alternate" href="https://www.casinocode.net/de/index.php" hreflang="de" /><link rel="alternate" href="https://www.casinocode.net/en/index.php" hreflang="en" /><link rel="alternate" href="https://www.casinocode.net/fi/index.php" hreflang="fi" /><link rel="alternate" href="https://www.casinocode.net/fr/index.php" hreflang="fr" /><link rel="alternate" href="https://www.casinocode.net/nl/index.php" hreflang="nl" /><link rel="alternate" href="https://www.casinocode.net/it/index.php" hreflang="it" /><link rel="alternate" href="https://www.casinocode.net/no/index.php" hreflang="no" /><link rel="alternate" href="https://www.casinocode.net/se/index.php" hreflang="se" />
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/flags.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">

<!-- Preloader -->
<div class="spinner-wrapper">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>


<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top navbar-custom">

    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand text-logo page-scroll" href="index.html">Cedo</a> -->

    <!-- TrickImage Logo -->
    <a class="navbar-brand image-logo page-scroll" href="index.php"><img src="images/logo.svg" alt="logo"></a>

    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#header">@lang('text.home') <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#video">@lang('text.video')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#wins">@lang('text.winnings')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#manual">@lang('text.instructions')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#warranty">@lang('text.warranty')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">@lang('text.login')</a>
            </li>
            <li class="nav-item">
                <div id="languages" data-selected-country="EU"></div>
            </li>
        </ul>
    </div>
</nav> <!-- end of navbar -->
<!-- end of navbar -->


<!-- Header -->
<header id="header" class="header-vertical-form">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container">
                        <h1 class="header-h1">@lang('text.general_title')</h1>
                        <p class="under-heading">@lang('text.general_text')</p>
                    </div>
                </div>

                <div class="col-md-6 registerform">
                    @guest


                    <!-- Get Quote Form -->
                    <form id="RegisterForm" data-toggle="validator" >
                        <div class="form-group">
                            <select class="form-control-select" id="title" required>
                                <option class="select-option" value="" disabled selected>@lang('text.user_title')</option>
                                <option class="select-option" value="Mr">@lang('text.mr')</option>
                                <option class="select-option" value="Mrs">@lang('text.ms')</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="first_name" placeholder="@lang('text.first_name')" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="last_name" placeholder="@lang('text.last_name')" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="email" placeholder="@lang('text.email')" required>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">@lang('text.join')</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-message">
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                        @endguest
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of header-content -->
</header> <!-- end of header-vertical-form -->
<!-- end of header -->

<!-- About -->
<div id="video" class="video-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-3">@lang('text.video_title')</h2>
                <p class="under-heading text-center mb-5">@lang('text.second_title')</p>
                <p class="under-heading text-center mb-5"></p>
                <div class="embed-responsive embed-responsive-16by9 mx-auto">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/A3ivsGD-Olo?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of video-section -->
<!-- end of about -->

<!-- Description 1 -->
<div id="wins" class="image-slider">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">

                <!-- TrickImage Slider -->
                <div class="swiper-container imageSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" ><a class="popup-link" href="images/win1.jpg" data-effect="fadeIn"><img class="img-fluid" src="images/win1.jpg" alt="description"></a></div>
                        <div class="swiper-slide"><a class="popup-link" href="images/win2.jpg" data-effect="fadeIn"><img class="img-fluid" src="images/win2.jpg" alt="description"></a></div>
                        <div class="swiper-slide"><a class="popup-link" href="images/win3.jpg" data-effect="fadeIn"><img class="img-fluid" src="images/win3.jpg" alt="description"></a></div>
                    </div>

                    <!-- Add Arrows -->
                    <div class="swiper-button-next"><i class="fa fa-chevron-circle-right fa-3x"></i></div>
                    <div class="swiper-button-prev"><i class="fa fa-chevron-circle-left fa-3x"></i></div>
                </div> <!-- end of swiper-container -->
                <!-- end of image slider -->

            </div>

            <div class="col-lg-6">
                <div class="text-container">
                    <h3>@lang('text.second_title')</h3>
                    <table>
                        <tr><td class="icon-cell"><i class="fa fa-check fa-lg"></i></td><td>@lang('text.second_text1')</td></tr>
                        <tr><td class="icon-cell"><i class="fa fa-check fa-lg"></i></td><td>@lang('text.second_text2') </td></tr>
                        <tr><td class="icon-cell"><i class="fa fa-check fa-lg"></i></td><td>@lang('text.second_text3')</td></tr>
                        <tr><td class="icon-cell"><i class="fa fa-check fa-lg"></i></td><td>@lang('text.second_text4')</td></tr>
                    </table>
                </div> <!-- end of text-container -->
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of image-slider -->
<!-- end of description 1 -->

<!-- Approval -->
<div id="manual" class="accordion">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-3">@lang('text.instructions_title')</h2>
                <p class="under-heading text-center mb-5">@lang('text.instructions_text')</p>

                <!-- Accordion -->
                <div id="detailsAccordion" data-children=".item">
                    <div class="item">
                        <a data-toggle="collapse" data-parent="#detailsAccordion" href="#detailsAccordion1" aria-expanded="true">
                            <span class="circle-numbering">1</span><span class="accordion-title mb-1">@lang('text.instructions_step1_title')</span>
                        </a>
                        <div id="detailsAccordion1" class="collapse show" role="tabpanel">
                            <p class="mb-0 accordion-body">
                                @lang('text.instructions_step1_text') </p>
                        </div>
                    </div>
                    <div class="item">
                        <a data-toggle="collapse" data-parent="#detailsAccordion" href="#detailsAccordion2" aria-expanded="false">
                            <span class="circle-numbering">2</span><span class="accordion-title mb-1">@lang('text.instructions_step2_title')</span>
                        </a>
                        <div id="detailsAccordion2" class="collapse" role="tabpanel">
                            <p class="mb-0 accordion-body">
                                @lang('text.instructions_step2_text') </p>
                        </div>
                    </div>
                    <div class="item">
                        <a data-toggle="collapse" data-parent="#detailsAccordion" href="#detailsAccordion3" aria-expanded="false">
                            <span class="circle-numbering">3</span><span class="accordion-title mb-1">@lang('text.instructions_step3_title')</span>
                        </a>
                        <div id="detailsAccordion3" class="collapse" role="tabpanel">
                            <p class="mb-0 accordion-body">
                                @lang('text.instructions_step3_text')                                </p>
                        </div>
                    </div>
                    <div class="item text-center">
                        <a class="btn btn-dark page-scroll" href="#header">@lang('text.join_now')</a>
                    </div>
                </div> <!-- end of detailsAccordion -->
                <!-- end of accordion -->

            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of accordion -->
<!-- end of approval -->

<div id="warranty" class="map-and-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-3">@lang('text.warranty_title')</h2>
                <p class="under-heading text-justify">@lang('text.warranty_text')</p>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div>

<!-- About -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="col-xs-12 col-lg-12 text-center">
                    <img class="card-image mb-2 embed-responsive" src="images/trioxx.png" alt="TrioXx">
                </div>
            </div>
            <div class="col-md-7">
                <p class="under-heading text-justify">@lang('text.greetings')</p>
                <p class="under-heading text-justify">@lang('text.king_regards')<br><img src="images/sign.svg" alt=""/></p>
            </div>
        </div> <!-- enf of row -->
    </div> <!-- end of about -->
</div> <!-- end of about-basic -->
<!-- end of about -->

<!-- Copyright -->
<div class="copyright-basic">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center">Copyright © Triple7 - <a class="underline" href="#ModalImprint" data-toggle="modal" data-target="#ModalImprint">Imprint</a> | <a class="underline" href="#ModalDataPrivacy" data-toggle="modal" data-target="#ModalDataPrivacy">Data Privacy</a> | <a class="underline" href="#ModalAffiliate" data-toggle="modal" data-target="#ModalAffiliate">Affiliate</a></p>
                <p class="text-center">
                    <a class="underline" href="https://www.triple7.co/dk/" title="CasinoCode - Dansk">CasinoCode - Dansk</a> |
                    <a class="underline" href="https://www.triple7.co/de/" title="CasinoCode - Deutsch">CasinoCode - Deutsch</a> |
                    <a class="underline" href="https://www.triple7.co/en/" title="CasinoCode - English">CasinoCode - English</a> |
                    <a class="underline" href="https://www.triple7.co/fr/" title="CasinoCode - Francais">CasinoCode - Francais</a> |
                    <a class="underline" href="https://www.triple7.co/it/" title="CasinoCode - Italiano">CasinoCode - Italiano</a> |
                    <a class="underline" href="https://www.triple7.co/nl/" title="CasinoCode - Nederlands">CasinoCode - Nederlands</a> |
                    <a class="underline" href="https://www.triple7.co/no/" title="CasinoCode - Norsk">CasinoCode - Norsk</a> |
                    <a class="underline" href="https://www.triple7.co/fi/" title="CasinoCode - Suomi">CasinoCode - Suomi</a> |
                    <a class="underline" href="https://www.triple7.co/se/" title="CasinoCode - Svenska">CasinoCode - Svenska</a> |
                    <a class="underline" href="https://www.triple7.co/" title="CasinoCode">CasinoCode</a> |
                    <a class="underline" href="https://www.triple7.co/" title="Casino Code">Casino Code</a> |
                    <a class="underline" href="https://www.triple7.co/" title="Casino Bonus">Casino Bonus</a> |
                    <a class="underline" href="https://www.triple7.co/" title="Casino Freespins">Casino Freespins</a>
                </p>
                <p class="text-center small">@lang('text.footer_text')</p>
            </div>
        </div> <!-- enf of row -->
    </div> <!-- end of container -->
</div> <!-- end of copyright-basic -->
<!-- end of copyright -->

<div class="modal fade" id="ModalAffiliate" tabindex="-1" role="dialog" aria-labelledby="ModalAffiliateCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalAffiliateLongTitle">Affiliate</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <strong>Become an affiliate and earn money promoting the CasinoCode</strong><br>
                <br>
                <strong>Just what is an affiliate program?</strong><br>
                In layman’s terms, it’s a partnership between you and a merchant… in this case, us. Lets assume you have a rocking website that casino players visit, and you refer those players to  CasinoCode.net by placing our links, banners and adverts on your website. Well for doing that, we’ll PAY YOU a percentage of the commission we make from those players or a fixed CPA. Its an absolutely fantastic way for you to make lots of money, and us to make new users – it’s WIN-WIN!
                <br><br>
                <strong>Why should I join?</strong><br>
                Did we mention you’ll make loads of money? Its also absolutely free and adds great value to your website with minimal effort.
                <br><br>
                <strong>How do I sign up as an affiliate?</strong><br>
                Simply write us an email <strong><a href="mailto:info@casinocode.net">info@CasinoCode.net</a></strong>
                <br><br>
                <strong>Will it cost anything to join?</strong><br>
                It’s absolutely free and you’ll have all the support and material you need to get started!
                <br><br>
                <strong>When do I get paid?</strong><br>
                CasinoCode transfers your commission to your selected payment method every month without delay.
                <br><br>
                <strong>How do I get paid?</strong><br>
                Your commission is transferred to the payment method you selected upon sign up, monthly.
                At the moment are avaible: PayPal, Bitcoin and WesternUnion (costs are deducted from the commission)

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalImprint" tabindex="-1" role="dialog" aria-labelledby="ModalImprintCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <strong>CasinoCode OOO</strong><br>
                Akademika Koroleva 12, 127427 Moskva, Russia<br>
                info@triple7.co<br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" id="ModalDataPrivacy" tabindex="-1" role="dialog" aria-labelledby="ModalDataPrivacyCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalDataPrivacyLongTitle">Data Privacy</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                We pledge to meet fully, and where possible exceed, internationally recognized standards of personal data privacy protection. CasinoCode.net may change the terms of this policy from time to time. You should check the page to make sure you are agree with the terms.
                <br><br>
                <strong>We may collect the following information:</strong><br>
                Your browsing data obtained through the use of cookies;
                The email address you voluntarily provide us by opting in to our mailing list.
                What We Do with the Information We Gather:
                We analyze the information we gather to learn more about how CasinoCode.net visitors use the site and
                what content they prefer.
                <br><br>
                We may use the information to analyze activity and determine preferences of CasinoCode.net visitors from
                a particular location as determined by IP address. At the same time, we encourage the use TOR or a
                proxy as a method for users to opt-out of this form of data collection.
                <br><br>
                If you provide us your salutation, firstname, lastname, email and opt-in, we may send you newsletters and emails about other
                organizations, events, products or other information which we think you may find interesting using the
                email address which you have provide.
                <br><br>
                <strong>Security</strong><br>
                We are committed to ensuring that your information is secure. In order to prevent unauthorized access or disclosure, we have put in place suitable physical, electronic and managerial procedures to safeguard and secure the information we collect online.
                <br><br>
                <strong>How we use cookies</strong><br>
                We use traffic log cookies to identify which pages are being used. This helps us analyze data about web page traffic and improve our website in order to tailor it to customer needs. We only use this information for statistical analysis purposes and then the data is removed from the system. Cookies help us provide you with a better website, by enabling us to monitor which pages users find useful and which ones they do not. A cookie in no way gives us access to your computer or any information about you, other than the data you choose to share with us. You can choose to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. This may prevent you from taking full advantage of the website.
                <br><br>
                <strong>Links to other websites</strong><br>
                Our website may contain links to other websites of interest. However, once you have used these links to leave our site, you should note that we do not have any control over that other website. Therefore, we cannot be responsible for the protection and privacy of any information which you provide whilst visiting such sites and such sites are not governed by this privacy statement. You should exercise caution and look at the privacy statement applicable to the website in question.
                <br><br>
                <strong>Controlling your information</strong><br>
                The only personal information we presently collect is your salutation, firstname, lastname, email address should you choose to provide it for our mailing list. You may choose to restrict the our use of your mailing list by unsubscribing.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Scripts -->
<script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
<script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
<script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
<script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
<script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
<script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="js/jquery.flagstrap.min.js"></script> <!-- flags.js - Flags plugin -->
<script src="js/scripts.js"></script> <!-- Custom scripts -->

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    const url='{{url('')}}'
    var pathArray = window.location.pathname.split( '/' );
    if(pathArray[1] =='en' || pathArray[1]=='' ){
        $('#languages').data('selected-country', 'EU')

    }else{

        $('#languages').data('selected-country', pathArray[1].toUpperCase())
    }

    $("#RegisterForm").validator().on("submit", function(event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formError();
            submitMSG(false, "Please fill in all fields!");
        } else {
            // everything looks good!
            event.preventDefault();
            submitForm();
        }
    });

    function submitForm() {

        var data  = {
            first_name: $("#first_name").val(),
            last_name: $("#last_name").val(),
            email: $("#email").val(),
            title: $("#title").val(),
        };

        // console.log(data);

        var refid 	= "100";
        var source 	= "";
        var itag 	= "";
        var itag1 	= "";
        var itag2 	= "";

        var rdns 		= "46.70.12.54";
        var os_system 	= "Windows";
        var browser 	= "Google Chrome";
        var mobil 		= "os";
        var country 	= "AM";
        var city 		= "";
        var org 		= "Armentel CJSC . Armenia Telephone Company";
        var isp 		= "VEON Armenia CJSC";

        var country_check = "0";

        if(country_check === "0"){
            $.ajax({
                type: "POST",
                url: "/register",
                dataType: "json",
                cache: false,
                async: true,
                data: data,
                success: function(response) {
                    formSuccess(response.token);
                }
            })
        } else {
            countryError();
        }

        {{--window.location.href='{{route('home')}}'--}}
    }

    function countryError(){
        $("#RegisterForm").hide();
        $(".registerform").html('<div class="registercheck"><div class="text-center"><i class="fa fa-spinner fa-spin animated fa-4x gold"></i></div><div class="text-center" style="margin-top:10px;"><h2>Your registration<br>is being verified...</h2></div></div>');

        setTimeout(function(){
            $(".registercheck").empty();
            $(".registerform").html('<div class="registercheck"><div class="text-center"><i class="fa fa-thumbs-down fa-4x gold tada animated"></i></div><div class="text-center" style="margin-top:10px;"><h2>Your registration was rejected!</h2><br></div></div>');
        }, 3000);
    }

    function formSuccess(token) {
        $("#RegisterForm").hide();
        $(".registerform").html('<div class="registercheck"><div class="text-center"><i class="fa fa-spinner fa-spin animated fa-4x gold"></i></div><div class="text-center" style="margin-top:10px;"><h2>Your registration<br>is being verified...</h2></div></div>');

        setTimeout(function(){
            $(".registercheck").empty();
            $(".registerform").html('<div class="registercheck"><div class="text-center"><i class="fa fa-thumbs-up fa-4x gold tada animated"></i></div><div class="text-center" style="margin-top:10px;"><h2>Your registration was successful !</h2><br>We have sent your access data to your email address. With this, you can log in to our community. You are now be automatically logged in <i class="fa fa-spinner fa-spin animated"></i></div></div>');

            setTimeout(function(){
                window.location.href = url+'/home';
            }, 1000);
        }, 1000);



    }

    function formError() {
        $("#RegisterForm").removeClass().addClass('').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass();
        });
    }

    function submitMSG(valid, msg) {
        if (valid) {
            var msgClasses = "h3 text-center tada animated";
        } else {
            var msgClasses = "h3 text-center error shake animated";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }


    $("#title").change(function(){
        $("#msgSubmit").empty();
    });

    $("#first_name").change(function(){
        $("#msgSubmit").empty();
    });

    $("#last_name").change(function(){
        $("#msgSubmit").empty();
    });

    $("#email").change(function(){
        $("#msgSubmit").empty();
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
        labelMargin: "10px",
        scrollable: false,
        placeholder: false,
        scrollableHeight: "350px",
        onSelect: function(value, element) {
            if(value === "EU"){

                window.open("/en","_self")
            } else {
                window.open("/"+value.toLowerCase() ,"_self");
            }



        }
    });
</script>

</body>
</html>