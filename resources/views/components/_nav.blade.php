<!-- Default Bootstrap Navbar-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">WebProject</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="{{ Request::is('/') ? 'btn active' : 'nav-link' }}" href="/">Home </a>
            </li>
            <li class="nav-item active">
                <a class="{{ Request::is('blog') ? 'btn active' : 'nav-link' }}" href="/blog">Blog </a>
            </li>
            <li class="nav-item">
                <a class="{{ Request::is('about') ? 'btn active' : 'nav-link' }}" href="/about">Profile</a>
            </li>
            <li class="nav-item">
                <a class="{{ Request::is('posts') ? 'btn active' : 'nav-link' }}" href="/posts">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>

        </ul>

    </div>
</nav>
