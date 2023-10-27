<nav class="sidebar">
      <div class="sidebar-header">
        <a href="/admin" class="sidebar-brand">
          <small>Rental</small><span><small>Services</small></span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          
          <li class="nav-item nav-category">{{ __('categories') }}</li>
          @can('brands')
          <li class="nav-item ">
            <a href="{{ route(ADMIN.'.brands.index') }}" class="nav-link">
            <i class="link-icon" data-feather="brand"></i>
              <span class="link-title">{{ __('brands') }}</span>
            </a>
          </li>
          @endcan
          @can('models')  
          <li class="nav-item ">
            <a href="{{ route(ADMIN.'.models.index') }}" class="nav-link">
              <i class="link-icon" data-feather="model"></i>
              <span class="link-title">{{ __('models') }}</span>
            </a>
          </li>
          @endcan
          @can('ban types')
          <li class="nav-item ">
            <a href="{{ route(ADMIN.'.ban-types.index') }}" class="nav-link">
              <i class="link-icon" data-feather="ban"></i>
              <span class="link-title">{{ __('ban_types') }}</span>
            </a> 
          </li>
          @endcan
          @can('fuels')
          <li class="nav-item ">
            <a href="{{ route(ADMIN.'.fuels.index') }}" class="nav-link">
            <i class="link-icon" data-feather="fuel"></i>
            <span class="link-title">{{ __('fuels') }}</span>
            </a>
          </li>
          @endcan
          @can('gears')
          <li class="nav-item ">
            <a href="{{ route(ADMIN.'.gears.index') }}" class="nav-link">
              <i class="link-icon" data-feather="gear"></i>
              <span class="link-title">{{ __('gears') }}</span>
            </a>
          </li>
          @endcan
          @can('transmissions')
          <li class="nav-item ">
            <a href="{{ route(ADMIN.'.transmissions.index') }}" class="nav-link">
              <i class="link-icon" data-feather="transmission"></i>
              <span class="link-title">{{ __('transmissions') }}</span>
            </a>
          </li>
          @endcan
          @can('engines')
          <li class="nav-item ">
            <a href="{{ route(ADMIN.'.engines.index') }}" class="nav-link">
              <i class="link-icon" data-feather="engine"></i>
              <span class="link-title">{{ __('engines') }}</span>
            </a>
          </li>
          @endcan
          @can('colors')
          <li class="nav-item ">
            <a href="{{ route(ADMIN.'.colors.index') }}" class="nav-link">
              <i class="link-icon" data-feather="color"></i>
              <span class="link-title">{{ __('colors') }}</span>
            </a>
          </li>
          @endcan
          @can('properties')
          <li class="nav-item ">
            <a href="{{ route(ADMIN.'.properties.index') }}" class="nav-link">
              <i class="link-icon" data-feather="property"></i>
              <span class="link-title">{{ __('properties') }}</span>
            </a>
          </li>
          @endcan

          <hr>
          @can('discounts')
          <li class="nav-item ">
            <a href="{{ route(ADMIN.'.discounts.index') }}" class="nav-link">
              <i class="link-icon" data-feather="discount"></i>
              <span class="link-title">{{ __('discounts') }}</span>
            </a>
          </li>          
          @endcan
          
          <hr>
          @can('cars')
          <li class="nav-item ">
            <a href="{{ route(ADMIN.'.cars.index') }}" class="nav-link">
              <i class="link-icon" data-feather="car"></i>
              <span class="link-title">{{ __('cars') }}</span>
            </a>
          </li>
          @endcan
          @can('brons')
          <li class="nav-item ">
            <a href="{{ route(ADMIN.'.brons.index') }}" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">{{ __('brons') }}</span>
            </a>
          </li>
          @endcan
          @can('blogs')            
          <li class="nav-item ">
            <a href="{{ route(ADMIN.'.blogs.index') }}" class="nav-link">
              <i class="link-icon" data-feather="blog"></i>
              <span class="link-title">{{ __('blogs') }}</span>
            </a>
          </li>
          @endcan
          @can('services')
          <li class="nav-item ">
            <a href="{{ route(ADMIN.'.services.index') }}" class="nav-link">
              <i class="link-icon" data-feather="blog"></i>
              <span class="link-title">{{ __('services') }}</span>
            </a>
          </li>
          @endcan

          <li class="nav-item ">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#email" role="button" aria-expanded="false" aria-controls="email">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail link-icon"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
              <span class="link-title">{{ __('for_site') }}</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down link-arrow"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </a>
            <div class="collapse" id="email" style="">
              <ul class="nav sub-menu">
                @can('site comments')
                <li class="nav-item">
                  <a href="{{ route(ADMIN.'.site-comments.index') }}" class="nav-link ">{{ __('comments_for_site') }}</a>
                </li>
                @endcan
                @can('car comments')
                <li class="nav-item">
                  <a href="{{ route(ADMIN.'.car-comments.index') }}" class="nav-link ">{{ __('comments_for_cars') }}</a>
                </li>
                @endcan
                @can('site faqs')
                <li class="nav-item">
                  <a href="{{ route(ADMIN.'.faqs.index') }}" class="nav-link ">{{ __('faq_for_site') }}</a>
                </li>
                @endcan
                @can('car faqs')
                <li class="nav-item">
                  <a href="{{ route(ADMIN.'.car-faqs.index') }}" class="nav-link ">{{ __('faq_for_cars') }}</a>
                </li>
                @endcan
              </ul>
            </div>
          </li>

          @can('call requests')
          <li class="nav-item ">
            <a href="{{ route(ADMIN.'.call-requests.index') }}" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">{{ __('call_requests') }}</span>
            </a>
          </li>
          @endcan

          @can('partners')
          <li class="nav-item ">
            <a href="{{ route(ADMIN.'.partners.index') }}" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">{{ __('partners') }}</span>
            </a>
          </li>
          @endcan

          @can('messages')
          <li class="nav-item ">
            <a href="{{ route(ADMIN.'.messages.index') }}" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">{{ __('messages') }}</span>
            </a>
          </li>
          @endcan

          <li class="nav-item ">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#configuration" role="button" aria-expanded="false" aria-controls="email">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail link-icon"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
              <span class="link-title">{{ __('site_configuration') }}</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down link-arrow"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </a>
            <div class="collapse" id="configuration" style="">
              <ul class="nav sub-menu">
                @can('slide')
                <li class="nav-item">
                  <a href="{{ route(ADMIN.'.slides.index') }}" class="nav-link ">{{ __('slide') }}</a>
                </li>
                @endcan
                @can('languages')
                <li class="nav-item">
                  <a href="{{ route(ADMIN.'.languages.index') }}" class="nav-link ">{{ __('languages') }}</a>
                </li>
                @endcan
                @can('team')
                <li class="nav-item">
                  <a href="{{ route(ADMIN.'.teams.index') }}" class="nav-link ">{{ __('team') }}</a>
                </li>
                @endcan
                @can('admins')
                <li class="nav-item">
                  <a href="{{ route(ADMIN.'.users.index') }}" class="nav-link ">{{ __('admins') }}</a>
                </li>
                @endcan
                @can('roles')
                <li class="nav-item">
                  <a href="{{ route(ADMIN.'.roles.index') }}" class="nav-link ">{{ __('roles') }}</a>
                </li>
                @endcan
                @can('general settings')
                <li class="nav-item">
                  <a href="{{ route(ADMIN.'.general-settings.index') }}" class="nav-link ">{{ __('general_settings') }}</a>
                </li>
                @endcan
                @can('main page view')
                <li class="nav-item">
                  <a href="{{ route(ADMIN.'.page-design.index') }}" class="nav-link ">{{ __('main_page_view') }}</a>
                </li>
                @endcan
              </ul> 
            </div>
          </li>
          

        </ul>
      </div>
    </nav>