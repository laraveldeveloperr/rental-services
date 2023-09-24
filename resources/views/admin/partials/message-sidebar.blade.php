<div class="col-lg-3 border-end-lg">
            <div class="d-flex align-items-center justify-content-between">
              <button class="navbar-toggle btn btn-icon border d-block d-lg-none" data-bs-target=".email-aside-nav" data-bs-toggle="collapse" type="button">
                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
              </button>
              <div class="order-first">
                <h4>Mail Service</h4>
                <p class="text-muted">amiahburton@gmail.com</p>
              </div>
            </div>
            <div class="d-grid my-3">
              <a class="btn btn-primary" href="{{ route(ADMIN.'.messages.create') }}">Email göndər</a>
            </div>
            <div class="email-aside-nav collapse">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center" href="{{ route(ADMIN.'.messages.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox icon-lg me-2"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg>
                    Gələnlər
                    @if ($unread>0)
                    <span class="badge bg-danger fw-bolder ms-auto"> {{ $unread }}
                    @endif
                  </span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center" href="{{ route(ADMIN.'.sent-messages') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail icon-lg me-2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    Göndərdiklərim
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center" href="{{ route(ADMIN.'.starred-messages') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase icon-lg me-2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                    Vacib mesajlar
                  </span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center" href="{{route(ADMIN.'.draft-messages')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file icon-lg me-2"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                    Qaralama
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center" href="{{route(ADMIN.'.deleted-messages')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash icon-lg me-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                    Silinmişlər
                  </a>
                </li>
              </ul>
            </div>
          </div>