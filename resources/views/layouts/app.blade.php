<!DOCTYPE html>
<html lang="en-US">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   @php
   $metaKeywords = json_decode($general_settings->meta_keywords, true);
   @endphp

   <meta name="description" content="{{ $general_settings->meta_description }}">
   <meta name="keywords" content="{{ implode(', ', $metaKeywords) }}">
   <meta name="author" content="Themescare">
   <!-- Title -->
   <title>RENTAL SERVICES MMC</title>
   <!-- Favicon -->
   <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/img/favicon/favicon-32x32.png')}}">
   <!--Bootstrap css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css')}}">
   <!--Font Awesome css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css')}}">
   <!--Magnific css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css')}}">
   <!--Owl-Carousel css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css')}}">
   <!--Animate css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css')}}">
   <!--Datepicker css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/jquery.datepicker.css')}}">
   <!--Nice Select css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css')}}">
   <!-- Lightgallery css -->
   <link rel="stylesheet" href="{{ asset('frontend/css/lightgallery.min.css')}}">
   <!--ClockPicker css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/jquery-clockpicker.min.css')}}">
   <!--Slicknav css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css')}}">
   <!--Site Main Style css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
   <!--Responsive css-->
   <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css')}}">
   <style>
      .modal.fade.show {
         display: flex !important;
         align-items: center;
         justify-content: center;
         background: rgba(0, 0, 0, 0.5);
      }

      /* Modal Content */
      .modal-content {
         border-radius: 10px;
         background-color: #fff;
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }

      /* Modal Header */
      .modal-header {
         background-color: #ec3323;
         color: #fff;
         border-top-left-radius: 10px;
         border-top-right-radius: 10px;
      }

      .modal-title {
         font-weight: bold;
      }

      /* Close Button */
      .close {
         color: #fff;
      }

      .close:hover {
         color: #ccc;
      }

      /* Form Styles */
      .modal-body {
         padding: 20px;
      }

      .form-control {
         margin-bottom: 15px;
         padding: 10px;
         border: 1px solid #ccc;
         border-radius: 5px;
      }

      .form-control:focus {
         border-color: #007BFF;
      }

      /* Modal Footer */
      .modal-footer {
         background-color: #f8f9fa;
         border-bottom-left-radius: 10px;
         border-bottom-right-radius: 10px;
      }

      /* Label Stili */
      label {
         display: block;
         color: #ec3323;
         text-align: left;
      }

      /* Form Elemenetleri */
      .form-control {
         margin-bottom: 15px;
         padding: 10px;
         border: 1px solid #ccc;
         border-radius: 5px;
         text-align: left;
         /* Etiketlerle aynı hizada olmalarını sağlar */
      }

   </style>
   @stack('css')
</head>

