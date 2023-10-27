@extends('layouts.app')
@section('content')
<section class="gauto-breadcromb-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcromb-box">
                     <h3>{{ $service->title }}</h3>
                     <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.html">{{ __('home') }}</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>{{ $service->title }}</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="gauto-service-details-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-4">
                  <div class="service-details-left">
                     <div class="sidebar-widget">
                        <ul class="service-menu">
                           @foreach ($services as $service)
                           <li><a href="{{ route('services.show', $service->slug) }}">{{ $service->title }}</a></li>
                           @endforeach
                        </ul>
                     </div>
                     <div class="sidebar-widget">
                        <div class="service-page-banner">
                           <h3>40% off only for new members</h3>
                           <p>Fusce vulputate eleifend sapien. Vestibulum purus quam, risque</p>
                           <a href="#" class="gauto-btn">Reserve Now!</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="service-details-right">
                     <h3>{{ $service->title }}</h3>
                     {!! $service->content !!}
               </div>
            </div>
         </div>
      </section>
@endsection