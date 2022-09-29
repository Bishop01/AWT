<!DOCTYPE html>
<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="h-screen flex flex-col bg-gradient-to-br from-[#012e67] to-[#461a45] text-white">
        @include('layouts.include.navbar')
        @yield('content')


        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui.js"></script>
        @yield('scripts')
    </body>
</html>