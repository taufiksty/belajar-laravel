<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="/">Satya's Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->segment(1) === null ? "active" : "" }}" href="/">Home</a>

        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->segment(1) === "about" ? "active" : "" }}" href="/about">About</a>

        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->segment(1) === "posts" ? "active" : "" }}" href="/posts">Blog</a>

        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->segment(1) === "categories" ? "active" : "" }}" href="/categories">Categories</a>

        </li>
      </ul>
    </div>
  </div>
</nav>
