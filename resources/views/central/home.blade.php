<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- Le Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>

        Dashboard &middot; Bootadmin

    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <script type="text/javascript">
        var host = "bootadmin.org";
        if ((host == window.location.host) && (window.location.protocol != "https:"))
            window.location.protocol = "https";
    </script>

    <!-- Le Meta Data -->
    <meta content="Bootadmin" property="og:site_name">
    <meta content="Bootadmin" property="og:title">
    <meta content="website" property="og:type">
    <meta content="Bootadmin is an open source bootstrap admin panel." property="og:description">
    <meta name="keywords" content="bootstrap, admin, theme, panel, administration, material">


    <meta content="/images/logo.png" property="og:image">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@iamshipon1988">
    <meta name="twitter:creator" content="@iamshipon1988">

    <meta name="twitter:title" content="Bootadmin">


    <meta name="twitter:description" content="An opensource bootstrap admin panel.">


    <!-- Le App Banner Data -->
    <meta name="apple-itunes-app" content="app-id=1245521413">
    <!--<meta name="apple-itunes-app" content="app-id=1245521413, affiliate-data=myAffiliateData, app-argument=myURL">-->

    <!-- Le Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Le CSS
    ================================================== -->
    <link rel="stylesheet" href="https://bootadmin.org/style/vendor/library.min.css">
    <link rel="stylesheet" href="https://bootadmin.org/style/vendor/jqueryui-flat/jquery-ui.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


    <link rel="stylesheet" href="https://bootadmin.org/style/core/style.min.css">

    <!-- Le IE Conditionals
    ================================================== -->
    <!--[if lt IE 9]>
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le Javascript Pre-loads
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Le Page Specific Codes
    ================================================== -->


    <!-- Le Favicons
	================================================== -->
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>

