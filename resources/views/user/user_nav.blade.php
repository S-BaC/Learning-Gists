@extends ('user.layouts.layout')

@section('user_nav')

<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="/">
        <img src="{{ asset('images/logo.jpg
        ') }}" class="is-64x64">
      </a>
      <p class="is-size-3">Project Z</p>
  
      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
  
    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item">
          Library
        </a>
  
        <a class="navbar-item">
          My Box
        </a>

        <a class="navbar-item">
          Settings
        </a>

        <a class="navbar-item">
          About
        </a>
  
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-primary">
              <strong>Profile</strong>
            </a>
            <a class="button is-light">
              Log Out
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

@endsection