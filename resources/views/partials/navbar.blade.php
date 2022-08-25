{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="/">Nurdianto Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Posts") ? 'active' : '' }}" href="/blog">Blog</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> --}}

  {{-- <nav class="nav nav-pills flex-column flex-sm-row bg-warning">
    <a class="flex-sm-fill text-sm-center nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
    <a class="flex-sm-fill text-sm-center nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
    <a class="flex-sm-fill text-sm-center nav-link {{ ($title === "Posts") ? 'active' : '' }}" href="/blog">Blog</a>
  </nav> --}}

  {{-- <nav class="navbar bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="\img\imas.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
        Nurdianto
      </a>
    </div>
  </nav> --}}

  {{-- <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">Nurdianto Blog</h5>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="text-white {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="text-white {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="text-white {{ ($title === "Posts") ? 'active' : '' }}" href="/blog">Blog</a>
        </li>
      </ul>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav> --}}

  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/">Nurdianto</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Posts") ? 'active' : '' }}" href="/blog">Blog</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>