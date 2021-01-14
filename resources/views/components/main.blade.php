<!doctype html>
<html lang="en">
<head>
@include('components._head')
</head>

<body>

@include('components._nav')

    <div class="container">

        @yield('content')



@include('components._footer')

    </div>

@include('components._javascript')

    @yield('scripts')

</body>

</html>
