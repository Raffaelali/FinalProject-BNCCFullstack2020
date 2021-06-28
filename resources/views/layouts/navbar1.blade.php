<nav class="navbar navbar-expand-lg mybar">
  <div class="container-fluid">
    <a class="navbar-brand" href="/" id="logo"><img src="{{asset('images/f.png')}}" id="logo-img" alt=""> Bicom</a>
      <ul class="navbar-nav bar-list">
        <li class="nav-item">
          <a class="nav-link active" href="{{route('home.index')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('posts.index')}}">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">About</a>
        </li>
        <li>
          <span class="divide"></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('signs.index') }}">Sign In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn" id="signup-btn" href="{{ route('signs.toggle', ['class' => 'active']) }}">Sign Up</a>
        </li>
      </ul>
    </div>
  </div>
</nav>