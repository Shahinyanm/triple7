<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.png">

    <title>CasinoCode - Community</title>
    <link rel="alternate" href="https://www.casinocode.net/dk/community/login.php" hreflang="dk" /><link rel="alternate" href="https://www.casinocode.net/de/community/login.php" hreflang="de" /><link rel="alternate" href="https://www.casinocode.net/en/community/login.php" hreflang="en" /><link rel="alternate" href="https://www.casinocode.net/fi/community/login.php" hreflang="fi" /><link rel="alternate" href="https://www.casinocode.net/fr/community/login.php" hreflang="fr" /><link rel="alternate" href="https://www.casinocode.net/nl/community/login.php" hreflang="nl" /><link rel="alternate" href="https://www.casinocode.net/it/community/login.php" hreflang="it" /><link rel="alternate" href="https://www.casinocode.net/no/community/login.php" hreflang="no" /><link rel="alternate" href="https://www.casinocode.net/se/community/login.php" hreflang="se" />
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/master_style.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="{{ route('index') }}"><img src="../images/logo.svg" alt="CasinoCode Logo"></a>
    </div>

    @yield('content')

</div>
<!-- /.login-box -->


<!-- jQuery 3 -->
<script src="{{ asset('js/jquery.min.js') }}"></script>

<!-- popper -->
<script src="{{ asset('js/popper.min.js') }}"></script>

<!-- Bootstrap 4.0-->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>