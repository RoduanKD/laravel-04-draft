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
                    Home
                </a>

                <a class="navbar-item" href="{{ route('posts.index') }}">
                    Posts
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        More
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="{{ route('categories.index') }}">
                            Categories
                        </a>
                        <a class="navbar-item" href="{{ route('tags.index') }}">
                            Tags
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="{{ route('contact') }}">
                            Contact
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
