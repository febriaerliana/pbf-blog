<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a href="{{ route('index') }}" class="text-warning">Beranda</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item"><a class="nav-link js-scroll-trigger text-warning" href="{{ route('index').'#about' }}">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger text-warning" href="{{ route('index').'#blog' }}">Blog</a></li>
            </ul>
        </div>
    </div>
</nav>