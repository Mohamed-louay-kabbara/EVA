<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>{{ trans('main_trans.buybas') }}</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="{{ asset('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css') }}" media="screen">
    <style>
        .shoes_price {

            width: 100%;
            float: left;
            font-size: 18pt;
            margin-top: 21px;
        }

    </style>
</head>
<!-- body -->

<body class="main-layout">
    <!-- header section start -->
    <div class="header_section header_main">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo">
                        <a href="#"><img src="{{ asset('images/logo03.png') }}" width="90px" height="90px"></a>
                    </div>
                </div>
                <div class="col-sm-9">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav" style="margin-left: -30px">
                                <a class="nav-item nav-link" style="font-size:20px" href="{{ route('dashboard') }}">{{ trans('main_trans.first') }}</a>
                                {{-- <a class="nav-item nav-link" style="font-size:17px" href="#category">{{ trans('main_trans.second') }}</a>
                                <a class="nav-item nav-link" style="font-size:17px" href="#contont">{{ trans('main_trans.third') }}</a> --}}
                                <a class="nav-item nav-link" style="font-size:20px" href="#b">{{ trans('main_trans.fourthly') }}</a>
                                <div class="btn-group">
                                    <button type="button" style="color:#fff;font-size:15px;font-weight:bold;margin-left:60px;margin-bottom:20px" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden" style="background-color:#fff;font-size:13px"></span>
                                        {{ trans('main_trans.setting') }}
                                    </button>
                                    <ul class="dropdown-menu">
                                        <a href="{{ route('profile.edit') }}" style="font-size:14px;font-weight:bold" class="nav-item nav-link is-submenu-item is-dropdown-submenu-item">
                                            <li>{{ trans('main_trans.profile') }}</li>
                                        </a>
                                        <a href="{{route('opinions.index')}}" style="font-size:14px;font-weight:bold" class="nav-item nav-link is-submenu-item is-dropdown-submenu-item">
                                            <li>{{ trans('main_trans.site_eva') }}</li>
                                        </a>
                                        <a class="nav-item nav-link" style="font-size:14px;font-weight:bold" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                            {{ trans('main_trans.logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </ul>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:15px;font-weight:bold;margin-left:60px;margin-bottom:20px;">
                                        @if (App::getLocale() == 'ar')
                                        {{ LaravelLocalization::getCurrentLocaleName() }}
                                        <img src="{{ asset('SY.png') }}" width="30px" height="30px;" alt="SY">
                                        @else
                                        {{ LaravelLocalization::getCurrentLocaleName() }}
                                        <img src="{{ URL::asset('USA.svg') }}" width="30px" height="30px;" alt="US">
                                        @endif
                                    </button>
                                    <ul class="dropdown-menu">
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                        <a class="nav-item nav-link" style="font-size:15px;font-weight:bold" class="nav-item nav-link is-submenu-item is-dropdown-submenu-item" lang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            <li> {{ $properties['native'] }} </li>
                                        </a>
                                        @endforeach
                                    </ul>
                                </div>
                                <a class="nav-item nav-link last" href="{{route('orders.create')}}" style="margin-bottom:30px"><img src="{{asset('images/shop_icon.png') }}" width="30rem"></a>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- New Arrivals section start -->
    <div class="collection_text">{{ trans('main_trans.buybas') }}</div>
    <div class="layout_padding contact_section" id="contont">
        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-md-nowrap" id="example1">
                        <thead>
                            <th class="wd-17p border-bottom-0" style="font-size:22px;color:#6218a5;font-weight:bold">{{ trans('main_trans.image') }} </th>
                            <th class="wd-17p border-bottom-0" style="font-size:22px;color:#6218a5;font-weight:bold">{{ trans('main_trans.model') }}</th>
                            <th class="wd-17p border-bottom-0" style="font-size:22px;color:#6218a5;font-weight:bold">{{ trans('main_trans.price') }}</th>
                            <th class="wd-17p border-bottom-0" style="font-size:22px;color:#6218a5;font-weight:bold">{{ trans('main_trans.size') }}</th>
                            <th class="wd-17p border-bottom-0" style="font-size:22px;color:#6218a5;font-weight:bold">{{ trans('main_trans.created_at') }}</th>                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($my_order as $m)
                            <tr>
                                <th><img id="im" src="{{ asset('imgs/' . $m->shose->image) }}" style="width:70px;height:70px">
                                <th  style="font-size:17px">{{ $m->shose->model}}</th>
                                <th  style="font-size:17px">{{ $m->shose->price}}</th>
                                <th  style="font-size:17px">{{$m->shose->size}}</th>
                                <th  style="font-size:17px">{{$m->shose->created_at}}</th>
                            </tr>
                            @endforeach
                            <th class="T" style="font-size:25px; color:green">{{ trans('main_trans.final_total') }}$ {{ $total }} </th>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="section_footer">
        <div class="container">
            <div class="mail_section">
                <div class="row">
                    <div class="col-sm-6 col-lg-2">
                        <div>
                            <a href="#"><img src="{{ asset('images/logo01.png') }}" width="85px" height="85px"></a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <a href="tel:011354632">
                            <div class="footer-logo"><img src="{{asset('images/phone-icon.png') }}"><span class="map_text">(+963)011354632</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <a href="mailto:eva@gmail.com">
                            <div class="footer-logo"><img src="{{asset('images/email-icon.png') }}"><span class="map_text">eva@gmail.com</span></div>
                    </div></a>
                    <div class="col-sm-6 col-lg-3">
                        <div class="social_icon">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#ff4e5b" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg></a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#ff4e5b" class="bi bi-twitter" viewBox="0 0 16 16">
                                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                        </svg></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#ff4e5b" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg></a>
                                </li>
                                <li>
                                    <a href="https://www.google.com"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#ff4e5b" class="bi bi-google" viewBox="0 0 16 16">
                                            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                        </svg></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="footer_section_2">
                <div class="row">
                    <div class="col-sm-4 col-lg-2">
                        <h2 class="shop_text" id="b">{{ trans('main_trans.fourthly') }}</h2>
                        <pre>   </pre><br> </h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff4e5b" class="bi bi-brush-fill" viewBox="0 0 16 16">
                            <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04z" />
                        </svg><span class="pet_text" style="margin-bottom:50px">{{ trans('main_trans.fourthly_1') }}</span>
                    </div>
                    <div class="col-sm-4 col-lg-2">
                        <h2 class="shop_text">{{ trans('main_trans.address') }} </h2>
                        <div class="image-icon"><img src="{{asset('images/map-icon.png') }}"><span class="pet_text">{{ trans('main_trans.address_1') }}</span></div>
                    </div>
                    <div class="col-sm-4 col-md-6 col-lg-3">
                        <h2 class="shop_text" style="margin-left:50px">{{ trans('main_trans.Features') }}</h2>
                        <div class="delivery_text">
                            <ul style="margin-left:50px">
                                <div class="image-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff4e5b" class="bi bi-stars" viewBox="0 0 16 16">
                                        <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
                                    </svg>
                                    <li class="pet_text">{{ trans('main_trans.delivery') }}</li>
                                    <div>
                                        <div class="image-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff4e5b" class="bi bi-stars" viewBox="0 0 16 16">
                                                <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
                                            </svg>
                                            <li class="pet_text">{{ trans('main_trans.easy') }}</li>
                                            <div>
                                                <div class="image-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff4e5b" class="bi bi-stars" viewBox="0 0 16 16">
                                                        <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
                                                    </svg>
                                                    <li class="pet_text">{{ trans('main_trans.save') }}</li>
                                                    <div>
                                                        <div class="image-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff4e5b" class="bi bi-stars" viewBox="0 0 16 16">
                                                                <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
                                                            </svg>
                                                            <li class="pet_text">{{ trans('main_trans.speed') }}</li>
                                                            <div>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <h2 class="adderess_text">{{ trans('main_trans.pro') }}</h2>
                        <div class="delivery_text">
                            <ul>
                                <div class="image-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff4e5b" class="bi bi-gem" viewBox="0 0 16 16">
                                        <path d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495 8 13.366l2.532-7.876-5.062.005zm-1.371-.999-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l5.113 6.817-2.192-6.82L1.5 5.5zm7.889 6.817 5.123-6.83-2.928.002-2.195 6.828z" />
                                    </svg>
                                    <li class="pet_text">{{ trans('main_trans.children') }}</li>
                                    <div>
                                        <div class="image-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff4e5b" class="bi bi-gem" viewBox="0 0 16 16">
                                                <path d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495 8 13.366l2.532-7.876-5.062.005zm-1.371-.999-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l5.113 6.817-2.192-6.82L1.5 5.5zm7.889 6.817 5.123-6.83-2.928.002-2.195 6.828z" />
                                            </svg>
                                            <li class="pet_text">{{ trans('main_trans.snek') }}</li>
                                            <div>
                                                <div class="image-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff4e5b" class="bi bi-gem" viewBox="0 0 16 16">
                                                        <path d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495 8 13.366l2.532-7.876-5.062.005zm-1.371-.999-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l5.113 6.817-2.192-6.82L1.5 5.5zm7.889 6.817 5.123-6.83-2.928.002-2.195 6.828z" />
                                                    </svg>
                                                    <li class="pet_text">{{ trans('main_trans.bats') }}</li>
                                                    <div>
                                                        <div class="image-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff4e5b" class="bi bi-gem" viewBox="0 0 16 16">
                                                                <path d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495 8 13.366l2.532-7.876-5.062.005zm-1.371-.999-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l5.113 6.817-2.192-6.82L1.5 5.5zm7.889 6.817 5.123-6.83-2.928.002-2.195 6.828z" />
                                                            </svg>
                                                            <li class="pet_text">{{ trans('main_trans.barges') }}</li>
                                                            <div>
                                                                </li>
                                                                <div>
                                                                    <div class="image-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ff4e5b" class="bi bi-gem" viewBox="0 0 16 16">
                                                                            <path d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495 8 13.366l2.532-7.876-5.062.005zm-1.371-.999-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l5.113 6.817-2.192-6.82L1.5 5.5zm7.889 6.817 5.123-6.83-2.928.002-2.195 6.828z" />
                                                                        </svg>
                                                                        <li class="pet_text">{{ trans('main_trans.Shoes') }}</li>
                                                                        <div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- section footer end -->
    <div class="copyright">2023 .<a href="https://EVA.co">{{trans('main_trans.footer') }}</a></div>

    <!-- Javascript files-->
    <script src="{{asset('js/jquery.min.js') }}"></script>
    <script src="{{asset('js/popper.min.js') }}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{asset('js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{asset('js/custom.js') }}"></script>
    <!-- javascript -->
    <script src="{{asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('https: //cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js') }}" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js') }}" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none"
                , closeEffect: "none"
            });

            $('#myCarousel').carousel({
                interval: false
            });

            $("#myCarousel").on("touchstart", function(event) {

                var yClick = event.originalEvent.touches[0].pageY;
                $(this).one("touchmove", function(event) {

                    var yMove = event.originalEvent.touches[0].pageY;
                    if (Math.floor(yClick - yMove) > 1) {
                        $(".carousel").carousel('next');
                    } else if (Math.floor(yClick - yMove) < -1) {
                        $(".carousel").carousel('prev');
                    }
                });
                $(".carousel").on("touchend", function() {
                    $(this).off("touchmove");
                });
            });
        });

    </script>
</body>
</html>
