<nav class="navbar">
        <a href="#" class="sidebar-toggler">
          <i data-feather="menu"></i>
        </a>
        <div class="navbar-content">
          <form class="search-form">
            <div class="input-group">
              <div class="input-group-text">
                <i data-feather="search"></i>
              </div>
              <input type="text" class="form-control" id="navbarForm" placeholder="Axtarın...">
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="ms-1 me-1 d-none d-md-inline-block">{{ App::getLocale() }}</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="languageDropdown">
                @foreach($languages as $lang)
                <a href="{{ route(ADMIN.'.set-locale', $lang->shortened) }}" class="dropdown-item py-2"> {{ $lang->name }} </span></a>
                @endforeach
              </div>
            </li>
            
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="wd-30 ht-30 rounded-circle" src="{{ asset('assets/images/faces/face1.jpg')}}" alt="profile">
              </a>
              <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                  <div class="mb-3">
                    <img class="wd-80 ht-80 rounded-circle" src="{{ asset('assets/images/faces/face1.jpg')}}" alt="">
                  </div>
                  <div class="text-center">
                    <p class="tx-16 fw-bolder">{{  !is_null(auth()->user()->name) ?  auth()->user()->name : ''}}</p>
                    <p class="tx-12 text-muted">{{ !is_null( auth()->user()->email) ?  auth()->user()->email : ''}}</p>
                  </div>
                </div>
                <ul class="list-unstyled p-1">
                  <li class="dropdown-item py-2">
                    <a href="general/profile.html" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="user"></i>
                      <span>Hesab</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="/logout" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="log-out"></i>
                      <span>Çıxış</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </nav>