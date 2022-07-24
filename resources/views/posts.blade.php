<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INTEGRATIF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        a {
            text-decoration: none;
            color: rgb(249, 168, 37)
        }
    </style>
  </head>
  <body>
    <!-- Navigasi -->
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg " style="height: 70px; ">
      <div class="container-fluid container">
        <a class="navbar-brand" href="/home">PI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="posts?source=headlinenews">Headline News</a>
            <a class="nav-link active" aria-current="page" href="posts?source=islam">Islam</a>
            <a class="nav-link active" aria-current="page" href="posts?source=indonesia">Indonesia</a>
            <a class="nav-link active" aria-current="page" href="/poke">Pokemon</a>
            <a class="nav-link active" aria-current="page" href="/rss_rafi">RSS Rafi </a>
          </div>
        </div>
      </div>
    </nav>
    <!--content -->
    <div class="container mt-5">
        <div class="row">
        @foreach ($posts as $post)
            <div class="col">
                <div class="card mb-3" style="width: 200px; height: 400px">
                    <img src={{ $post->img }} class="card-img-top" alt="..." style="width: 200px; height: 100%;">
                    <div style="height:400px">
                        <h6 class="card-title"><a href={{ $post->url }}>{{ $post->title }}</a></h6>
                        <p style="font-size:14px">{{ $post->description  }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>