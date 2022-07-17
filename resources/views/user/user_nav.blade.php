  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Project Z</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto me-5 pe-5 mb-2 mb-lg-0 px-3">
          @if($cur_lib === true)
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/library">Library</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/library">Library</a>
            </li>
          @endif
          @if($cur_myb === true)
            <li class="nav-item">
              <a class="nav-link active" href="/mybooks">My Books</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="/mybooks">My Books</a>
            </li>
          @endif
          @if($cur_com === true)
            <li class="nav-item">
              <a class="nav-link active" href="#">Community</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="#">Community</a>
            </li>
          @endif
          @if($cur_pro === true)
            <li class="nav-item">
              <a class="nav-link active" href="#">Profile</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="#">Profile</a>
            </li>
          @endif

        
          
          
          
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              More
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">About</a></li>
              <li><a class="dropdown-item" href="#">Guides</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
