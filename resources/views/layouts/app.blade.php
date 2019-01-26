<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
<body class="rtl">
    <div id="app" class="d-flex flex-column">
        @include('partials.header')
        <main class="flex-grow-1 d-flex">
            @yield('content')
        </main>

        @include('partials.footer')
    </div>
</body>
</html>
