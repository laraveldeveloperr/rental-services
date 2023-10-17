@extends('layouts.app')
@section('content')
<section class="gauto-breadcromb-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcromb-box">
                     <h3>Gallery</h3>
                     <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Gallery</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="gauto-gallery-area section_70">
         <div class="container">
            <div class="row" id="lightgallery">
               @foreach ($gallery as $image)
               <div class="col-lg-4" data-src="{{ asset('images/cars').'/'.$image->image }}">
                  <div class="single-gallery">
                     <div class="img-holder">
                        <img src="{{ asset('images/cars').'/'.$image->image }}" alt="gallery 1">
                        <div class="overlay-content">
                           <div class="inner-content">
                              <div class="title-box">
                                 <h3><a href="#">Rental MMC</a></h3>
                              </div>
                           </div>
                        </div>
                        <div class="link-zoom-button">
                           <div class="single-button">
                              <a href="#"><span class="fa fa-link"></span>Details</a>
                           </div>
                           <div class="single-button">
                              <a class="zoom lightbox-image" href="{{ asset('images/cars').'/'.$image->image }}">
                              <span class="fa fa-search"></span>Zoom
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
               
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="load-more">
                     <a href="#" class="gauto-btn">More Pictures</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection