<nav class="ui secondary pointing menu">
    <a class='logo_nav' href="{{ route('home') }}">
        <img src="{{ asset('logo/logo2.svg') }}" />
    </a>
    <a class="item" href="{{ route('home') }}">Accueil</a>

    @auth
        <a class="item" href="{{ route('feed', ['param' => 'game']) }}">File d'acutalité</a>
    @endauth

    <div class="right menu">
        @guest
            <a class='item' href="{{ route('login') }}">Login</a>
            <a class='item' href="{{ route('register') }}">Register</a>
        @else
            <div class='item'>
                <!-- si notif <i class="alarm icon"></i>-->
                <i class="alarm outline icon"></i>
            </div>
            <div class="ui item dropdown">
                <div class="text">{{ Auth::user()->firstName }} <b>{{ Auth::user()->lastName }}</b></div>
                <i class="dropdown icon"></i>

                <div class="menu">
                    <div class='item link_auth_focus_user'>
                        <a href="{{ route('focus_user', ['id' => Auth::user()->id]) }}">
                            <img class="ui mini circular image" src="{{ asset('images/users/'. Auth::user()->userPic()) }}" />
                            <span class="user_type">{{ Auth::user()->userType() }}</span>
                        </a>
                    </div>
                    @if( Auth::user()->type != 2 )
                        <div class='item'><a href='#'>Devenir pro</a></div>
                    @endif
                    <div class='item'>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
        @endguest
    </div>
</nav>
