<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2">
    <!-- <link rel="icon" href="./imgs/head-logo.png" type="image/x-icon"> -->
    <!-- <link rel="icon" type="image/fav-icon" href="/img/logokvsselect 1.png"> -->
    <title>KVS Admin | @yield('title')</title>
    <!-- <link rel="icon" type="image/png" href="img/favicon.png"> -->
    @include('admin.include.masterCss')
</head>

<body class="crm_body_bg">
    <section>
        @include('admin.include.sidebar')
    </section>

    <section class="main_content dashboard_part large_header_bg">
        <div class="container-fluid g-0">
            @include('admin.include.header')
        </div>
        <div class="main_content_iner ">
            @yield('content')
        </div>
        @include('admin.include.footer')
    </section>

    <section>
        </section>
        @include('admin.include.scripts')
        @yield('scripts')
</body>


</html>