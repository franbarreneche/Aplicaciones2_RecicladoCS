<nav class="navbar is-info" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="/">
        <img src="{{asset('img/logo.svg')}}" width="112" height="28">
      </a>

      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="/">
          Home
        </a>
        @auth
        <a class="navbar-item" href="{{route('dashboard')}}">
          Dashboard
        </a>
        @endauth
      </div>

      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            @guest
            <a class="button is-primary" href="{{route('register')}}">
                <strong>{{__('Register')}}</strong>
              </a>
              <a class="button is-light" href="{{route('login')}}">
                {{__('Login')}}
              </a>
            @endguest
            @auth
            <a class="button is-info is-light">{{auth()->user()->name}}</a>
            <form action="{{route('logout')}}" method="POST">
                @csrf
            <button type="submit" class="button is-danger">
                {{__('Logout')}}
            </button>
            </form>
            @endauth
          </div>
        </div>
      </div>
    </div>
  </nav>
