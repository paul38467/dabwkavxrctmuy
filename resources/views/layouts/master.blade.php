<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/plugin/bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <!-- Font Awesome 5.3.1 Our project just needs Font Awesome Brands + Regular + Solid -->
    <script defer src="/plugin/fontawesome-free-5.3.1-web/js/brands.min.js"></script>
    <script defer src="/plugin/fontawesome-free-5.3.1-web/js/regular.min.js"></script>
    <script defer src="/plugin/fontawesome-free-5.3.1-web/js/solid.min.js"></script>
    <script defer src="/plugin/fontawesome-free-5.3.1-web/js/fontawesome.min.js"></script>

    @stack('master_css_link')

    <!-- my_style.css -->
    <link rel="stylesheet" href="/my_asset/my_style.css">

    <title>{{ config('app.name') }} - @yield('page_title')</title>
    <link rel="shortcut icon" href="/favicon.ico">
</head>
<body>
    <!-- show #myBodyWrapper if JavaScript enabled -->
    <div id="myBodyWrapper" class="my-display-none">
        <!-- start master_navbar -->
        @include('layouts.master_navbar')
        <!-- end master_navbar -->

        <div class="container-fluid">
            <div class="row">
                <nav class="col-sm-3 col-md-2 d-none d-sm-block my-sidebar">
                    <!-- start sidebar -->
                    @section('master_sidebar')
                        @include('layouts.master_sidebar')
                    @show
                    <!-- end sidebar -->
                </nav>

                <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2">
                    <!-- start main content -->
                    @yield('content')
                    <!-- end main content -->

                    <!-- start master_footer -->
                    {{-- @include('layouts.master_footer') --}}
                    <!-- end master_footer -->
                </main>
            </div>
        </div>
    </div>
    <!-- /#myBodyWrapper -->

    <noscript><center>Please enable Javascript in your browser settings to view full site!</center></noscript>

    <!-- jQuery first, then Bootstrap JS -->

    <!-- jquery-3.3.1 -->
    <script src="/plugin/jquery-3.3.1/jquery-3.3.1.min.js"></script>

    <!-- bootstrap, bootstrap.bundle.min.js already included popper.min.js -->
    <script src="/plugin/bootstrap-4.1.3-dist/js/bootstrap.bundle.min.js"></script>

    <!-- Optional JavaScript file -->
    @stack('master_script_src')

    <script type="text/javascript">
        // if JavaScript enabled, show #myBodyWrapper
        $("#myBodyWrapper").show();

        // submit button disable on click
        $("[data-disable-on-click]").click(function() {
            $(this).prop('disabled', true);
        });

        $(function() {
            @stack('master_script_document_ready')
        });
    </script>

    @stack('master_script')
</body>
</html>
