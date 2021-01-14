<!doctype html>
<html lang="en">
<head>
@include('components._head')
</head>

<body>

@include('components._nav')

    <div class="container">

    @include('components._messages')

        @yield('content')



@include('components._footer')

    </div>

@include('components._javascript')

    @yield('scripts')

</body>

</html>
