@extends('layouts.app')
@push('css')
<style>
   /* Stil için özel CSS sınıfları ekledik */
   .faq-card {
      border: 1px solid #ddd;
      margin-bottom: 10px;
   }

   .faq-card-header {
      background-color: #f7f7f7;
   }

   .faq-question {
      font-weight: bold;
   }

   .faq-answer {
      padding: 15px;
   }
</style>
@endpush
@section('content')
<section class="gauto-breadcromb-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="breadcromb-box">
               <h3>{{ __('car_booking') }}</h3>
               <ul>
                  <li><i class="fa fa-home"></i></li>
                  <li><a href="index.html">{{ __('home') }}</a></li>
                  <li><i class="fa fa-angle-right"></i></li>
                  <li>{{ __('car_booking') }}</li>
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
               <a class="rental-tag" href="#rent-form">{{ __('reserve_now') }}</a>
               <h3>{{ $car->brands->name }} {{ $car->models->name }}</h3>
               <div class="price-rating">
                  <div class="price-rent">
                     <h4>
                        @php
                        $discountedPrice = null;
                        if(isset($car->discounts) && $car->discounts->type == 1) {
                        $discountedPrice = $car->day_price - ($car->day_price * $car->discounts->discount / 100);
                        }elseif(isset($car->discounts) && $car->discounts->type !=1) {
                        $discountedPrice = $car->discounts->discount;
                        }
                        @endphp

                        @if($discountedPrice && $car->discounts->type == 1)
                        <del class="text-danger">{{ $car->day_price }} AZN</del><br>
                        {{ $discountedPrice }} AZN<span>/ Day</span>
                        @elseif($discountedPrice && $car->discounts->type !=1)
                        {{ $car->day_price }} AZN<span>/ Day</span>
                        <small class="text-success">( -{{ $discountedPrice }} AZN) </small>
                        @else
                        {{ $car->day_price }} AZN<span>/ Day</span>
                        @endif
                     </h4>
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
      <div class="row mb-4">
         <div class="col-md-12 mb-4">
            {!! $car->description !!}
         </div>
         <div class="col-md-12">
            <div id="accordion">
               @foreach ($car->faqs as $faq)
               <div class="card faq-card">
                  <div class="card-header faq-card-header" id="headingThree">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed faq-question text-dark" data-toggle="collapse"
                           data-target="#{{ $faq->id }}" aria-expanded="false" aria-controls="{{ $faq->id }}">
                           {{ $faq->question }}
                        </button>
                     </h5>
                  </div>
                  <div id="{{ $faq->id }}" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                     <div class="card-body faq-answer">
                        {{ $faq->answer }}
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
      <div class="row mt-4" id="rent-form">
         <div class="col-lg-8">
            <div class="booking-form-left">
               <div class="single-booking">
                  <h3>{{ __('reservation_informations') }}</h3>

                  <?php
                        $start_date = DateTime::createFromFormat('d/m/Y', $_GET['start_date']);
                        $end_date = DateTime::createFromFormat('d/m/Y', $_GET['end_date']);
                        $discount_type= null;
                        $discount= 0;
                        $total_price = 0; 
                        $discounted_price = 0; 

                        if ($start_date && $end_date) {
                           $day_diff = $start_date->diff($end_date)->days;
                           $day_price = $car->day_price;
                           $total_price = $day_price*$day_diff;
                           $discounted_price = $total_price;
                           if($car->discounts)
                           {
                              if($car->discounts->type == 1)
                              {
                                 $discount = $car->discounts->discount;
                                 $discount_type=1;
                                 $discount=$car->discounts->discount;
                                 $discounted_price = $day_price*$day_diff - ($day_price*$day_diff * $car->discounts->discount/100);
                              }
                              else {
                                 $discount = $car->discounts->discount;
                                 $discount_type= 0;
                                 $discount=$car->discounts->discount;
                                 $discounted_price = $day_price*$day_diff - $car->discounts->discount;
                              }
                           }
                        }
                     ?>
                  <form method="POST" action="{{ route('reserve') }}">
                     @csrf
                     <div class="row">
                        <div class="col-md-6">
                           <p>
                              <input type="text" hidden id="brands_id" name="brands_id" value="{{ $car->brands_id }}">
                              <input type="text" hidden id="models_id" name="models_id" value="{{ $car->models_id }}">
                              <input type="text" hidden id="cars_id" name="cars_id" value="{{ $car->id }}">
                              <input type="text" hidden id="price" name="price" value="{{ $car->day_price }}">
                              <input type="text" hidden id="total_price" name="total_price" value="{{ $total_price }}">
                              <input type="text" hidden id="discounted_price" name="discounted_price"
                                 value="{{ $discounted_price }}">
                              <input type="text" hidden id="discount_type" name="discount_type"
                                 value="{{ $discount_type }}">
                              <input type="text" hidden id="discount" name="discount" value="{{ $discount }}">
                              <input id="pick_up" required name="pick_up" placeholder="{{ __('start_date') }}"
                                 data-select="datepicker"
                                 value="{{ isset($_GET['start_date']) ? $_GET['start_date'] : '' }}" type="text">
                           </p>
                        </div>
                        <div class="col-md-6">
                           <p>
                              <input id="drop_off" required name="drop_off" placeholder="{{ __('end_date') }}"
                                 data-select="datepicker"
                                 value="{{ isset($_GET['end_date']) ? $_GET['end_date'] : '' }}" type="text">
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
                        <div class="col-4">
                           <p>
                              <a href="https://wa.me/{{ json_decode($general_settings->numbers,true)[0] }}?text=https://rentalservices.az/{{ $car->id }}/car-details">
                              <button type="button" class="gauto-theme-btn">{{ __('whatsapp') }}</button>
                              </a>
                           </p>
                        </div>
                        <div class="col-4">
                           <p>
                              <button type="button"
                                 class="gauto-theme-btn calculate-button">{{ __('calculate') }}</button>
                           </p>
                        </div>
                        <div class="col-4">
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
                        <div id="result-price">
                           <table class="table table-bordered">
                              <tr>
                                 <td class="text-dark">{{ __('day_price') }}</td>
                                 <td class="text-dark">{{ $day_price }} AZN</td>
                              </tr>
                              <tr>
                                 <td class="text-dark">{{ __('day') }}</td>
                                 <td class="text-dark">{{ $day_diff }} {{ __('day') }}</td>
                              </tr>
                              <tr>
                                 <td class="text-dark">{{ __('discount') }}</td>
                                 <td class="text-danger">-{{ $discount }} {{ $discount_type==1 ? '%' : 'AZN' }}</td>
                              </tr>
                              <tr>
                                 <td class="text-dark">{{ __('discounted_price') }}</td>
                                 <td class="text-dark">{{ $discounted_price }} AZN</td>
                              </tr>
                           </table>
                        </div>
                     </span>
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
      $('.calculate-button').on('click', function(event) {
         event.preventDefault();
         const cars_id = $('#cars_id').val();
         const brands_id = $('#brands_id').val();
         const models_id = $('#models_id').val();
         const dayPrice = $('#price').val();
         const pickUpDateStr = $('#pick_up').val();
         const dropOffDateStr = $('#drop_off').val();
         const pickUpDate = convertToDate(pickUpDateStr);
         const dropOffDate = convertToDate(dropOffDateStr);
         $.ajax({
            url: "{{ route('calculate-price') }}",
            method: "GET",
            data: {
               "cars_id": cars_id,
               "brands_id": brands_id,
               "models_id": models_id,
               "start_date": pickUpDateStr,
               "end_date": dropOffDateStr,
               "day_price": dayPrice,
            },
            success: function(response) {
               $('#result-price').html('');
               $('#result-price').html(response);
            }
         })
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