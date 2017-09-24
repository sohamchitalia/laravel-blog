 <div class="blog-masthead">
      <div class="container">
        <nav class="nav">
          <a class="nav-link" href="/">Home</a>
          
          @if(Auth::check())
          <a class="nav-link" href="/posts/create">Create</a>
          <a class="nav-link" href="/myblog">My Posts</a>
          <a class="nav-link" href="/logout">Logout</a>
          <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
          
          @endif

          @if(Auth::guest())
          <a class="nav-link" href="/login">Login</a>
          <a class="nav-link" href="/register">Register</a>

          @endif
        </nav>
      </div>
    </div>

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Wordpush</h1>
        <p class="lead blog-description">A sample blog built by Soham Chitalia.</p>
      </div>
    </div>
