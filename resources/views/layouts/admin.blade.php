<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <link rel="icon" href="{{asset('images/favicon.ico')}}">

    <title>Neon | Dashboard</title>
    {{--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
    {{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>--}}
    {{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
    <link rel="stylesheet" href="{{asset('js/admin/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/font-icons/entypo/css/entypo.css')}}">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="{{asset('css/admin/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin//neon-core.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/neon-theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/neon-forms.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/custom.css')}}">
    <link rel="stylesheet" href="{{asset('js/admin/daterangepicker/daterangepicker-bs3.css')}}">
    @stack('link')

    <script src="{{asset('js/admin/jquery-1.11.3.min.js')}}"></script>

    {{--<!--[if lt IE 9]><script src="{{asset('js/ie8-responsive-file-warning.js')}}"></script><![endif]-->--}}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @stack('styles')


</head>
<body class="page-body  page-fade">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

    <div class="sidebar-menu">

         @include('_partials.sidebar')

    </div>
    <div class="main-content">
        @include('_partials.header')
        @yield('main')
    </div>

</div>
<!-- Imported styles on this page -->
<link rel="stylesheet" href="{{asset('js/admin/jvectormap/jquery-jvectormap-1.2.2.css')}}">
<link rel="stylesheet" href="{{asset('js/admin/rickshaw/rickshaw.min.css')}}">

<!-- Bottom scripts (common) -->
<script src="{{asset('js/admin/gsap/TweenMax.min.js')}}"></script>
<script src="{{asset('js/admin/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js')}}"></script>
<script src="{{asset('js/admin/bootstrap.js')}}"></script>
<script src="{{asset('js/admin/joinable.js')}}"></script>
<script src="{{asset('js/admin/resizeable.js')}}"></script>
<script src="{{asset('js/admin/neon-api.js')}}"></script>
<script src="{{asset('js/admin/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>


<!-- Imported scripts on this page -->
<script src="{{asset('js/admin/jvectormap/jquery-jvectormap-europe-merc-en.js')}}"></script>
<script src="{{asset('js/admin/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('js/admin/rickshaw/vendor/d3.v3.js')}}"></script>
<script src="{{asset('js/admin/rickshaw/rickshaw.min.js')}}"></script>
<script src="{{asset('js/admin/raphael-min.js')}}"></script>
<script src="{{asset('js/admin/morris.min.js')}}"></script>
<script src="{{asset('js/admin/toastr.js')}}"></script>
<script src="{{asset('js/admin/neon-chat.js')}}"></script>
<script src="{{asset('js/admin/zurb-responsive-tables/responsive-tables.js')}}"></script>
{{--<script src="{{asset('js/admin/datatables/datatables.js')}}"></script>--}}





<!-- JavaScripts initializations and stuff -->
<script src="{{asset('js/admin/neon-custom.js')}}"></script>


<!-- Demo Settings -->
<script src="{{asset('js/admin/neon-demo.js')}}"></script>
@stack('scripts')
</body>
</html>