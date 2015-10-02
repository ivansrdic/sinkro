<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')

        <title>
            Sinkro d.o.o. - @yield('title')
        </title>
    </head>
    <body>
        @include('includes.navigation')

        @section('main')
        @show

        @section('footer')
            @include('includes.footer')
        @show

        @section('javascript')
            @include('includes.javascript')
        @show
    </body>
</html>