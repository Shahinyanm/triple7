<noscript>
    <div style="width:100%; background-color: #FD0105; color: #fff; text-align: center; font-size: 16px;">
        This page requires JavaScript for correct display and functionality. Please activate JavaScript in your browser so that you can use it. <a href="https://java.com/de/download/help/enable_browser.xml">Information regarding the activation</a>
    </div>
</noscript>
<header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <b class="logo-mini">
            <span class="light-logo"><img src="{{asset('images/aries-light.png')}}" alt="logo"></span>
        </b>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
		  <img src="{{asset('images/logo.svg')}}" alt="logo" class="light-logo">
	  </span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                {{--<li><div id="languages" class="languages flagstrap" data-selected-country="EU"><select id="flagstrap-oQGEW27e" ><option value="DK">Dansk</option><option value="DE">Deutsch</option><option value="EU" selected="selected">English</option><option value="FR">Francais</option><option value="IT">Italiano</option><option value="NL">Nederlands</option><option value="NO">Norsk</option><option value="FI">Suomi</option><option value="SE">Svenska</option></select></li>--}}
                {{--<li><i class="helper fa fa-question-circle fa-2x"></i></li>--}}

            </ul>
        </div>

    </nav>

    <!-- Header Navbar Right-->
    <nav class="navbar navbar-static-top-right">
        <!-- Sidebar toggle button-->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <button type="button" data-toggle="dropdown"  class="btn btn-default btn-md dropdown-toggle" aria-expanded="false" style="background-color:transparent; color:white">
                    <span class="flagstrap-selected-oQGEW27e"><i class="flagstrap-icon flagstrap-eu" style="margin-right: 5px;"></i>English</span>
                    <span class="caret" style="margin-left: 5px;"></span>
                </button>
                <ul class="dropdown-menu">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode=>$properties)
                        <li><a rel="alternative" data-val="{{$localeCode}}" hrefLang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode,null, [], true)}}"><i class="flagstrap-icon flagstrap-{{$localeCode}}" style="margin-right: 5px;"></i>{{$properties['native']}}</a></li>
                    @endforeach
                </ul>



                <li><i class="helper fa fa-question-circle fa-2x"></i></li>
            </ul>
        </div>

    </nav>
</header>

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">

        <!-- sidebar menu -->
        <ul class="sidebar-menu" data-widget="tree" id="help_navigation">
            <li class="{{ (Request::route()->getName() == 'home') ? 'active' : '' }}" id="help_dashboard">
                <a href="{{route('home')}}">
                    <i class="fa fa-dashboard"></i> <span>Overview</span>
                    <span class="pull-right-container">
	  <i class="fa fa-angle-right pull-right"></i>
	</span>
                </a>
            </li>

            <li class="{{ (Request::route()->getName() == 'user.tricks') ? 'active' : '' }}" id="help_tricks">
                <a href="{{route('user.tricks')}}">
                    <i class="fa fa-gamepad"></i> <span>Tricks</span>
                    <span class="pull-right-container">
	  <i class="fa fa-angle-right pull-right"></i>
	</span>
                </a>
            </li>

            <li  class="{{ (Request::route()->getName() == 'user.winnings') ? 'active' : '' }}" id="help_wins">
                <a href="{{route('user.winnings')}}">
                    <i class="fa fa-trophy"></i> <span>Winnings</span>
                    <span class="pull-right-container">
	  <i class="fa fa-angle-right pull-right"></i>
	</span>
                </a>
            </li>
            <li class="{{ (Request::route()->getName() == 'user.forums.index' || Request::route()->getName() == 'user.forums.show' || Request::route()->getName()== 'user.topics.show') ? 'active' : '' }} " id="help_forum">
                <a href="{{route('user.forums.index')}}">
                    <i class="fa fa-comments"></i> <span>FAQ - Forum</span>
                    <span class="pull-right-container">
	  <i class="fa fa-angle-right pull-right"></i>
	</span>
                </a>
            </li>

            <li  class="{{ (Request::route()->getName() == 'user.settings') ? 'active' : '' }}" id="help_settings">
                <a href="{{route('user.settings')}}">
                    <i class="fa fa-cog"></i> <span>Settings</span>
                    <span class="pull-right-container">
	  <i class="fa fa-angle-right pull-right"></i>
	</span>
                </a>
            </li>





            <li id="help_logout">
                <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                    <i class="fa fa-sign-out"></i> <span>{{ __('Logout') }}</span>
                    <span class="pull-right-container">
	  <i class="fa fa-angle-right pull-right"></i>
	</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>

        </ul>    </section>
</aside>