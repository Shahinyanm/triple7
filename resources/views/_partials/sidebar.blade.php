

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
        <li class="active opened active has-sub">
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
            <ul>
               <li>

                </li>

            </ul>
        </li>
        <li class="has-sub">
            <a href="">
                <i class="entypo-layout"></i>
                <span class="title">Winnings</span>
            </a>
            <ul>

                <li>

                </li>

            </ul>
        </li>

        <li class="has-sub">
            <a href="">
                <i class="entypo-layout"></i>
                <span class="title">Videos</span>
            </a>
            <ul>

                <li>
                    <a href="">
                    </a>
                </li>

            </ul>
        </li>
        <li class="has-sub">
            <a href="">
                <i class="entypo-layout"></i>
                <span class="title">Instructions</span>
            </a>

        </li>
        <li>
            <a href="" target="_blank">
                <i class="entypo-monitor"></i>
                <span class="title">Warranty</span>
            </a>
        </li>
        <li>
            <a href="" target="_blank">
                <i class="entypo-monitor"></i>
                <span class="title">Users</span>
            </a>
            <ul>
                <li>
                    <a href="">
                        <span class="title">Users</span>
                    </a>
                </li>


            </ul>
        </li>

    </ul>

</div>

