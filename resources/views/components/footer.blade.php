<footer class="footer bg-dark pt-4 pb-4">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="left">
            <h4 class="text-light">Sitemap</h4>
            <ul class="list-unstyled d-flex gap-3 m-0">
                <li><a class="text-light" href="{{route('home')}}">Home</a></li>
                <li><a class="text-light" href="{{route('profile')}}">Profile</a></li>
                <li><a class="text-light" href="{{route('profiles')}}">Profiles</a></li>
                <li><a class="text-light" href="{{route('settings')}}">Settings</a></li>
                <li><a class="text-light" href="{{route('login')}}">Login</a></li>
            </ul>
        </div>
        <div class="copyright text-light mb-0">
            Copyright &copy; <?= date('Y') ?>
        </div>
    </div>
</footer>