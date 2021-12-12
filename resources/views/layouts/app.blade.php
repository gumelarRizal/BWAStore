<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>@yield('title')</title>

        {{-- Style --}}
        @stack('prepend-style')
        @include('layouts.includes.style')
        @stack('addon-style')

    </head>

    <body>
        {{-- navbar --}}
        @include('layouts.includes.navbar')
        
        {{-- page content --}}
        @yield('content')

        {{-- footer --}}
        @include('layouts.includes.footer')

        {{-- Script --}}

        @stack('prepend-script')
        @include('layouts.includes.script')
        @stack('addon-script')
    </body>
</html>
