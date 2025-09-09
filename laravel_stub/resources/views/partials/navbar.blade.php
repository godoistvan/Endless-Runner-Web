<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('register.show') }}">Register</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('leaderboard.index') }}">Leaderboard</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('shop.index') }}">Shop</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Additional information
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <span class="dropdown-item disabled">Contact Support</span>
          <span class="dropdown-item disabled">About us</span>
          <span class="dropdown-item disabled">Apply for a job!</span>
        </div>
      </li>
      @if(session('username'))
        <li class="nav-item ml-3">
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-danger btn-sm">Logout {{ session('username') }}</button>
          </form>
        </li>
      @else
        <li class="nav-item ml-3">
          <form action="{{ route('login') }}" method="POST" class="form-inline">
            @csrf
            <input type="text" name="username" class="form-control form-control-sm mr-1" placeholder="Username" required>
            <input type="password" name="password" class="form-control form-control-sm mr-1" placeholder="Password" required>
            <button type="submit" class="btn btn-success btn-sm">Login</button>
          </form>
        </li>
      @endif
    </ul>
  </div>
</nav>

