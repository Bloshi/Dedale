<nav class="ui secondary pointing menu">
    <a class='logo_nav' href="{{ route('home') }}">
        @include('inc/navlogo')
    </a>

    @auth
        <a class="item" href="{{ route('feed', ['param' => 'game']) }}">File d'acutalité</a>
        <a class="item" href="{{ route('map') }}">Map</a>
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
                        <div class='item'>
                            <div class="ui animated fade button fluid" tabindex="0">
                                <div class="visible content">Devenir pro</div>
                                <div class="hidden content">20€ par mois</div>
                            </div>
                        </div>
                    @else 
                        <div class="item">
                            <a href="{{ route('pro.add_game') }}" class='ui button fluid'>Ajouter un jeu</a>
                        </div>
                        <div class="item">
                            <a href="{{ route('pro.add_event') }}" class='ui button fluid'>Ajouter un événement</a>
                        </div>
                    @endif
                    <div class='item'>
                        <a href="{{ route('logout') }}" class='ui negative basic button fluid'
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
