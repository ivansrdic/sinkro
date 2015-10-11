<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')

        <title>
            @yield('title') - Sinkro d.o.o.
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