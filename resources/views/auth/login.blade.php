@extends('layouts.app')

@section('content')
<div class="box">
    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

          <div class="field">
            <label class="label">{{ __('Email') }}</label>
            <p class="control has-icons-left has-icons-right">
                <input class="input" type="email" name="email" value="{{ old('email') }}"  autofocus />
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
            </p>
          </div>
          <div class="field">
            <label class="label">{{ __('Password') }}</label>
            <p class="control has-icons-left">
              <input class="input" type="password" name="password"  autocomplete="current-password" />
              <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
              </span>
            </p>
          </div>

        <div class="field is-horizontal">
            <label class="label">
                <input type="checkbox" name="remember">
                {{ __('Remember me') }}
            </label>
        </div>

        <div class="field">
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif
        </div>

        <div>
            <button type="submit" class="button is-info">
               {{ __('Login') }}
            </button>
        </div>
    </form>
</div>
@endsection
