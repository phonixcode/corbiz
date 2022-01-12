<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials.header')
</head>

<body>

    <!-- Wrapper -->
    <div class="site-wrapper">

        <!-- Preloader -->
        <div class="site-preloader">
            <img src="{{ 'assets/images/loader.gif' }}" alt="loader">
        </div>

        @include('layouts.partials.navbar')

        @yield('content')

        @include('layouts.partials.footer')

    </div>
    <!-- End Wrapper -->

    @include('layouts.partials.script')

</body>

</html>
