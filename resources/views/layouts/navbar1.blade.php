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
          @guest  
            <li class="nav-item">
              <a class="nav-link" href="{{ route('signs.index') }}">Sign In</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link btn" id="signup-btn" href="{{ route('signs.toggle', ['class' => 'active']) }}">Sign Up</a>
            </li>
            @endif
            @else
              <li class="mybar">
                <a id="" class="dropdown-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ "logout" }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </div>
              </li>
            @endguest
        </li>
      </ul>
    </div>
  </div>
</nav>