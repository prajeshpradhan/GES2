<div class="header-container">
    <div id="Header" class="header">
        <div class="logo-container">
            <img src="{{asset('images/GES%20Logo%20New.png')}}" class="img-responsive">
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Contact Us</a></li>
            {{--            TEMP LOGOUT BUTTON--}}
            @auth
                <li><a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endauth

        </ul>
    </div>
</div>