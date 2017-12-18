<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    @section('head')
    @include('layouts.login_partials.head')
    @show

    <body class="hold-transition login-page">
        @yield('content')
    </body>
    @section('scripts')
    @include('layouts.login_partials.scripts')
    @show
</html>