<body>
   <!-- Header Top Area Start -->
   <section class="gauto-header-top-area">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="header-top-left">
                  <p>{{ __('need_help?') }}: <i class="fa fa-phone"></i> {{ __('call_us') }}:
                     {{ json_decode($general_settings->numbers,true)[0] }}</p>
               </div>
            </div>
            <div class="col-md-6">
               <div class="header-top-right">
                  <!-- <a href="#">
                     <i class="fa fa-key"></i>
                     login
                     </a>
                     <a href="#">
                     <i class="fa fa-user"></i>
                     register
                     </a> -->
                  <a href="#" class="header-action" data-toggle="modal" data-target="#callModal">
                     <i class="fa fa-phone"></i> {{ __('request_a_call') }}
                  </a>

                  <div class="modal fade" id="callModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                     <div class="modal-dialog" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">{{ __('request_a_call') }}</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                           </div>
                           <form method="POST" action="{{ route('request-a-call') }}">
                              @csrf
                              <div class="modal-body">
                                 <div class="row">
                                    <div class="col-12">
                                       <label for="name_surname">{{ __('name_surname') }}</label>
                                       <input type="text" name="name_surname" class="form-control"
                                          placeholder="{{ __('name_surname') }}">
                                    </div>
                                    <div class="col-12">
                                       <label for="name_surname">{{ __('number') }}</label>
                                       <input type="tel" name="phone" class="form-control"
                                          placeholder="{{ __('number') }}">
                                    </div>
                                 </div>

                              </div>
                              <div class="modal-footer">
                                 <div class="col-md-4">
                                    <p>
                                       <button type="submit" class="gauto-theme-btn">{{ __('send') }}</button>
                                    </p>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>

                  <a href="#" class="header-action" data-toggle="modal" data-target="#partnerModal">
                     <i class="fa fa-handshake-o"></i> {{ __('be_a_partner') }}
                  </a>

                  <div class="modal fade" id="partnerModal" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">{{ __('be_a_partner') }}</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                           </div>
                           <form method="POST" action="{{ route('be-a-partner') }}">
                              @csrf
                              <div class="modal-body">
                                 <div class="row">
                                    <div class="col-12">
                                       <label for="company_name">{{ __('company_name') }}</label>
                                       <input type="text" id="company_name" name="company_name" class="form-control"
                                          placeholder="{{ __('company_name') }}">
                                    </div>
                                    <div class="col-12">
                                       <label for="address">{{ __('address') }}</label>
                                       <input type="text" name="address" class="form-control"
                                          placeholder="{{ __('address') }}">
                                    </div>
                                    <div class="col-12">
                                       <label for="voen">{{ __('voen') }}</label>
                                       <input type="text" name="voen" class="form-control"
                                          placeholder="{{ __('voen') }}">
                                    </div>
                                    <div class="col-12">
                                       <label for="number">{{ __('number') }}</label>
                                       <input type="text" name="phone_number" class="form-control"
                                          placeholder="{{ __('number') }}">
                                    </div>
                                    <div class="col-12">
                                       <label for="email">{{ __('email') }}</label>
                                       <input type="text" name="email" class="form-control"
                                          placeholder="{{ __('email') }}">
                                    </div>
                                    <div class="col-12">
                                       <label for="relevant_person">{{ __('relevant_person') }}</label>
                                       <input type="text" name="relevant_person" class="form-control"
                                          placeholder="{{ __('relevant_person') }}">
                                    </div>
                                 </div>

                              </div>
                              <div class="modal-footer">
                                 <div class="col-md-4">
                                    <p>
                                       <button type="submit" class="gauto-theme-btn">{{ __('send') }}</button>
                                    </p>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>

                  <div class="dropdown">
                     <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownlang" data-toggle="dropdown"
                        aria-haspopup="true">
                        {{ app()->getLocale() }}
                     </button>
                     <ul class="dropdown-menu" aria-labelledby="dropdownlang">
                        @foreach ($languages as $lang)
                        <li>
                           <a href="{{ route('change-lang', $lang->shortened) }}">{{ $lang->name }}</a>
                        </li>
                        @endforeach
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Header Top Area End -->

   <!-- Main Header Area Start -->
   <header class="gauto-main-header-area">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="site-logo">
                  <a href="/">
                     <img src="{{ asset('images').'/'.$general_settings->logo}}" alt="gauto" style="height:50px;" />
                  </a>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- Main Header Area End -->

   <!-- Mainmenu Area Start -->
   <section class="gauto-mainmenu-area">
      <div class="container">
         <div class="row">
            <div class="col-lg-9">
               <div class="mainmenu">
                  <nav>
                     <ul id="gauto_navigation">
                        <li class="active"><a href="/">{{ __('home') }}</a></li>
                        <li><a href="{{ route('services') }}">{{ __('services') }}</a></li>
                        <li><a href="{{ route('about') }}">{{ __('about') }}</a></li>
                        <li>
                           <a href="{{ route('car-listing') }}">{{ __('car_listing') }}</a>
                        </li>
                        <li><a href="{{ route('gallery') }}">{{ __('gallery') }}</a></li>
                        <!-- <li>
                              <a href="#">Shop</a>
                              <ul>
                                 <li><a href="products.html">products</a></li>
                                 <li><a href="single-product.html">product details</a></li>
                                 <li><a href="cart.html">Shoping Cart</a></li>
                                 <li><a href="checkout.html">checkout</a></li>
                              </ul>
                           </li> -->
                        <li><a href="{{ route('blogs') }}">{{ __('blogs') }}</a></li>
                        <li><a href="{{ route('contact') }}">{{ __('contact') }}</a></li>
                     </ul>
                  </nav>
               </div>
            </div>
            <div class="col-lg-3 col-sm-12">
               <div class="main-search-right">
                  <!-- Responsive Menu Start -->
                  <div class="gauto-responsive-menu"></div>
                  <!-- Responsive Menu Start -->

                  <!-- Cart Box Start -->

                  <!-- Search Box Start -->
                  <div class="search-box">
                     <form>
                        <input type="search" placeholder="{{ __('search') }}">
                        <button type="submit"><i class="fa fa-search"></i></button>
                     </form>
                  </div>
                  <!-- Search Box End -->

               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Mainmenu Area End -->

   @yield('content')

   <!-- Footer Area Start -->
   <footer class="gauto-footer-area">
      <div class="footer-top-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-4">
                  <div class="single-footer">
                     <div class="footer-logo">
                        <a href="#">
                           <img src="{{ asset('frontend/img/footer-logo.png')}}" alt="footer-logo" />
                        </a>
                     </div>
                     <p>{!! $general_settings->footer_text !!}</p>
                     <div class="footer-address">
                        <h3>{{ __('head_office') }}</h3>
                        <p>{{ $general_settings->address }}</span></p>
                        <ul>
                           @foreach (json_decode($general_settings->numbers, true) as $number)
                           <li> {{ $number }} </li>
                           @endforeach
                           <hr>
                           @foreach (json_decode($general_settings->emails, true) as $email)
                           <li> {{ $email }} </li>
                           @endforeach
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="single-footer quick_links">
                     <h3>{{ __('quick_links') }}</h3>
                     <ul class="quick-links">
                        <li><a href="{{ route('about') }}">{{ __('about_us') }}</a></li>
                        <li><a href="{{ route('services') }}">{{ __('services') }}</a></li>
                        <li><a href="{{ route('contact') }}">{{ __('contact') }}</a></li>
                     </ul>
                     <ul class="quick-links">
                        <li><a href="{{ route('privacy-policy') }}">{{ __('privacy_policy') }}</a></li>
                     </ul>
                  </div>
                  <div class="single-footer newsletter_box">
                     <h3>{{ __('subscribe') }}</h3>
                     <form>
                        <input type="email" placeholder="{{ __('email') }}" />
                        <button type="submit"><i class="fa fa-paper-plane"></i></button>
                     </form>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="single-footer">
                     <h3>{{ __('recent_posts') }}</h3>
                     <ul>
                        @foreach ($blogs as $blog)
                        <li>
                           <div class="single-footer-post">
                              <div class="footer-post-image">
                                 <a href="{{ route('blogs.show', $blog->slug) }}">
                                    <img src="{{ asset('images/blogs').'/'.$blog->image}}" alt="{{ $blog->title }}" />
                                 </a>
                              </div>
                              <div class="footer-post-text">
                                 <h3>
                                    <a href="{{ route('blogs.show', $blog->slug) }}">
                                       Revealed: How to set goals for you and your team
                                    </a>
                                 </h3>
                                 <p>Posted on: Jan 12, 2019</p>
                              </div>
                           </div>
                        </li>
                        @endforeach

                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="footer-bottom-area">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="copyright">
                     <p>RENTAL Services MMC </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- Footer Area End -->

   <!--Jquery js-->
   <script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
   <!-- Popper JS -->
   <script src="{{ asset('frontend/js/popper.min.js')}}"></script>
   <!--Bootstrap js-->
   <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
   <!--Owl-Carousel js-->
   <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
   <!--Lightgallery js-->
   <script src="{{ asset('frontend/js/lightgallery-all.js')}}"></script>
   <script src="{{ asset('frontend/js/custom_lightgallery.js')}}"></script>
   <!--Slicknav js-->
   <script src="{{ asset('frontend/js/jquery.slicknav.min.js')}}"></script>
   <!--Magnific js-->
   <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
   <!--Nice Select js-->
   <script src="{{ asset('frontend/js/jquery.nice-select.min.js')}}"></script>
   <!-- Datepicker JS -->
   <script src="{{ asset('frontend/js/jquery.datepicker.min.js')}}"></script>
   <!--ClockPicker JS-->
   <script src="{{ asset('frontend/js/jquery-clockpicker.min.js')}}"></script>
   <!--Main js-->
   <script src="{{ asset('frontend/js/main.js')}}"></script>
   @stack('js')
</body>

</html>