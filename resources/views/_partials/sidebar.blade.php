

<div class="sidebar-menu-inner">

    <header class="logo-env">

        <!-- logo -->
        <div class="logo">
            <a href="index.html">
                <img src="{{asset('images/admin/logo@2x.png')}}" width="120" alt="" />
            </a>
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse">
            <a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                <i class="entypo-menu"></i>
            </a>
        </div>


        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                <i class="entypo-menu"></i>
            </a>
        </div>

    </header>


    <ul id="main-menu" class="main-menu">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
        <li class="{{ (Request::route()->getName() == 'admin') ? 'active' : '' }}  ">
            <a href="{{route('admin')}}">
                <i class="entypo-gauge"></i>
                Dashboard
            </a>
        </li>

        <li class="has-sub">
            <a href="">
                <i class="entypo-layout"></i>
                <span class="title">Tricks</span>
            </a>
            <ul class="{{  (Request::route()->getName() == 'admin.tricks.index')? 'visible':'' }}">

               <li class="{{ (Request::route()->getName() == 'admin.tricks.index') ? 'active' : '' }}  ">
                   <a href="{{route('admin.tricks.index')}}"> Tricks</a>
                </li>
                <li class="{{ (Request::route()->getName() == 'admin.refunds') ? 'active' : '' }}  ">
                    <a href="{{route('admin.refunds')}}"> Refunds</a>
                </li >

                <li class="{{ (Request::route()->getName() == 'admin.reports') ? 'active' : '' }}  ">
                    <a href="{{route('admin.reports')}}"> Wins Reports</a>
                </li>
                    {{--<li>--}}
                        {{--<a href="{{route('admin.reports.index')}}"> Tricks</a>--}}
                    {{--</li>--}}

            </ul>
        </li>
        <li class="has-sub">
            <a href="">
                <i class="entypo-layout"></i>
                <span class="title">Winnings</span>
            </a>
            <ul {{  (Request::route()->getName() == 'admin.winnings.index')? 'visible':'' }}>

                <li class="{{ (Request::route()->getName() == 'admin.winnings.index') ? 'active' : '' }} opened ">
                    <a href="{{route('admin.winnings.index')}}"> Winnings</a>


                </li>

            </ul>
        </li>
        <li class="has-sub">
            <a href="">
                <i class="entypo-layout"></i>
                <span class="title">Forums</span>
            </a>
            <ul {{  (Request::route()->getName() == 'admin.forums.index')? 'visible':'' }}>

                <li class="{{ (Request::route()->getName() == 'admin.forums.index')? 'active' : '' }}" >
                    <a href="{{route('admin.forums.index')}}"> Forum</a>
                </li>
                <li class="{{ (Request::route()->getName() == 'admin.topics.index')? 'active' : '' }}"  >
                    <a href="{{route('admin.topics.index')}}"> Topics</a>
                </li>
                <li class="{{ (Request::route()->getName() == 'admin.posts.index')? 'active' : '' }}" >
                    <a href="{{route('admin.posts.index')}}"> Posts</a>
                </li>

            </ul>
        </li>

        <li>
            <a href="" target="_blank">
                <i class="entypo-monitor"></i>
                <span class="title">Users</span>
            </a>
            <ul>
                <li  class="{{ (Request::route()->getName() == 'admin.users.index')? 'active' : '' }}">
                    <a href="{{route('admin.users.index')}}">
                        <span class="title">Users</span>
                    </a>
                </li>


            </ul>
        </li>

    </ul>

</div>

