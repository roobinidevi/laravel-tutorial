<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="{{ app()->getLocale() }}">
    @include('layouts.partials.head')

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            @include('layouts.partials.header')

            @include('layouts.partials.aside')

            <div class="content-wrapper">
                @yield('content')
            </div>

            @include('layouts.partials.footer')

            <div class="control-sidebar-bg"></div>

        </div>
        @include('layouts.partials.scripts')

        @stack('push_scripts')

    </body>
</html>
