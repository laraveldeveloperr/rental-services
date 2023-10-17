@extends('layouts.app')
@section('content')
<section class="gauto-breadcromb-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcromb-box">
                     <h3>{{ __('contact_us') }}</h3>
                     <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.html">{{ __('home') }}</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>{{ __('contact_us') }}</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="gauto-contact-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-7">
                  <div class="contact-left">
                     <h3>{{ __('get_in_touch') }}</h3>
                     <form>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="single-contact-field">
                                 <input type="text" required placeholder="{{ __('enter_name_surname') }}">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="single-contact-field">
                                 <input type="email" required placeholder="{{ __('enter_email') }}">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="single-contact-field">
                                 <input type="text" required placeholder="{{ __('subject') }}">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="single-contact-field">
                                 <input type="tel" required placeholder="{{ __('number') }}">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="single-contact-field">
                                 <textarea required></textarea>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="single-contact-field">
                                 <button type="submit" class="gauto-theme-btn"><i class="fa fa-paper-plane"></i>{{ __('send_message') }}</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-lg-5">
                  <div class="contact-right">
                     <h3>{{ __('contact_information') }}</h3>
                     <div class="contact-details">
                        <p><i class="fa fa-map-marker"></i> {{ $general_settings->address }} </p>
                        <div class="single-contact-btn"> 
                           <h4>{{ __('email_us') }}</h4>
                           @foreach (json_decode($general_settings->emails) as $email)
                           <div class="col-md-12 mt-2">
                               <a href="#">{{ $email }}</a>                               
                           </div>
                           @endforeach
                        </div>
                        <div class="single-contact-btn">
                           <h4>Call Us</h4>
                           @foreach (json_decode($general_settings->numbers) as $number)
                           <div class="col-md-12 mt-2">
                               <a href="#">{{ $number }}</a>                               
                           </div>
                           @endforeach
                        </div>
                        <div class="social-links-contact">
                           <h4>{{ __('follow_us') }}:</h4>
                           <ul>
                            @foreach (json_decode($general_settings->social_networks) as $sn)       
                            @php 
                                $network_icon = explode('.', $sn);
                            @endphp                         
                            <li><a href="https://{{ $sn }}" target="_blank"><i class="fa fa-{{ $network_icon[0] }}"></i></a></li>
                            @endforeach
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection