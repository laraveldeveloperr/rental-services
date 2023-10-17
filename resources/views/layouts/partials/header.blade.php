<header class="gauto-main-header-area">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="site-logo">
                     <a href="/">
                     <img src="{{ asset('frontend/img/logo.png')}}" alt="gauto" />
                     </a>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-9">
                  <div class="header-promo">
                     <div class="single-header-promo">
                        <div class="header-promo-icon">
                           <img src="{{ asset('frontend/img').'/'.$general_settings->logo}}" alt="globe" />
                        </div>
                        <div class="header-promo-info">
                           <p>{{ $general_settings->address }}</p>
                        </div>
                     </div>
                     <div class="single-header-promo">
                        <div class="header-promo-icon">
                           <img src="{{ asset('frontend/img/clock.png')}}" alt="clock" />
                        </div>
                        <div class="header-promo-info">
                           <h3>Monday to Friday</h3>
                           <p>9:00am - 6:00pm</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="header-action">
                     <a href="#"><i class="fa fa-phone"></i> Request a call</a>
                  </div>
               </div>
            </div>
         </div>
      </header>