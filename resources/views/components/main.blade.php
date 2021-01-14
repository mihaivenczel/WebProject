<!doctype html>
<html lang="en">
<head>
    @include('components._head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'WebProject') }}
                </a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="{{ Request::is('blog') ? 'btn active' : 'nav-link' }}" href="/blog">Blog </a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Request::is('about') ? 'btn active' : 'nav-link' }}" href="/about">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{ Request::is('posts') ? 'btn active' : 'nav-link' }}" href="/posts">Posts</a>
                    </li>
                </ul>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="button" aria-labelledby="navbarDropdown">
                                    <a class="button" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @include('components._messages')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('components._footer')
</body>

</html>
