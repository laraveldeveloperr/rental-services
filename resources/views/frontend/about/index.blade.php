@extends('layouts.app')
@section('content')
<section class="gauto-breadcromb-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcromb-box">
                     <h3>About Us</h3>
                     <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>About Us</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="about-page-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="about-page-left">
                     <h4>About Us</h4>
                     <p>{!! $general_settings->about_text !!}</p>
                     <div class="about-page-call">
                        <div class="page-call-icon">
                           <i class="fa fa-phone"></i>
                        </div>
                        <div class="call-info">
                           <p>Need any Help?</p>
                           <h4><a href="#">{{ json_decode($general_settings->numbers)[0] }}</a></h4>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="about-page-right">
                     <img src="{{ asset('assets/img/about-page.jpg') }}" alt="about page">
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="gauto-about-promo section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="about-promo-text">
                     <h3>Bizim dəyərimiz <span> Sizin rahatlığınızdır!</span></h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="about-promo-image">
                     <img src="{{ asset('assets/img/cars.png') }}" alt="about promo">
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      @include('layouts.partials.banner1')
      <!-- team olacaq -->

@endsection