<div class="sidebar" data-color="orange" data-background-color="white"
    data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="https://creative-tim.com/" class="simple-text logo-normal">
            {{ __('Creative Tim') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('admin.home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="nav-item {{ $activePage == 'profile' || $activePage == 'user-management' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                    <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
                    <p>{{ __('Laravel Examples') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExample">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.profile.edit') }}">
                                <span class="sidebar-mini"> UP </span>
                                <span class="sidebar-normal">{{ __('User profile') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.user.index') }}">
                                <span class="sidebar-mini"> UM </span>
                                <span class="sidebar-normal"> {{ __('User Management') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('table') }}">
                    <i class="material-icons">content_paste</i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('typography') }}">
                    <i class="material-icons">library_books</i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('icons') }}">
                    <i class="material-icons">bubble_chart</i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('map') }}">
                    <i class="material-icons">location_ons</i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('notifications') }}">
                    <i class="material-icons">notifications</i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li class="nav-item {{$activePage == 'posts' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#posts" aria-expanded="true">
                    <i><i class="material-icons">description</i></i>
                    <p>{{ __('Posts') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="posts">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'posts' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.posts.index') }}">
                                <i class="material-icons">description</i>
                                <p>{{ __('Posts') }}</p>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'post-create' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.posts.create') }}">
                                <i class="material-icons">add</i>
                                <p>{{ __('Add New Post') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- <li class="nav-item{{ $activePage == 'posts' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('admin.posts.index') }}">
                    <i class="material-icons">description</i>
                    <p>{{ __('Posts') }}</p>
                </a>
            </li> --}}
            <li class="nav-item {{$activePage == 'tags' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#tags" aria-expanded="true">
                    <i><i class="material-icons">tags</i></i>
                    <p>{{ __('Tags') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="tags">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'tags' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.tags.index') }}">
                                <i class="material-icons">tags</i>
                                <p>{{ __('Tags') }}</p>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'post-create' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.tags.create') }}">
                                <i class="material-icons">add</i>
                                <p>{{ __('Add New Tag') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- <li class="nav-item{{ $activePage == 'tags' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('admin.tags.index') }}">
                    <i class="material-icons">tags</i>
                    <p>{{ __('Tags') }}</p>
                </a>
            </li> --}}
            <li class="nav-item {{$activePage == 'categories' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#categories" aria-expanded="true">
                    <i><i class="material-icons">class</i></i>
                    <p>{{ __('Categories') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="categories">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'categories' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.categories.index') }}">
                                <i class="material-icons">class</i>
                                <p>{{ __('Categories') }}</p>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'category-create' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('admin.categories.create') }}">
                                <i class="material-icons">add</i>
                                <p>{{ __('Add New Category') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item{{ $activePage == 'settings' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('admin.settings.create') }}">
                    <i class="material-icons">settings</i>
                    <p>{{ __('Settings') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('language') }}">
                    <i class="material-icons">language</i>
                    <p>{{ __('RTL Support') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
