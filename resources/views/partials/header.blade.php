<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('welcome') }}">
                <img src="https://bulma.io/images/bulma-logo-white.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="{{ route('welcome') }}">
                    {{ __('Home') }}
                </a>

                <a class="navbar-item" href="{{ route('posts.index') }}">
                    {{ __('Posts') }}
                </a>
                <a class="navbar-item" href="{{ route('subscribers.create') }}">
                    {{ __('subscribe') }}
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        {{ __('More') }}
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="{{ route('categories.index') }}">
                            {{ __('Categories') }}
                        </a>
                        <a class="navbar-item" href="{{ route('tags.index') }}">
                            {{ __('Tags') }}
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="{{ route('contact') }}">
                            {{ __('Contact') }}
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <a class="navbar-item"
                    href="{{ route('changeLocale', config('app.locale') == 'en' ? 'ar' : 'en') }}">
                    {{ config('app.locale') == 'en' ? 'ar' : 'en' }}
                </a>
                @auth
                    <div class="navbar-item">
                        <span class="mx-3">{{ __('Hello ') }}{{ Auth::user()->name }}!</span>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="button is-outlined" type="submit">{{ __('Logout') }}</button>
                        </form>
                    </div>
                @else
                    <div class="navbar-item">
                        <div class="buttons">
                            {{-- <a href="{{ route('register') }}" class="button is-primary">
                                <strong>{{ __('Sign up') }}</strong>
                            </a> --}}
                            <a href="{{ route('login') }}" class="button is-light">
                                {{ __('Log in') }}
                            </a>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>
