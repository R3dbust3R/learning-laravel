<nav class="navbar bg-dark p-3">
    <div class="container">
        <div class="logo"><a href="/" class="btn text-light fs-3">Social<span class="text-warning"><strong>UX</strong></span></a></div>
        <ul class="list-unstyled d-flex gap-2 m-0">
            <li><a class="btn p-1 text-light" href="{{route('home')}}">Home</a></li>
            @auth
            <li><a class="btn p-1 text-light" href="{{route('profiles')}}">Profiles</a></li>
            <li><a class="btn p-1 text-light" href="{{route('settings')}}">Settings</a></li>
            <li><a class="btn p-1 text-light" href="{{route('logout')}}">Logout</a></li>
            @endauth

            @guest
                <li><a class="btn p-1 text-light" href="{{route('login')}}">Login</a></li>
                <li><a class="btn p-1 text-light" href="{{route('profile-create')}}">Sign up</a></li>
            @endguest
            
            @auth
                <li><a class="btn py-1 px-3 btn-outline-warning" href="{{ route('show-profile', auth()->user()->id) }}">{{auth()->user()->fname}}</a></li>
            @endauth
        </ul>
    </div>
</nav>