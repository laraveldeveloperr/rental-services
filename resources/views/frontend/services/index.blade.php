@extends('layouts.app')
@section('content')
<section class="gauto-breadcromb-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcromb-box">
                     <h3>All Service</h3>
                     <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>All Service</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="gauto-service-area service-page-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h4>see our</h4>
                     <h2>Latest Services</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               @foreach ($services as $service_key => $service)
               <div class="col-md-4">
                  <div class="single-service">
                     <span class="service-number">{{ $service_key+1 }}</span>
                     <div class="service-icon">
                        <img src="{{ asset('images/services').'/'.$service->image }}" alt="{{ $service->title }}">
                     </div>
                     <div class="service-text">
                        <a href="{{ route('services.show', $service->slug) }}">
                           <h3>{{ $service->title }}</h3>
                        </a>
                        
                        <p>{{ substr(strip_tags($service->content), 0, 150) }}...</p>
                     </div>
                  </div>
               </div>
               @endforeach
               
            </div>
         </div>
      </section>
@endsection