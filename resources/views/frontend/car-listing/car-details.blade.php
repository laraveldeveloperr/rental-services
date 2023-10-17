@extends('layouts.app')
@section('content')
<section class="gauto-breadcromb-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="breadcromb-box">
               <h3>Car Booking</h3>
               <ul>
                  <li><i class="fa fa-home"></i></li>
                  <li><a href="index.html">Home</a></li>
                  <li><i class="fa fa-angle-right"></i></li>
                  <li>car Booking</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="gauto-car-booking section_70">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="car-booking-image">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     @for ($i=0;$i<count($car->galleries);$i++)
                        <li data-target="#carouselExampleIndicators" data-slide-to="0"
                           class="{{ $i==0 ? 'active' : '' }}"></li>
                        @endfor

                  </ol>
                  <div class="carousel-inner">
                     @foreach ($car->galleries as $image_key => $image)
                     <div class="carousel-item {{ $image_key==0 ? 'active' : '' }}">
                        <img src="{{ asset('images/cars').'/'.$image->image }}" class="d-block w-100" alt="...">
                     </div>
                     @endforeach
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="car-booking-right">
               <p class="rental-tag">rental</p>
               <h3>{{ $car->brands->name }} {{ $car->models->name }}</h3>
               <div class="price-rating">
                  <div class="price-rent">
                     <h4>{{ $car->day_price }} AZN<span>/ Day</span></h4>
                  </div>
                  <div class="car-rating">
                     <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star-half-o"></i></li>
                     </ul>
                     <p>(123 rating)</p>
                  </div>
               </div>
               <div class="car-features clearfix mt-4">
                  <div class="table-responsive">
                     <table class="table">
                        <tr>
                           <td>{{ __('brand') }}</td>
                           <td><strong>{{ $car->brands->name }}</strong></td>
                        </tr>
                        <tr>
                           <td>{{ __('model') }}</td>
                           <td><strong>{{ $car->models->name }}</strong></td>
                        </tr>
                        <tr>
                           <td>{{ __('ban_type') }}</td>
                           <td><strong>{{ $car->ban_types->name }}</strong></td>
                        </tr>
                        <tr>
                           <td>{{ __('fuel_type') }}</td>
                           <td><strong>{{ $car->fuels->name }}</strong></td>
                        </tr>
                        <tr>
                           <td>{{ __('gear') }}</td>
                           <td><strong>{{ $car->gears->name }}</strong></td>
                        </tr>
                        <tr>
                           <td>{{ __('transmission') }}</td>
                           <td><strong>{{ $car->transmissions->name }}</strong></td>
                        </tr>
                        <tr>
                           <td>{{ __('engine') }}</td>
                           <td><strong>{{ $car->engines->name }}</strong></td>
                        </tr>
                     </table>
                  </div>
               </div>

               <div class="car-features clearfix mt-4">
                  <div class="row">
                     @foreach ($car->properties as $property)
                     <div class="col-md-4">
                        <div class="media">
                           <div class="media-body">
                              <i class=" text-danger fa fa-check mr-2"></i>
                              {{ $property->name }}
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
</section>
<section class="gauto-booking-form section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-12 mb-4">
            {!! $car->description !!}
         </div>
      </div>
      <div class="row">
         <div class="col-lg-8">
            <div class="booking-form-left">
               <div class="single-booking">
                  <h3>{{ __('reservation_informations') }}</h3>
                  <form method="POST" action="{{ route('reserve') }}">
                     @csrf
                     <div class="row">
                        <div class="col-md-6">
                           <p>
                              <input type="text" hidden id="brands_id" name="brands_id" value="{{ $car->brands_id }}">
                              <input type="text" hidden id="models_id" name="models_id" value="{{ $car->models_id }}">
                              <input type="text" hidden id="id" name="cars_id" value="{{ $car->id }}">
                              <input type="text" hidden id="price" name="price" value="{{ $car->day_price }}">
                              <input id="pick_up" required name="pick_up" placeholder="{{ __('start_date') }}"
                              data-select="datepicker" type="text">
                           </p>
                        </div>
                        <div class="col-md-6">
                           <p>
                              <input id="drop_off" required name="drop_off" placeholder="{{ __('end_date') }}"
                              data-select="datepicker" type="text">
                           </p>
                        </div>
                        <div class="col-md-6">
                           <p>
                              <input type="text" required name="name" placeholder="{{ __('name') }}">
                           </p>
                        </div>
                        <div class="col-md-6">
                           <p>
                              <input type="text" required name="surname" placeholder="{{ __('surname') }}">
                           </p>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <p>
                              <input type="email" required name="email" placeholder="{{ __('email') }}">
                           </p>
                        </div>
                        <div class="col-md-6">
                           <p>
                              <input type="tel" required name="phone" placeholder="{{ __('phone') }}">
                              <input type="text" hidden required name="total_price" id="calculated_price_input">
                           </p>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <p>
                              <textarea name="special_request" placeholder="{{ __('special_request') }}"></textarea>
                           </p>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-6">
                           <p>
                              <button type="button" class="gauto-theme-btn calculate-button">{{ __('calculate') }}</button>
                           </p>
                        </div>
                        <div class="col-6">
                           <p>
                              <button type="submit" class="gauto-theme-btn">{{ __('reserve') }}</button>
                           </p>
                        </div>
                        </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="booking-right">
               <h3>{{ __('Price') }}</h3>
               <div class="car-list-left">
                  <div class="sidebar-widget">
                     <span class="calculated_price">
                        {{ __('price_not_calculated_select_pick_up_and_drop_off_date_for_price') }}
                     </span>
                     <h3 class="price_calculated text-danger"></h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection

@push('js')
<script>
   $(document).ready(function() {
      // Form submit olayını dinle
      $('.calculate-button').on('click', function(event) {
         event.preventDefault();
         const dayPrice = $('#price').val();
         const pickUpDateStr = $('#pick_up').val();
         const dropOffDateStr = $('#drop_off').val();
         const pickUpDate = convertToDate(pickUpDateStr);
         const dropOffDate = convertToDate(dropOffDateStr);
         const timeDiff = dropOffDate - pickUpDate;
         const daysDifference = Math.ceil(timeDiff / (1000 * 3600 * 24));
         if (!isNaN(dayPrice) && !isNaN(daysDifference)) {
            const totalPrice = dayPrice * daysDifference;
            $('.calculated_price').html('');
            $('.price_calculated').html(totalPrice + ' AZN');
            $('#calculated_price_input').val(totalPrice);
         }
      });

      function convertToDate(dateStr) {
         const parts = dateStr.split('/');
         if (parts.length === 3) {
            const day = parseInt(parts[0], 10);
            const month = parseInt(parts[1] - 1, 10);
            const year = parseInt(parts[2], 10);
            return new Date(year, month, day);
         }
         return null;
      }
   });
</script>
@endpush