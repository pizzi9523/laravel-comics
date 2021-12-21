<header id="site_header">
    <div class="top_header">
        <div class=" container">
            <nav class="nav  justify-content-end">
                <a class="nav-link text-light" href="">DC POWER℠VISA®</a>
                <a class="nav-link text-light" href="">ADDITIONAL DC SITES &dtrif;</a>
            </nav>
        </div>

    </div>

    <div class="container  bottom_header d-flex justify-content-between py-4">
        <div class="logo">
            <img src="{{asset('img/dc-logo.png')}}" alt="" />
        </div>

        <nav class="nav bottom_nav justify-content-center align-content-center">
            @foreach( config('db.menu') as $item )
            <a class="nav-link {{Route::currentRouteName() === $item['text'] ? 'active' : ''}}"
                href="{{ route($item['text'])}}">{{ strtoupper($item['text']) }}</a>
            @endforeach

            <input id="search_bar" class="text-end me-2" type="text" placeholder="Search">
            <label class="d-flex align-items-center" for="search_bar"><i class="fas fa-search"></i></label>
        </nav>

    </div>
</header>