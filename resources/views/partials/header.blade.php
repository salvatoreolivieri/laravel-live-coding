<header>
    <nav>
        <ul>
            <li><a class="{{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('home') }}">Homepage</a></li>
            <li><a class="{{ Route::currentRouteName() === 'about' ? 'active' : ''}}" href="{{ route('about') }}">About</a></li>
            <li><a class="{{ Route::currentRouteName() === 'testimonials' ? 'active' : ''}}" href="{{ route('testimonials') }}">Testimonials</a></li>
            <li><a class="{{ Route::currentRouteName() === 'starthere' ? 'active' : ''}}" href="{{ route('starthere') }}">Start Here</a></li>
        </ul>
    </nav>
</header>
