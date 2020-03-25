<!DOCTYPE html>
<html>

<!-- Mirrored from www.nobleui.com/laravel/template/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Mar 2020 13:28:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>NobleUI Laravel Admin Dashboard Template</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="_token" content="P8Y7YrIUH6LSkPBag5pjb6bCyyqhdrNqDsAQHdMW">

    <link rel="shortcut icon" href="favicon.ico">

    <!-- plugin css -->
    <link media="all" type="text/css" rel="stylesheet" href="fonts/feather-font/css/iconfont.css">
    <link media="all" type="text/css" rel="stylesheet" href="plugins/perfect-scrollbar/perfect-scrollbar.css">
    <!-- end plugin css -->

    <link media="all" type="text/css" rel="stylesheet" href="plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css">

    <!-- common css -->
    <link media="all" type="text/css" rel="stylesheet" href="css/app.css">
    <!-- end common css -->


    <!-- Global site tag (gtag.js) - Google Analytics start -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146586338-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-146586338-1');
    </script>
    <!-- Google Analytics end -->

</head>
<body data-base-url="https://www.nobleui.com/laravel/template/light">

<script src="js/spinner.js"></script>

<div class="main-wrapper" id="app">
    <nav class="sidebar">
        <div class="sidebar-header">
            <a href="#" class="sidebar-brand">
                Noble<span>UI</span>
            </a>
            <div class="sidebar-toggler not-active">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="sidebar-body">
            <ul class="nav">
                <li class="nav-item nav-category">Main</li>
                <li class="nav-item active">
                    <a href="https://www.nobleui.com/laravel/template/light" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item nav-category">web apps</li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#email" role="button" aria-expanded="false" aria-controls="email">
                        <i class="link-icon" data-feather="mail"></i>
                        <span class="link-title">Email</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse " id="email">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="email/inbox.html" class="nav-link ">Inbox</a>
                            </li>
                            <li class="nav-item">
                                <a href="email/read.html" class="nav-link ">Read</a>
                            </li>
                            <li class="nav-item">
                                <a href="email/compose.html" class="nav-link ">Compose</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a href="apps/chat.html" class="nav-link">
                        <i class="link-icon" data-feather="message-square"></i>
                        <span class="link-title">Chat</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="apps/calendar.html" class="nav-link">
                        <i class="link-icon" data-feather="calendar"></i>
                        <span class="link-title">Calendar</span>
                    </a>
                </li>
                <li class="nav-item nav-category">Components</li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
                        <i class="link-icon" data-feather="feather"></i>
                        <span class="link-title">UI Kit</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse " id="uiComponents">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="ui-components/alerts.html" class="nav-link ">Alerts</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-components/badges.html" class="nav-link ">Badges</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-components/breadcrumbs.html" class="nav-link ">Breadcrumbs</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-components/buttons.html" class="nav-link ">Buttons</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-components/button-group.html" class="nav-link ">Button group</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-components/cards.html" class="nav-link ">Cards</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-components/collapse.html" class="nav-link ">Collapse</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-components/dropdowns.html" class="nav-link ">Dropdowns</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-components/list-group.html" class="nav-link ">List group</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-components/media-object.html" class="nav-link ">Media object</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-components/modal.html" class="nav-link ">Modal</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-components/navs.html" class="nav-link ">Navs</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-components/navbar.html" class="nav-link ">Navbar</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-components/pagination.html" class="nav-link ">Pagination</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-components/popovers.html" class="nav-link ">Popvers</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-components/progress.html" class="nav-link ">Progress</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-components/scrollbar.html" class="nav-link ">Scrollbar</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-components/scrollspy.html" class="nav-link ">Scrollspy</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-components/spinners.html" class="nav-link ">Spinners</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-components/tabs.html" class="nav-link ">Tabs</a>
                            </li>
                            <li class="nav-item">
                                <a href="ui-components/tooltips.html" class="nav-link ">Tooltips</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#advanced-ui" role="button" aria-expanded="false" aria-controls="advanced-ui">
                        <i class="link-icon" data-feather="anchor"></i>
                        <span class="link-title">Advanced UI</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse " id="advanced-ui">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="advanced-ui/cropper.html" class="nav-link ">Cropper</a>
                            </li>
                            <li class="nav-item">
                                <a href="advanced-ui/owl-carousel.html" class="nav-link ">Owl Carousel</a>
                            </li>
                            <li class="nav-item">
                                <a href="advanced-ui/sweet-alert.html" class="nav-link ">Sweet Alert</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms">
                        <i class="link-icon" data-feather="inbox"></i>
                        <span class="link-title">Forms</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse " id="forms">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="forms/basic-elements.html" class="nav-link ">Basic Elements</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms/advanced-elements.html" class="nav-link ">Advanced Elements</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms/editors.html" class="nav-link ">Editors</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms/wizard.html" class="nav-link ">Wizard</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#charts" role="button" aria-expanded="false" aria-controls="charts">
                        <i class="link-icon" data-feather="pie-chart"></i>
                        <span class="link-title">Charts</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse " id="charts">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="charts/apex.html" class="nav-link ">Apex</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts/chartjs.html" class="nav-link ">ChartJs</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts/flot.html" class="nav-link ">Flot</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts/morrisjs.html" class="nav-link ">MorrisJs</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts/peity.html" class="nav-link ">Peity</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts/sparkline.html" class="nav-link ">Sparkline</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#tables" role="button" aria-expanded="false" aria-controls="tables">
                        <i class="link-icon" data-feather="layout"></i>
                        <span class="link-title">Tables</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse " id="tables">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="tables/basic-tables.html" class="nav-link ">Basic Tables</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables/data-table.html" class="nav-link ">Data Table</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#icons" role="button" aria-expanded="false" aria-controls="icons">
                        <i class="link-icon" data-feather="smile"></i>
                        <span class="link-title">Icons</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse " id="icons">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="icons/feather-icons.html" class="nav-link ">Feather Icons</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons/flag-icons.html" class="nav-link ">Flag Icons</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons/mdi-icons.html" class="nav-link ">Mdi Icons</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item nav-category">Pages</li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#general" role="button" aria-expanded="false" aria-controls="general">
                        <i class="link-icon" data-feather="book"></i>
                        <span class="link-title">Special Pages</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse " id="general">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="general/blank-page.html" class="nav-link ">Blank page</a>
                            </li>
                            <li class="nav-item">
                                <a href="general/faq.html" class="nav-link ">Faq</a>
                            </li>
                            <li class="nav-item">
                                <a href="general/invoice.html" class="nav-link ">Invoice</a>
                            </li>
                            <li class="nav-item">
                                <a href="general/profile.html" class="nav-link ">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="general/pricing.html" class="nav-link ">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a href="general/timeline.html" class="nav-link ">Timeline</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#auth" role="button" aria-expanded="false" aria-controls="auth">
                        <i class="link-icon" data-feather="unlock"></i>
                        <span class="link-title">Authentication</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse " id="auth">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="auth/login.html" class="nav-link ">Login</a>
                            </li>
                            <li class="nav-item">
                                <a href="auth/register.html" class="nav-link ">Register</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#error" role="button" aria-expanded="false" aria-controls="error">
                        <i class="link-icon" data-feather="cloud-off"></i>
                        <span class="link-title">Error</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse " id="error">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="error/404.html" class="nav-link ">404</a>
                            </li>
                            <li class="nav-item">
                                <a href="error/500.html" class="nav-link ">500</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item nav-category">Docs</li>
                <li class="nav-item">
                    <a href="https://www.nobleui.com/laravel/documentation/docs.html" target="_blank" class="nav-link">
                        <i class="link-icon" data-feather="hash"></i>
                        <span class="link-title">Documentation</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
{{--    <nav class="settings-sidebar">--}}
{{--        <div class="sidebar-body">--}}
{{--            <a href="#" class="settings-sidebar-toggler">--}}
{{--                <i data-feather="settings"></i>--}}
{{--            </a>--}}
{{--            <h6 class="text-muted">Sidebar:</h6>--}}
{{--            <div class="form-group border-bottom">--}}
{{--                <div class="form-check form-check-inline">--}}
{{--                    <label class="form-check-label">--}}
{{--                        <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>--}}
{{--                        Light--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="form-check form-check-inline">--}}
{{--                    <label class="form-check-label">--}}
{{--                        <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">--}}
{{--                        Dark--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="theme-wrapper">--}}
{{--                <h6 class="text-muted mb-2">Light Version:</h6>--}}
{{--                <a class="theme-item active" href="index.html">--}}
{{--                    <img src="images/screenshots/light.jpg" alt="light version">--}}
{{--                </a>--}}
{{--                <h6 class="text-muted mb-2">Dark Version:</h6>--}}
{{--                <a class="theme-item" href="https://www.nobleui.com/laravel/template/dark">--}}
{{--                    <img src="images/screenshots/dark.jpg" alt="light version">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>    --}}
    <div class="page-wrapper">
        <nav class="navbar">
            <a href="#" class="sidebar-toggler">
                <i data-feather="menu"></i>
            </a>
            <div class="navbar-content">
                <form class="search-form">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i data-feather="search"></i>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown nav-apps">
                        <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="grid"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="appsDropdown">
                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <p class="mb-0 font-weight-medium">Web Apps</p>
                                <a href="javascript:;" class="text-muted">Edit</a>
                            </div>
                            <div class="dropdown-body">
                                <div class="d-flex align-items-center apps">
                                    <a href="apps/chat.html"><i data-feather="message-square" class="icon-lg"></i><p>Chat</p></a>
                                    <a href="apps/calendar.html"><i data-feather="calendar" class="icon-lg"></i><p>Calendar</p></a>
                                    <a href="email/inbox.html"><i data-feather="mail" class="icon-lg"></i><p>Email</p></a>
                                    <a href="general/profile.html"><i data-feather="instagram" class="icon-lg"></i><p>Profile</p></a>
                                </div>
                            </div>
                            <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                <a href="javascript:;">View all</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown nav-messages">
                        <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="mail"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="messageDropdown">
                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <p class="mb-0 font-weight-medium">9 New Messages</p>
                                <a href="javascript:;" class="text-muted">Clear all</a>
                            </div>
                            <div class="dropdown-body">
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="figure">
                                        <img src="images/faces/face2.jpg" alt="userr">
                                    </div>
                                    <div class="content">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Leonardo Payne</p>
                                            <p class="sub-text text-muted">2 min ago</p>
                                        </div>
                                        <p class="sub-text text-muted">Project status</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="figure">
                                        <img src="images/faces/face3.jpg" alt="userr">
                                    </div>
                                    <div class="content">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Carl Henson</p>
                                            <p class="sub-text text-muted">30 min ago</p>
                                        </div>
                                        <p class="sub-text text-muted">Client meeting</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="figure">
                                        <img src="images/faces/face4.jpg" alt="userr">
                                    </div>
                                    <div class="content">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Jensen Combs</p>
                                            <p class="sub-text text-muted">1 hrs ago</p>
                                        </div>
                                        <p class="sub-text text-muted">Project updates</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="figure">
                                        <img src="images/faces/face5.jpg" alt="userr">
                                    </div>
                                    <div class="content">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Amiah Burton</p>
                                            <p class="sub-text text-muted">2 hrs ago</p>
                                        </div>
                                        <p class="sub-text text-muted">Project deadline</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="figure">
                                        <img src="images/faces/face6.jpg" alt="userr">
                                    </div>
                                    <div class="content">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p>Yaretzi Mayo</p>
                                            <p class="sub-text text-muted">5 hr ago</p>
                                        </div>
                                        <p class="sub-text text-muted">New record</p>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                <a href="javascript:;">View all</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown nav-notifications">
                        <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="bell"></i>
                            <div class="indicator">
                                <div class="circle"></div>
                            </div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                <p class="mb-0 font-weight-medium">6 New Notifications</p>
                                <a href="javascript:;" class="text-muted">Clear all</a>
                            </div>
                            <div class="dropdown-body">
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="icon">
                                        <i data-feather="user-plus"></i>
                                    </div>
                                    <div class="content">
                                        <p>New customer registered</p>
                                        <p class="sub-text text-muted">2 sec ago</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="icon">
                                        <i data-feather="gift"></i>
                                    </div>
                                    <div class="content">
                                        <p>New Order Recieved</p>
                                        <p class="sub-text text-muted">30 min ago</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="icon">
                                        <i data-feather="alert-circle"></i>
                                    </div>
                                    <div class="content">
                                        <p>Server Limit Reached!</p>
                                        <p class="sub-text text-muted">1 hrs ago</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="icon">
                                        <i data-feather="layers"></i>
                                    </div>
                                    <div class="content">
                                        <p>Apps are ready for update</p>
                                        <p class="sub-text text-muted">5 hrs ago</p>
                                    </div>
                                </a>
                                <a href="javascript:;" class="dropdown-item">
                                    <div class="icon">
                                        <i data-feather="download"></i>
                                    </div>
                                    <div class="content">
                                        <p>Download completed</p>
                                        <p class="sub-text text-muted">6 hrs ago</p>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                <a href="javascript:;">View all</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown nav-profile">
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="images/faces/face1.jpg" alt="profile">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="profileDropdown">
                            <div class="dropdown-header d-flex flex-column align-items-center">
                                <div class="figure mb-3">
                                    <img src="images/faces/face1.jpg" alt="">
                                </div>
                                <div class="info text-center">
                                    <p class="name font-weight-bold mb-0">Amiah Burton</p>
                                    <p class="email text-muted mb-3">amiahburton@gmail.com</p>
                                </div>
                            </div>
                            <div class="dropdown-body">
                                <ul class="profile-nav p-0 pt-3">
                                    <li class="nav-item">
                                        <a href="general/profile.html" class="nav-link">
                                            <i data-feather="user"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link">
                                            <i data-feather="edit"></i>
                                            <span>Edit Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link">
                                            <i data-feather="repeat"></i>
                                            <span>Switch User</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('logout') }}" class="nav-link"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
{{--                                            {{ __('Logout') }}--}}
                                            <i data-feather="log-out"></i>
                                            <span>Log Out</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
{{--        <div class="page-content">--}}
{{--            <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">--}}
{{--                <div>--}}
{{--                    <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>--}}
{{--                </div>--}}
{{--                <div class="d-flex align-items-center flex-wrap text-nowrap">--}}
{{--                    <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex" id="dashboardDate">--}}
{{--                        <span class="input-group-addon bg-transparent"><i data-feather="calendar" class=" text-primary"></i></span>--}}
{{--                        <input type="text" class="form-control">--}}
{{--                    </div>--}}
{{--                    <button type="button" class="btn btn-outline-info btn-icon-text mr-2 d-none d-md-block">--}}
{{--                        <i class="btn-icon-prepend" data-feather="download"></i>--}}
{{--                        Import--}}
{{--                    </button>--}}
{{--                    <button type="button" class="btn btn-outline-primary btn-icon-text mr-2 mb-2 mb-md-0">--}}
{{--                        <i class="btn-icon-prepend" data-feather="printer"></i>--}}
{{--                        Print--}}
{{--                    </button>--}}
{{--                    <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">--}}
{{--                        <i class="btn-icon-prepend" data-feather="download-cloud"></i>--}}
{{--                        Download Report--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--                <div class="col-12 col-xl-12 stretch-card">--}}
{{--                    <div class="row flex-grow">--}}
{{--                        <div class="col-md-4 grid-margin stretch-card">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="d-flex justify-content-between align-items-baseline">--}}
{{--                                        <h6 class="card-title mb-0">New Customers</h6>--}}
{{--                                        <div class="dropdown mb-2">--}}
{{--                                            <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                            </button>--}}
{{--                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-6 col-md-12 col-xl-5">--}}
{{--                                            <h3 class="mb-2">3,897</h3>--}}
{{--                                            <div class="d-flex align-items-baseline">--}}
{{--                                                <p class="text-success">--}}
{{--                                                    <span>+3.3%</span>--}}
{{--                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-6 col-md-12 col-xl-7">--}}
{{--                                            <div id="apexChart1" class="mt-md-3 mt-xl-0"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 grid-margin stretch-card">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="d-flex justify-content-between align-items-baseline">--}}
{{--                                        <h6 class="card-title mb-0">New Orders</h6>--}}
{{--                                        <div class="dropdown mb-2">--}}
{{--                                            <button class="btn p-0" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                            </button>--}}
{{--                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-6 col-md-12 col-xl-5">--}}
{{--                                            <h3 class="mb-2">35,084</h3>--}}
{{--                                            <div class="d-flex align-items-baseline">--}}
{{--                                                <p class="text-danger">--}}
{{--                                                    <span>-2.8%</span>--}}
{{--                                                    <i data-feather="arrow-down" class="icon-sm mb-1"></i>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-6 col-md-12 col-xl-7">--}}
{{--                                            <div id="apexChart2" class="mt-md-3 mt-xl-0"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 grid-margin stretch-card">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="d-flex justify-content-between align-items-baseline">--}}
{{--                                        <h6 class="card-title mb-0">Growth</h6>--}}
{{--                                        <div class="dropdown mb-2">--}}
{{--                                            <button class="btn p-0" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                            </button>--}}
{{--                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-6 col-md-12 col-xl-5">--}}
{{--                                            <h3 class="mb-2">89.87%</h3>--}}
{{--                                            <div class="d-flex align-items-baseline">--}}
{{--                                                <p class="text-success">--}}
{{--                                                    <span>+2.8%</span>--}}
{{--                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-6 col-md-12 col-xl-7">--}}
{{--                                            <div id="apexChart3" class="mt-md-3 mt-xl-0"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> <!-- row -->--}}

{{--            <div class="row">--}}
{{--                <div class="col-12 col-xl-12 grid-margin stretch-card">--}}
{{--                    <div class="card overflow-hidden">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">--}}
{{--                                <h6 class="card-title mb-0">Revenue</h6>--}}
{{--                                <div class="dropdown">--}}
{{--                                    <button class="btn p-0" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                    </button>--}}
{{--                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row align-items-start mb-2">--}}
{{--                                <div class="col-md-7">--}}
{{--                                    <p class="text-muted tx-13 mb-3 mb-md-0">Revenue is the income that a business has from its normal business activities, usually from the sale of goods and services to customers.</p>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-5 d-flex justify-content-md-end">--}}
{{--                                    <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">--}}
{{--                                        <button type="button" class="btn btn-outline-primary">Today</button>--}}
{{--                                        <button type="button" class="btn btn-outline-primary d-none d-md-block">Week</button>--}}
{{--                                        <button type="button" class="btn btn-primary">Month</button>--}}
{{--                                        <button type="button" class="btn btn-outline-primary">Year</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="flot-wrapper">--}}
{{--                                <div id="flotChart1" class="flot-chart"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> <!-- row -->--}}

{{--            <div class="row">--}}
{{--                <div class="col-lg-7 col-xl-8 grid-margin stretch-card">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="d-flex justify-content-between align-items-baseline mb-2">--}}
{{--                                <h6 class="card-title mb-0">Monthly sales</h6>--}}
{{--                                <div class="dropdown mb-2">--}}
{{--                                    <button class="btn p-0" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                    </button>--}}
{{--                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p class="text-muted mb-4">Sales are activities related to selling or the number of goods or services sold in a given time period.</p>--}}
{{--                            <div class="monthly-sales-chart-wrapper">--}}
{{--                                <canvas id="monthly-sales-chart"></canvas>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-5 col-xl-4 grid-margin stretch-card">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="d-flex justify-content-between align-items-baseline mb-2">--}}
{{--                                <h6 class="card-title mb-0">Cloud storage</h6>--}}
{{--                                <div class="dropdown mb-2">--}}
{{--                                    <button class="btn p-0" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                    </button>--}}
{{--                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div id="progressbar1" class="mx-auto"></div>--}}
{{--                            <div class="row mt-4 mb-3">--}}
{{--                                <div class="col-6 d-flex justify-content-end">--}}
{{--                                    <div>--}}
{{--                                        <label class="d-flex align-items-center justify-content-end tx-10 text-uppercase font-weight-medium">Total storage <span class="p-1 ml-1 rounded-circle bg-primary-muted"></span></label>--}}
{{--                                        <h5 class="font-weight-bold mb-0 text-right">8TB</h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-6">--}}
{{--                                    <div>--}}
{{--                                        <label class="d-flex align-items-center tx-10 text-uppercase font-weight-medium"><span class="p-1 mr-1 rounded-circle bg-primary"></span> Used storage</label>--}}
{{--                                        <h5 class="font-weight-bold mb-0">6TB</h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <button class="btn btn-primary btn-block">Upgrade storage</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> <!-- row -->--}}

{{--            <div class="row">--}}
{{--                <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="d-flex justify-content-between align-items-baseline mb-2">--}}
{{--                                <h6 class="card-title mb-0">Inbox</h6>--}}
{{--                                <div class="dropdown mb-2">--}}
{{--                                    <button class="btn p-0" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                    </button>--}}
{{--                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex flex-column">--}}
{{--                                <a href="#" class="d-flex align-items-center border-bottom pb-3">--}}
{{--                                    <div class="mr-3">--}}
{{--                                        <img src="images/faces/face2.jpg" class="rounded-circle wd-35" alt="user">--}}
{{--                                    </div>--}}
{{--                                    <div class="w-100">--}}
{{--                                        <div class="d-flex justify-content-between">--}}
{{--                                            <h6 class="text-body mb-2">Leonardo Payne</h6>--}}
{{--                                            <p class="text-muted tx-12">12.30 PM</p>--}}
{{--                                        </div>--}}
{{--                                        <p class="text-muted tx-13">Hey! there I'm available...</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="d-flex align-items-center border-bottom py-3">--}}
{{--                                    <div class="mr-3">--}}
{{--                                        <img src="images/faces/face3.jpg" class="rounded-circle wd-35" alt="user">--}}
{{--                                    </div>--}}
{{--                                    <div class="w-100">--}}
{{--                                        <div class="d-flex justify-content-between">--}}
{{--                                            <h6 class="text-body mb-2">Carl Henson</h6>--}}
{{--                                            <p class="text-muted tx-12">02.14 AM</p>--}}
{{--                                        </div>--}}
{{--                                        <p class="text-muted tx-13">I've finished it! See you so..</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="d-flex align-items-center border-bottom py-3">--}}
{{--                                    <div class="mr-3">--}}
{{--                                        <img src="images/faces/face4.jpg" class="rounded-circle wd-35" alt="user">--}}
{{--                                    </div>--}}
{{--                                    <div class="w-100">--}}
{{--                                        <div class="d-flex justify-content-between">--}}
{{--                                            <h6 class="text-body mb-2">Jensen Combs</h6>--}}
{{--                                            <p class="text-muted tx-12">08.22 PM</p>--}}
{{--                                        </div>--}}
{{--                                        <p class="text-muted tx-13">This template is awesome!</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="d-flex align-items-center border-bottom py-3">--}}
{{--                                    <div class="mr-3">--}}
{{--                                        <img src="images/faces/face5.jpg" class="rounded-circle wd-35" alt="user">--}}
{{--                                    </div>--}}
{{--                                    <div class="w-100">--}}
{{--                                        <div class="d-flex justify-content-between">--}}
{{--                                            <h6 class="text-body mb-2">Amiah Burton</h6>--}}
{{--                                            <p class="text-muted tx-12">05.49 AM</p>--}}
{{--                                        </div>--}}
{{--                                        <p class="text-muted tx-13">Nice to meet you</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="d-flex align-items-center border-bottom py-3">--}}
{{--                                    <div class="mr-3">--}}
{{--                                        <img src="images/faces/face6.jpg" class="rounded-circle wd-35" alt="user">--}}
{{--                                    </div>--}}
{{--                                    <div class="w-100">--}}
{{--                                        <div class="d-flex justify-content-between">--}}
{{--                                            <h6 class="text-body mb-2">Yaretzi Mayo</h6>--}}
{{--                                            <p class="text-muted tx-12">01.19 AM</p>--}}
{{--                                        </div>--}}
{{--                                        <p class="text-muted tx-13">Hey! there I'm available...</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-7 col-xl-8 stretch-card">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="d-flex justify-content-between align-items-baseline mb-2">--}}
{{--                                <h6 class="card-title mb-0">Projects</h6>--}}
{{--                                <div class="dropdown mb-2">--}}
{{--                                    <button class="btn p-0" type="button" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                    </button>--}}
{{--                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="table-responsive">--}}
{{--                                <table class="table table-hover mb-0">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th class="pt-0">#</th>--}}
{{--                                        <th class="pt-0">Project Name</th>--}}
{{--                                        <th class="pt-0">Start Date</th>--}}
{{--                                        <th class="pt-0">Due Date</th>--}}
{{--                                        <th class="pt-0">Status</th>--}}
{{--                                        <th class="pt-0">Assign</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td>1</td>--}}
{{--                                        <td>NobleUI jQuery</td>--}}
{{--                                        <td>01/01/2019</td>--}}
{{--                                        <td>26/04/2019</td>--}}
{{--                                        <td><span class="badge badge-danger">Released</span></td>--}}
{{--                                        <td>Leonardo Payne</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>2</td>--}}
{{--                                        <td>NobleUI Angular</td>--}}
{{--                                        <td>01/01/2019</td>--}}
{{--                                        <td>26/04/2019</td>--}}
{{--                                        <td><span class="badge badge-success">Review</span></td>--}}
{{--                                        <td>Carl Henson</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>3</td>--}}
{{--                                        <td>NobleUI ReactJs</td>--}}
{{--                                        <td>01/05/2019</td>--}}
{{--                                        <td>10/09/2019</td>--}}
{{--                                        <td><span class="badge badge-info-muted">Pending</span></td>--}}
{{--                                        <td>Jensen Combs</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>4</td>--}}
{{--                                        <td>NobleUI VueJs</td>--}}
{{--                                        <td>01/01/2019</td>--}}
{{--                                        <td>31/11/2019</td>--}}
{{--                                        <td><span class="badge badge-warning">Work in Progress</span>--}}
{{--                                        </td>--}}
{{--                                        <td>Amiah Burton</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>5</td>--}}
{{--                                        <td>NobleUI Laravel</td>--}}
{{--                                        <td>01/01/2019</td>--}}
{{--                                        <td>31/12/2019</td>--}}
{{--                                        <td><span class="badge badge-danger-muted text-white">Coming soon</span></td>--}}
{{--                                        <td>Yaretzi Mayo</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>6</td>--}}
{{--                                        <td>NobleUI NodeJs</td>--}}
{{--                                        <td>01/01/2019</td>--}}
{{--                                        <td>31/12/2019</td>--}}
{{--                                        <td><span class="badge badge-primary">Coming soon</span></td>--}}
{{--                                        <td>Carl Henson</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td class="border-bottom">3</td>--}}
{{--                                        <td class="border-bottom">NobleUI EmberJs</td>--}}
{{--                                        <td class="border-bottom">01/05/2019</td>--}}
{{--                                        <td class="border-bottom">10/11/2019</td>--}}
{{--                                        <td class="border-bottom"><span class="badge badge-info-muted">Pending</span></td>--}}
{{--                                        <td class="border-bottom">Jensen Combs</td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> <!-- row -->--}}
{{--        </div>--}}
        <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
            <p class="text-muted text-center text-md-left">Copyright © 2019 <a href="https://www.nobleui.com/" target="_blank">NobleUI</a>. All rights reserved</p>
            <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
        </footer>    </div>
</div>

<!-- base js -->
<script src="js/app.js"></script>
<script src="plugins/feather-icons/feather.min.js"></script>
<script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!-- end base js -->

<!-- plugin js -->
<script src="plugins/chartjs/Chart.min.js"></script>
<script src="plugins/jquery.flot/jquery.flot.js"></script>
<script src="plugins/jquery.flot/jquery.flot.resize.js"></script>
<script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="plugins/apexcharts/apexcharts.min.js"></script>
<script src="plugins/progressbar-js/progressbar.min.js"></script>
<!-- end plugin js -->

<!-- common js -->
<script src="js/template.js"></script>
<!-- end common js -->

<script src="js/dashboard.js"></script>
<script src="js/datepicker.js"></script>
</body>

<!-- Mirrored from www.nobleui.com/laravel/template/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Mar 2020 13:30:30 GMT -->
</html>
