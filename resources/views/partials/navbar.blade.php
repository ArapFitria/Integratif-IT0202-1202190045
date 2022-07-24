<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">Home</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link active" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}"
                        href="/categories">Categories</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link active" href="posts?source=headlinenews">
                        Headline News
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="posts?source=islam">
                        Islam
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="posts?source=indonesia">
                        Indonesia
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/poke">
                        Pokedex
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/rss_rafi">
                        RSS Rafi
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>
