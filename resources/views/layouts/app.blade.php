<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend-min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/customize.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.2/css/all.css" integrity="sha384-fZCoUih8XsaUZnNDOiLqnby1tMJ0sE7oBbNk2Xxf5x8Z4SvNQ9j83vFMa/erbVrV" crossorigin="anonymous"/>
</head>
<body class="color-light">
    <body class="color-light">
        <div class="wrapper">
            <div class="iq-sidebar sidebar-default">
                <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
                    <a href="https://sellclonemmo.com/" class="header-logo">
                        <img src="https://sellclonemmo.com/assets/storage/images/logo_dark_8H0.png"
                            class="img-fluid rounded-normal light-logo" alt="logo">
                        <img src="https://sellclonemmo.com/assets/storage/images/logo_dark_8H0.png"
                            class="img-fluid rounded-normal d-none sidebar-light-img" alt="logo">
    
                    </a>
                    <div class="side-menu-bt-sidebar-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-light wrapper-menu" width="30" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="data-scrollbar" data-scroll="1" data-scrollbar="true" tabindex="-1"
                    style="overflow: hidden; outline: none;">
                    <div class="scroll-content">
                        <nav class="iq-sidebar-menu">
                            <ul id="iq-sidebar-toggle" class="side-menu">
                                <li class="sidebar-layout">
                                    <a href="#" class="svg-icon dropdown-toggle" id="dropdownMenuButton2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select Language:
                                        <span class="ml-2">
                                            <b>Vietnamese</b>
                                        </span>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <div class="card shadow-none m-0 border-0">
                                            <div class=" p-0 ">
                                                <ul class="dropdown-menu-1 list-group list-group-flush">
                                                    <li onclick="changeLanguage(8)"
                                                        class="dropdown-item-1 list-group-item px-2"><a class="p-0" href="#"
                                                            style="color: #8f9fbc;"><img
                                                                src="https://sellclonemmo.com/assets/storage/flags/flag_Vietnamese.png"
                                                                alt="img-flaf" class="img-fluid mr-2"
                                                                style="width: 30px;height: 20px;min-width: 15px;">Vietnamese</a>
                                                    </li>
                                                    <li onclick="changeLanguage(16)"
                                                        class="dropdown-item-1 list-group-item px-2"><a class="p-0" href="#"
                                                            style="color: #8f9fbc;"><img
                                                                src="https://sellclonemmo.com/assets/storage/flags/flag_English.png"
                                                                alt="img-flaf" class="img-fluid mr-2"
                                                                style="width: 30px;height: 20px;min-width: 15px;">English</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="sidebar-layout">
                                    <a href="#" class="svg-icon dropdown-toggle" id="dropdownMenuButton2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select Currency:
                                        <span class="ml-2"><b>VND</b></span>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <div class="card shadow-none m-0 border-0">
                                            <div class=" p-0 ">
                                                <ul class="dropdown-menu-1 list-group list-group-flush">
                                                    <li onclick="changeCurrency(1)"
                                                        class="dropdown-item-1 list-group-item px-2"><a class="p-0" href="#"
                                                            style="color: #8f9fbc;">VND </a>
                                                    </li>
                                                    <li onclick="changeCurrency(2)"
                                                        class="dropdown-item-1 list-group-item px-2"><a class="p-0" href="#"
                                                            style="color: #8f9fbc;">USD </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="px-3 pt-3 pb-2 ">
                                    <span class="text-uppercase small font-weight-bold">Số Dư <span
                                            style="color: yellow;">0đ</span> - Giảm: <span style="color: red;">0%</span>
                                    </span>
                                </li>
    
                                <li class=" sidebar-layout">
                                    <a href="{{ url('/home') }}" class="svg-icon ">
                                        <i class="fas fa-shopping-cart"></i>
                                        <span class="ml-2">Mua Clone</span>
                                    </a>
                                </li>
                                <li class=" sidebar-layout">
                                    <a href="{{ url('/client/orders') }}" class="svg-icon ">
                                        <i class="fas fa-history"></i>
                                        <span class="ml-2">Đơn Hàng</span>
                                    </a>
                                </li>
                                <li class=" sidebar-layout">
                                    <a href="{{ url('/client/top-money') }}" class="svg-icon ">
                                        <i class="fas fa-trophy"></i>
                                        <span class="ml-2">Top Nạp Tiền</span>
                                    </a>
                                </li>
                                <li class="px-3 pt-3 pb-2 ">
                                    <span class="text-uppercase small font-weight-bold">Banking</span>
                                </li>
                                <li class=" sidebar-layout">
                                    <a href="{{ url('/client/recharge') }}" class="svg-icon ">
                                        <i class="fas fa-university"></i>
                                        <span class="ml-2">Nạp Tiền</span>
                                    </a>
                                </li>
                                <li class=" sidebar-layout">
                                    <a href="{{ url('/client/invoices') }}" class="svg-icon ">
                                        <i class="fas fa-file-invoice"></i>
                                        <span class="ml-2">Hoá Đơn Nạp</span>
                                    </a>
                                </li>
                                <li class="px-3 pt-3 pb-2 ">
                                    <span class="text-uppercase small font-weight-bold">Hỗ Trợ</span>
                                </li>
                                <li class=" sidebar-layout">
                                    <a href="{{ url('/client/contact') }}" class="svg-icon ">
                                        <i class="fas fa-address-book"></i>
                                        <span class="ml-2">Liên Hệ</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="pt-5 pb-5"></div>
                    </div>
                    <div class="scrollbar-track scrollbar-track-x" style="display: none;">
                        <div class="scrollbar-thumb scrollbar-thumb-x"
                            style="width: 260px; transform: translate3d(0px, 0px, 0px);"></div>
                    </div>
                    <div class="scrollbar-track scrollbar-track-y" style="display: none;">
                        <div class="scrollbar-thumb scrollbar-thumb-y"
                            style="height: 947px; transform: translate3d(0px, 0px, 0px);"></div>
                    </div>
                </div>
            </div>
            <div class="iq-top-navbar">
                <div class="iq-navbar-custom">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <div class="side-menu-bt-sidebar">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary wrapper-menu" width="30"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                            <span class="badge badge2 border border-primary text-primary"><i
                                    class="fas fa-wallet mr-1"></i>Ví:
                                <b>0đ</b></span>
                            <a href="https://sellclonemmo.com/client/login"
                                class="badge border badge2 border-danger text-danger"><i
                                    class="fas fa-sign-in-alt mr-1"></i><b>Đăng Nhập</b></a>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="change-mode">
                                <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                                    <div class="custom-switch-inner">
                                        <p class="mb-0"> </p>
                                        <input type="checkbox" class="custom-control-input" id="dark-mode"
                                            data-active="true">
                                        <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                            <span class="switch-icon-right">
                                                <svg xmlns="http://www.w3.org/2000/svg" id="h-moon" height="20" width="20"
                                                    class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span class="switch-icon-left">
                                                <svg xmlns="http://www.w3.org/2000/svg" id="h-sun" height="20" width="20"
                                                    class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-label="Toggle navigation">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="30" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16m-7 6h7"></path>
                                </svg>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                    <li class="nav-item nav-icon dropdown">
                                        <a href="#" class="search-toggle dropdown-toggle" id="notification-dropdown"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                class="h-6 w-6 text-secondary" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                                </path>
                                            </svg>
                                        </a>
                                        <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="notification-dropdown">
                                            <div class="card shadow-none m-0 border-0">
                                                <div class="p-3 card-header-border">
                                                    <h6 class="text-center">
                                                        Notifications </h6>
                                                </div>
                                                <div class="card-body overflow-auto card-header-border p-0 card-body-list"
                                                    style="max-height: 500px;">
                                                    <ul class="dropdown-menu-1 overflow-auto list-style-1 mb-0">
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item nav-icon dropdown">
                                        <a href="#" class="nav-item nav-icon dropdown-toggle pr-0 search-toggle"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <img src="https://sellclonemmo.com/public/datum/assets/images/user/1.jpg"
                                                class="img-fluid avatar-rounded" alt="user">
                                            <span class="mb-0 ml-2 user-name">Bạn chưa đăng nhập</span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <li class="dropdown-item d-flex ">
                                                <a href="https://sellclonemmo.com/client/login">Đăng Nhập</a>
                                            </li>
                                            <li class="dropdown-item d-flex ">
                                                <a href="https://sellclonemmo.com/client/register">Đăng Ký</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <script>
                function changeLanguage(id) {
                    $.ajax({
                        url: "https://sellclonemmo.com/ajaxs/client/changeLanguage.php",
                        method: "POST",
                        dataType: "JSON",
                        data: {
                            id: id
                        },
                        success: function (respone) {
                            if (respone.status == 'success') {
                                cuteToast({
                                    type: "success",
                                    message: respone.msg,
                                    timer: 5000
                                });
                                location.reload();
                            } else {
                                cuteAlert({
                                    type: "error",
                                    title: "Error",
                                    message: respone.msg,
                                    buttonText: "Okay"
                                });
                            }
                        },
                        error: function () {
                            alert(html(response));
                            history.back();
                        }
                    });
                }
    
                function changeLanguage(id) {
                    $.ajax({
                        url: "https://sellclonemmo.com/ajaxs/client/changeLanguage.php",
                        method: "POST",
                        dataType: "JSON",
                        data: {
                            id: id
                        },
                        success: function (respone) {
                            if (respone.status == 'success') {
                                cuteToast({
                                    type: "success",
                                    message: respone.msg,
                                    timer: 5000
                                });
                                location.reload();
                            } else {
                                cuteAlert({
                                    type: "error",
                                    title: "Error",
                                    message: respone.msg,
                                    buttonText: "Okay"
                                });
                            }
                        },
                        error: function () {
                            alert(html(response));
                            history.back();
                        }
                    });
                }
            </script>
            @yield('content')
        </div>
    </body>
</body>
</html>