<body id="landing" class="sidebar-open">
    <div class="loading">
        <div class="loading-center"><img src="https://bootadmin.org/images/loading/map.gif" alt="Loading" /></div>
    </div>
    <div class="page-container animsition">
        <div id="dashboardPage">


            <!-- Main Menu -->
            <div class="topbar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5 hidden-xs">
                            <div class="logo">
                                <a href="/">
                                    <span class="logo-emblem"><img src="https://bootadmin.org/images/boot.png" alt="BA" /></span>
                                    <span class="logo-full">Bootadmin</span>
                                </a>
                            </div>
                            <a href="#" class="menu-toggle wave-effect">
                                <i class="feather icon-menu"></i>
                            </a>
                        </div>
                        <div class="col-md-7 text-right">
                            <ul>
                                <!-- Profile Menu -->
                                <li class="btn-group user-account">
                                    <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="user-content">
                                            <div class="user-name">{{ Auth::user()->name }}</div>
                                            <div class="user-plan">{{ Auth::user()->email }}</div>
                                        </div>
                                        <div class="avatar">
                                            <img src="https://bootadmin.org/images/demo/user.jpg" alt="profile" />
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="/account/profile" class="animsition-link dropdown-item wave-effect"><i class="feather icon-user"></i> Profile</a></li>
                                        <li><a href="/account/billing" class="animsition-link dropdown-item wave-effect"><i class="feather icon-dollar-sign"></i> Billing</a></li>
                                        <li><a href="/account/settings" class="animsition-link dropdown-item wave-effect"><i class="feather icon-settings"></i> Settings</a></li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <!-- <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link> -->
                                            <li><a href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();" class="animsition-link dropdown-item wave-effect"><i class="feather icon-log-in"></i> Logout</a></li>
                                        </form>
                                    </ul>
                                </li>
                                <!-- Offcanvas Menu -->
                                <li>
                                    <a href="#" class="btn wave-effect offcanvas-toggle"><i class="feather icon-settings"></i></a>
                                </li>
                                <!-- Notification Menu -->
                                <li class="btn-group notification">
                                    <a href="javascript:;" class="btn dropdown-toggle wave-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-bell"><span class="notification-count">27</span></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="#" class="wave-effect">
                                                <span class="avatar">
                                                    <img src="https://bootadmin.org/images/demo/profile.png" alt="Mr. Chu" />
                                                </span>
                                                <span class="name">Jas Gillionaire</span>
                                                <span class="message">Like your post: “Contact Form 7 Multi-Step”</span>
                                                <span class="time">45 min</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="wave-effect">
                                                <span class="avatar">
                                                    <img src="https://bootadmin.org/images/demo/user.jpg" alt="Andrew" />
                                                </span>
                                                <span class="name">Gurinder Singh</span>
                                                <span class="message">Like your post: “Contact Form 7 Multi-Step”</span>
                                                <span class="time">45 min</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="wave-effect">
                                                <span class="avatar">
                                                    <img src="https://bootadmin.org/images/demo/profile.png" alt="Mr. Chu" />
                                                </span>
                                                <span class="name">Andrew the Canadian</span>
                                                <span class="message">Like your post: “Contact Form 7 Multi-Step”</span>
                                                <span class="time">45 min</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="wave-effect">
                                                <span class="avatar">
                                                    <img src="https://bootadmin.org/images/demo/user.jpg" alt="Mr. Chu" />
                                                </span>
                                                <span class="name">Artsy Shohan</span>
                                                <span class="message">Like your post: “Contact Form 7 Multi-Step”</span>
                                                <span class="time">45 min</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="wave-effect">
                                                <span class="avatar">
                                                    <img src="https://bootadmin.org/images/demo/profile.png" alt="Mr. Chu" />
                                                </span>
                                                <span class="name">Sazzad Shammad</span>
                                                <span class="message">Like your post: “Contact Form 7 Multi-Step”</span>
                                                <span class="time">45 min</span>
                                            </a>
                                        </li>
                                        <li><a href="/notification" class="dropdown-item all-notifications wave-effect">See more messages <i class="feather icon-arrow-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="mobile-menu-toggle">
                                    <a href="#" class="menu-toggle wave-effect">
                                        <i class="feather icon-menu"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <aside class="offcanvas-menu">
                <div class="offcanvas-button">
                    <a href="#" class="btn wave-effect offcanvas-toggle font-20"><span aria-hidden="true">&times;</span></a>
                </div>
                <h5 class="offcanvas-title">List Group</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>

                    <h5 class="offcanvas-title">List Group</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Cras justo odio
                                <span class="badge badge-primary badge-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Dapibus ac facilisis in
                                <span class="badge badge-primary badge-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Morbi leo risus
                                <span class="badge badge-primary badge-pill">1</span>
                            </li>
                        </ul>

                        <h5 class="offcanvas-title">List Group Content</h4>
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small>3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    <small>Donec id elit non mi porta.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                </a>
                            </div>
            </aside>



            <!-- Main Menu -->
            <div class="sidebar">
                <div class="logo">
                    <a href="/">
                        <span class="logo-emblem"><img src="https://bootadmin.org/images/boot.png" alt="BA" /></span>
                        <span class="logo-full">Bootadmin</span>
                    </a>
                </div>
                <ul id="sidebarCookie">
                    <li class="spacer"></li>
                    <li class="profile">
                        <span class="profile-image">
                            <img src="https://bootadmin.org/images/demo/user.jpg" alt="profile" />
                        </span>
                        <span class="profile-name">
                            {{ Auth::user()->name }}
                        </span>
                        <span class="profile-info">
                            {{ Auth::user()->email }}
                        </span>
                    </li>
                    <li class="spacer"></li>
                    <li class="title">
                        <i class="feather icon-more-horizontal"></i>
                        <span class="menu-title">Main</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect collapsed wave-effect" data-parent="#sidebarCookie" data-toggle="collapse" href="#navDashboard" aria-expanded="false" aria-controls="page-dashboards">
                            <i class="feather icon-grid"></i>
                            <span class="menu-title">Dashboard</span>
                            <i class="feather icon-chevron-down down-arrow"></i>
                        </a>
                        <div class="collapse" id="navDashboard">
                            <ul class="flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link wave-effect" href="http://bootadmin.org/">
                                        <i class="feather icon-layout"></i>
                                        <span class="menu-title">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wave-effect" href="http://bootadmin.org/">
                                        <i class="feather icon-shopping-bag"></i>
                                        <span class="menu-title">eCommerce</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-darkSidebar wave-effect" href="javascript: void();">
                                        <i class="feather icon-shopping-bag"></i>
                                        <span class="menu-title">Toggle Sidebar Color</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect collapsed" data-parent="#sidebarCookie" data-toggle="collapse" href="#navPageLayouts" aria-expanded="false" aria-controls="page-layouts">
                            <i class="feather icon-sidebar"></i>
                            <span class="menu-title">Page Layouts</span>
                            <i class="feather icon-chevron-down down-arrow"></i>
                        </a>
                        <div class="collapse" id="navPageLayouts">
                            <ul class="flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link wave-effect" href="http://bootadmin.org/">
                                        <i class="feather icon-layout"></i>
                                        <span class="menu-title">Default</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wave-effect" href="http://bootadmin.org/boxed">
                                        <i class="feather icon-bold"></i>
                                        <span class="menu-title">Boxed</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wave-effect" href="http://bootadmin.org/horizontal">
                                        <i class="feather icon-pause"></i>
                                        <span class="menu-title">Horizontal Menu</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wave-effect" href="http://bootadmin.org/boxedhorizontal">
                                        <i class="feather icon-copy"></i>
                                        <span class="menu-title">Boxed &amp; Horizontal</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect collapsed" data-parent="#sidebarCookie" data-toggle="collapse" href="#navElements" aria-expanded="false" aria-controls="page-elements">
                            <i class="feather icon-layout"></i>
                            <span class="menu-title">Elements</span>
                            <i class="feather icon-chevron-down down-arrow"></i>
                        </a>
                        <div class="collapse" id="navElements">
                            <ul class="flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link wave-effect" href="http://bootadmin.org/elements/bootstrap">
                                        <i class="feather icon-bold"></i>
                                        <span class="menu-title">Bootstrap</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wave-effect" href="http://bootadmin.org/elements/gallery">
                                        <i class="feather icon-image"></i>
                                        <span class="menu-title">Gallery</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wave-effect" href="http://bootadmin.org/elements/cards">
                                        <i class="feather icon-credit-card"></i>
                                        <span class="menu-title">Cards</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wave-effect" href="http://bootadmin.org/elements/grid">
                                        <i class="feather icon-grid"></i>
                                        <span class="menu-title">Grid</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="title">
                        <i class="feather icon-more-horizontal"></i>
                        <span class="menu-title">App Features</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect collapsed" data-parent="#sidebarCookie" data-toggle="collapse" href="#navMailbox" aria-expanded="false" aria-controls="page-mailbox">
                            <i class="feather icon-mail"></i>
                            <span class="menu-title">Mailbox</span>
                            <i class="feather icon-chevron-down down-arrow"></i>
                        </a>
                        <div class="collapse" id="navMailbox">
                            <ul class="flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link wave-effect" href="http://bootadmin.org/app/inbox">
                                        <i class="feather icon-inbox"></i>
                                        <span class="menu-title">Inbox</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wave-effect" href="http://bootadmin.org/app/inbox/email">
                                        <i class="feather icon-mail"></i>
                                        <span class="menu-title">Email</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wave-effect" href="http://bootadmin.org/app/inbox/compose">
                                        <i class="feather icon-send"></i>
                                        <span class="menu-title">Compose</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="http://bootadmin.org/app/calendar" class="nav-link wave-effect nav-single">
                            <i class="feather icon-calendar"></i>
                            <span class="menu-title">Calendar</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect collapsed" data-parent="#sidebarCookie" data-toggle="collapse" href="#navProfilebox" aria-expanded="false" aria-controls="page-profilebox">
                            <i class="feather icon-users"></i>
                            <span class="menu-title">Account</span>
                            <i class="feather icon-chevron-down down-arrow"></i>
                        </a>
                        <div class="collapse" id="navProfilebox">
                            <ul class="flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link wave-effect" href="http://bootadmin.org/account/profile">
                                        <i class="feather icon-user"></i>
                                        <span class="menu-title">Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wave-effect" href="http://bootadmin.org/account/billing">
                                        <i class="feather icon-dollar-sign"></i>
                                        <span class="menu-title">Billing</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wave-effect" href="http://bootadmin.org/account/settings">
                                        <i class="feather icon-settings"></i>
                                        <span class="menu-title">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="title">
                        <i class="feather icon-more-horizontal"></i>
                        <span class="menu-title">Misc</span>
                    </li>
                    <li class="nav-item">
                        <a href="http://bootadmin.org/credits" class="nav-link wave-effect nav-single">
                            <i class="feather icon-zap"></i>
                            <span class="menu-title">Credits</span>
                        </a>
                    </li>
                    <li class="spacer"></li>
                    <li class="button-container">
                        <a href="https://github.com/iamshipon1988/bootadmin" class="btn btn-primary display-block"><i class="feather icon-download"></i> Download on Github</a>
                    </li>
                </ul>
            </div>

            <main>
                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="page-title">Dashboard</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <small>Users</small>
                                <h5 class="text-info">3,458</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <!-- column -->
                        <div class="col-sm-12 col-lg-4">
                            <div class="card card-hover">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mr-4">
                                            <small>Wallet Balance</small>
                                            <h4 class="mb-0">$3,567.53</h4>
                                        </div>
                                        <div class="chart ml-auto">
                                            asdfadf
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                        <div class="col-sm-12 col-lg-4">
                            <div class="card card-hover bg-red">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mr-4">
                                            <small>Wallet Balance</small>
                                            <h4 class="mb-0">$3,567.53</h4>
                                        </div>
                                        <div class="chart ml-auto">
                                            asdfadf
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                        <div class="col-sm-12 col-lg-4">
                            <div class="card card-hover bg-green">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mr-4">
                                            <small>Wallet Balance</small>
                                            <h4 class="mb-0">$3,567.53</h4>
                                        </div>
                                        <div class="chart ml-auto">
                                            asdfadf
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- title -->
                                    <div class="d-md-flex align-items-center">
                                        <div>
                                            <h4 class="card-title">Top Selling Products</h4>
                                            <p class="card-subtitle">Overview of Top Selling Items</p>
                                        </div>
                                        <div class="ml-auto">
                                            <div class="dl">
                                                <select class="custom-select">
                                                    <option value="0" selected="">Monthly</option>
                                                    <option value="1">Daily</option>
                                                    <option value="2">Weekly</option>
                                                    <option value="3">Yearly</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- title -->
                                </div>
                                <div class="table-responsive">
                                    <table class="table v-middle">
                                        <thead>
                                            <tr class="bg-light">
                                                <th class="border-top-0">Products</th>
                                                <th class="border-top-0">License</th>
                                                <th class="border-top-0">Support Agent</th>
                                                <th class="border-top-0">Technology</th>
                                                <th class="border-top-0">Tickets</th>
                                                <th class="border-top-0">Sales</th>
                                                <th class="border-top-0">Earnings</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="m-r-10"><a class="btn btn-circle btn-info text-white">EA</a></div>
                                                        <div class="">
                                                            <h4 class="m-b-0 font-16">Elite Admin</h4>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Single Use</td>
                                                <td>John Doe</td>
                                                <td>
                                                    <label class="label label-danger">Angular</label>
                                                </td>
                                                <td>46</td>
                                                <td>356</td>
                                                <td>
                                                    <h5 class="m-b-0">$2850.06</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="m-r-10"><a class="btn btn-circle btn-warning text-white">MA</a></div>
                                                        <div class="">
                                                            <h4 class="m-b-0 font-16">Monster Admin</h4>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Single Use</td>
                                                <td>Venessa Fern</td>
                                                <td>
                                                    <label class="label label-info">Vue Js</label>
                                                </td>
                                                <td>46</td>
                                                <td>356</td>
                                                <td>
                                                    <h5 class="m-b-0">$2850.06</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="m-r-10"><a class="btn btn-circle btn-success text-white">MP</a></div>
                                                        <div class="">
                                                            <h4 class="m-b-0 font-16">Material Pro Admin</h4>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Single Use</td>
                                                <td>John Doe</td>
                                                <td>
                                                    <label class="label label-success">Bootstrap</label>
                                                </td>
                                                <td>46</td>
                                                <td>356</td>
                                                <td>
                                                    <h5 class="m-b-0">$2850.06</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="m-r-10"><a class="btn btn-circle btn-primary text-white">AA</a></div>
                                                        <div class="">
                                                            <h4 class="m-b-0 font-16">Ample Admin</h4>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Single Use</td>
                                                <td>John Doe</td>
                                                <td>
                                                    <label class="label label-purple">React</label>
                                                </td>
                                                <td>46</td>
                                                <td>356</td>
                                                <td>
                                                    <h5 class="m-b-0">$2850.06</h5>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- column -->
                        <div class="col-lg-6">
                            <div class="card card-hover">
                                <div class="card-body">
                                    <h4 class="card-title">Recent Comments</h4>
                                    <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm">
                                        <thead>
                                            <tr class="text-uppercase">
                                                <th class="font-w700">Product</th>
                                                <th class="d-none d-sm-table-cell font-w700">Date</th>
                                                <th class="font-w700">State</th>
                                                <th class="d-none d-sm-table-cell font-w700 text-right" style="width: 120px;">Price</th>
                                                <th class="font-w700 text-center" style="width: 60px;"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="font-w600">iPhone X</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="font-size-sm text-muted">today</span>
                                                </td>
                                                <td>
                                                    <span class="font-w600 text-warning">Pending..</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-right">
                                                    $999,99
                                                </td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="" class="js-tooltip-enabled" data-original-title="Manage">
                                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-w600">MacBook Pro 15"</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="font-size-sm text-muted">today</span>
                                                </td>
                                                <td>
                                                    <span class="font-w600 text-warning">Pending..</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-right">
                                                    $2.299,00
                                                </td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="" class="js-tooltip-enabled" data-original-title="Manage">
                                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-w600">Nvidia GTX 1080 Ti</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="font-size-sm text-muted">today</span>
                                                </td>
                                                <td>
                                                    <span class="font-w600 text-warning">Pending..</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-right">
                                                    $1200,00
                                                </td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="" class="js-tooltip-enabled" data-original-title="Manage">
                                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-w600">Playstation 4 Pro</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="font-size-sm text-muted">today</span>
                                                </td>
                                                <td>
                                                    <span class="font-w600 text-danger">Cancelled</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-right">
                                                    $399,00
                                                </td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="" class="js-tooltip-enabled" data-original-title="Manage">
                                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-w600">Nintendo Switch</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="font-size-sm text-muted">yesterday</span>
                                                </td>
                                                <td>
                                                    <span class="font-w600 text-success">Completed</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-right">
                                                    $349,00
                                                </td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="" class="js-tooltip-enabled" data-original-title="Manage">
                                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-w600">iPhone X</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="font-size-sm text-muted">yesterday</span>
                                                </td>
                                                <td>
                                                    <span class="font-w600 text-success">Completed</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-right">
                                                    $999,00
                                                </td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="" class="js-tooltip-enabled" data-original-title="Manage">
                                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-w600">Echo Dot</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="font-size-sm text-muted">yesterday</span>
                                                </td>
                                                <td>
                                                    <span class="font-w600 text-success">Completed</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-right">
                                                    $39,99
                                                </td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="" class="js-tooltip-enabled" data-original-title="Manage">
                                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-w600">Xbox One X</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell">
                                                    <span class="font-size-sm text-muted">yesterday</span>
                                                </td>
                                                <td>
                                                    <span class="font-w600 text-success">Completed</span>
                                                </td>
                                                <td class="d-none d-sm-table-cell text-right">
                                                    $499,00
                                                </td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="" class="js-tooltip-enabled" data-original-title="Manage">
                                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">File Tree</h4>
                                    <div class="tree">
                                        <ul>
                                            <li><i class="fa fa-folder-open"></i> Project
                                                <ul>
                                                    <li><i class="fa fa-folder-open"></i> Opened Folder <span>- 15kb</span>
                                                        <ul>
                                                            <li><i class="fa fa-folder-open"></i> css
                                                                <ul>
                                                                    <li><i class="fa fa-code"></i> CSS Files <span>- 3kb</span>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <li><i class="fa fa-folder"></i> Folder close <span>- 10kb</span>
                                                            </li>
                                                            <li><i class="fab fa-html5"></i> index.html</li>
                                                            <li><i class="fa fa-picture-o"></i> favicon.ico</li>
                                                        </ul>
                                                    </li>
                                                    <li><i class="fa fa-folder"></i> Folder close <span>- 420kb</span>

                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                        <div class="col-lg-6">
                            <div class="card has-shadow">
                                <div class="card-body border-top">
                                    <h4 class="card-title">Stocks</h4>
                                    <table class="table mb-0">
                                        <tbody>
                                            <tr>
                                                <td>APPL</td>
                                                <td>$ 9,500</td>
                                                <td class="color-green">+ 458</td>
                                            </tr>
                                            <tr>
                                                <td>GOOG</td>
                                                <td>$ 15,425</td>
                                                <td class="color-red">- 1,632</td>
                                            </tr>
                                            <tr>
                                                <td>AMD</td>
                                                <td>$ 11,540</td>
                                                <td class="color-green">+ 8,326</td>
                                            </tr>
                                            <tr>
                                                <td>HGM</td>
                                                <td>$ 15,855</td>
                                                <td class="color-green">+ 11,326</td>
                                            </tr>
                                            <tr>
                                                <td>MKR</td>
                                                <td>$ 18,500</td>
                                                <td class="color-red">- 6,586</td>
                                            </tr>
                                            <tr>
                                                <td>APPL</td>
                                                <td>$ 9,500</td>
                                                <td class="color-green">+ 458</td>
                                            </tr>
                                            <tr>
                                                <td>GOOG</td>
                                                <td>$ 15,425</td>
                                                <td class="color-red">- 1,632</td>
                                            </tr>
                                            <tr>
                                                <td>AMD</td>
                                                <td>$ 11,540</td>
                                                <td class="color-green">+ 8,326</td>
                                            </tr>
                                            <tr>
                                                <td>HGM</td>
                                                <td>$ 15,855</td>
                                                <td class="color-green">+ 11,326</td>
                                            </tr>
                                            <tr>
                                                <td>MKR</td>
                                                <td>$ 18,500</td>
                                                <td class="color-red">- 6,586</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Recent Comments</h4>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Product</th>
                                                <th>Customer</th>
                                                <th>Purchased On</th>
                                                <th>Status</th>
                                                <th>Tracking No#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="https://bootadmin.org/images/icons/lulu/Desktop.png" style="width:50px" alt="iMac">
                                                </td>
                                                <td>iMac</td>
                                                <td>Russell</td>
                                                <td>22/08/2018</td>
                                                <td>
                                                    <span class="badge badge-success font-weight-100">Paid</span>
                                                </td>
                                                <td>#98BC85SD84</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="https://bootadmin.org/images/icons/lulu/Mobile.png" style="width:50px" alt="iPhone">
                                                </td>
                                                <td>iPhone</td>
                                                <td>Carol</td>
                                                <td>15/07/2018</td>
                                                <td>
                                                    <span class="badge badge-warning font-weight-100">Pending</span>
                                                </td>
                                                <td>#98SA3C9SC</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="https://bootadmin.org/images/icons/lulu/Clock.png" style="width:50px" alt="apple_watch">
                                                </td>
                                                <td>Apple Watch</td>
                                                <td>Austin Pena</td>
                                                <td>10/07/2018</td>
                                                <td>
                                                    <span class="badge badge-success font-weight-100">Paid</span>
                                                </td>
                                                <td>#98BC85SD84</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="https://bootadmin.org/images/icons/lulu/Headphones.png" style="width:50px" alt="mac_mouse">
                                                </td>
                                                <td>Headphones</td>
                                                <td>Randy</td>
                                                <td>22/04/2018</td>
                                                <td>
                                                    <span class="badge badge-default font-weight-100">Failed</span>
                                                </td>
                                                <td>#98SA3C9SC</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Footer -->
                <footer>
                    <p>&copy; Bootadmin. All Rights Reserved. <br />Designed and Developed by <a href="https://sazzad.me">Sazzad Hossain</a>.</p>
                </footer>

            </main>
        </div>

    </div>



    <!-- Le Javascript -->
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://bootadmin.org/scripts/vendor/bootstrap.min.js"></script>
    <script src="https://bootadmin.org/scripts/vendor/library.min.js"></script>



    <script src="https://bootadmin.org/scripts/core/main.js"></script>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-104952515-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>

</html>