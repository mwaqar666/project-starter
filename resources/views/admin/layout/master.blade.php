<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name') }} - @yield('title')</title>

        @yield('meta')
        @stack('before-styles')

        <link rel="stylesheet" href="{{ asset('assets/admin/plugins/bootstrap/css/bootstrap.min.css') }}">

        @yield('page-style')

        <link rel="stylesheet" href="{{ asset('assets/admin/css/style.min.css') }}">

        @stack('after-styles')
    </head>
    <body>
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30">
                    <img class="zmdi-hc-spin" src="{{ asset('assets/admin/images/logo.svg') }}" width="48" height="48" alt="Aero">
                </div>
                <p>Please wait...</p>
            </div>
        </div>

        <div class="overlay"></div>

        @include('admin.layout.navbarright')
        @include('admin.layout.sidebar')
        @include('admin.layout.rightsidebar')

        <section class="content">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>@yield('title')</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard.index') }}">
                                    <i class="zmdi zmdi-home"></i>Aero
                                </a>
                            </li>

                            @hasSection('parentPageTitle')
                                <li class="breadcrumb-item">@yield('parentPageTitle')</li>
                            @endif

                            @hasSection('title')
                                <li class="breadcrumb-item active">@yield('title')</li>
                            @endif
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button">
                            <i class="zmdi zmdi-sort-amount-desc"></i>
                        </button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button">
                            <i class="zmdi zmdi-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>

        @yield('modal')
        @stack('before-scripts')

        <script src="{{ asset('assets/admin/bundles/libscripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/admin/bundles/vendorscripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/admin/bundles/mainscripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/admin/js/themes.js') }}"></script>

        @stack('after-scripts')
        @yield('page-script')
    </body>
</html>
