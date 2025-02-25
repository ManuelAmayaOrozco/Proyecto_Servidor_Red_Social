<header class="body__header">
    <div class="header__div_logo">
        LOGO HOME
    </div>
    <nav class="header__navigation">
        <a href="{{ route('login') }}" class="navigation__a">
            {{ Auth::check() ? 'PROFILE' : 'LOGIN' }}
        </a>
        <a href="{{ route('user.showRegister') }}" class="navigation__a">
            REGISTER
        </a>
        <a href="{{ route('post.showRegisterPost') }}" class="navigation__a">
            POST
        </a>
    </nav>
</header>