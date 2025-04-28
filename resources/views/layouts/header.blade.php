<header class="header navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <span class="logo-text">Recipe Hub</span> 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
     
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route('recipes.index')}}">Recipes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('Category.index')}}">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('blogs.index')}}">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('recipes.recipes')}}">Recipe Generator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>

      <!-- Login / Signup Buttons -->
      <div class="d-flex">
        <a href="#" class="btn btn-outline-primary me-2">Login</a>
        <a href="#" class="btn btn-primary">Signup</a>
      </div>
    </div>
  </div>
</header>