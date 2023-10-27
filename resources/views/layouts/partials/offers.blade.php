@if ($page_design->offers==1)
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div class="site-heading">
            <h4>Come with</h4>
            <h2>Hot offers</h2>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="offer-tabs">
            <ul class="nav nav-tabs" id="offerTab" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all"
                     aria-selected="true">All Brands</a>
               </li>
               @foreach ($brands as $brand)
               <li class="nav-item">
                  <a class="nav-link" id="{{$brand->slug}}-tab" data-toggle="tab" href="#{{$brand->slug}}" role="tab"
                     aria-controls="{{$brand->slug}}" aria-selected="false">{{$brand->name}}</a>
               </li>
               @endforeach
            </ul>
            <div class="tab-content" id="offerTabContent">
               <!-- All Tab Start -->
               <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                  <div class="row">
                     @php

                     $start_date_ = Carbon\Carbon::now()->startOfDay();
                     $end_date_ = $start_date_->copy()->addWeek();

                     $start_date = $start_date_->format('d/m/Y');
                     $end_date = $end_date_->format('d/m/Y');
                     @endphp

                     @foreach ($cars as $car)

                     <div class="col-lg-4">
                        <div class="single-offers">
                           <div class="offer-image">
                              <a
                                 href="{{ route('car-details', $car->id) }}?brands_id={{ $car->brands_id }}&start_date={{ $start_date }}&end_date={{ $end_date }}">
                                 <img src="{{ asset('images/cars').'/'.$car->main_image}}" alt="offer 1" />
                              </a>
                           </div>
                           <div class="offer-text">
                              <a
                                 href="{{ route('car-details', $car->id) }}?brands_id={{ $car->brands_id }}&start_date={{ $start_date }}&end_date={{ $end_date }}">
                                 <h3>{{ $car->brands->name }} {{ $car->models->name }}</h3>
                              </a>
                              <h4>{{ $car->day_price }} AZN<span>/ Day</span></h4>
                              <ul>
                                 <li><i class="fa fa-car"></i>Buraxılış ili: {{ $car->manufacturing_year }}</li>
                                 <li><i class="fa fa-cogs"></i>{{ $car->transmissions->name }}</li>
                                 <li><i class="fa fa-dashboard"></i>{{ $car->engines->name }}</li>
                              </ul>
                              <div class="offer-action">
                                 <a href="{{ route('car-details', $car->id) }}?brands_id={{ $car->brands_id }}&start_date={{ $start_date }}&end_date={{ $end_date }}"
                                    class="offer-btn-1">Rent Car</a>
                                 <a href="{{ route('car-details', $car->id) }}?brands_id={{ $car->brands_id }}&start_date={{ $start_date }}&end_date={{ $end_date }}"
                                    class="offer-btn-2">Details</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
               <!-- All Tab End -->

               <!-- Nissan Tab Start -->
               @foreach ($brands as $brand)
               <div class="tab-pane fade" id="{{$brand->slug}}" role="tabpanel" aria-labelledby="{{$brand->slug}}-tab">
                  <div class="row">
                     @foreach ($brand->cars as $car)
                     <div class="col-lg-4">
                        <div class="single-offers">
                           <div class="offer-image">
                              <a href="{{ route('car-details', $car->id) }}">
                                 <img src="{{ asset('images/cars').'/'.$car->main_image}}" alt="offer 1" />
                              </a>
                           </div>
                           <div class="offer-text">
                              <a href="{{ route('car-details', $car->id) }}">
                                 <h3>{{ $brand->name }} {{ $car->models->name }}</h3>
                              </a>
                              <h4>{{ $car->day_price }} AZN<span>/ Day</span></h4>
                              <ul>
                                 <li><i class="fa fa-car"></i>Buraxılış ili: {{ $car->manufacturing_year }}</li>
                                 <li><i class="fa fa-cogs"></i>{{ $car->transmissions->name }}</li>
                                 <li><i class="fa fa-dashboard"></i>{{ $car->engines->name }}</li>
                              </ul>
                              <div class="offer-action">
                                 <a href="{{ route('car-details', $car->id) }}" class="offer-btn-1">Rent Car</a>
                                 <a href="{{ route('car-details', $car->id) }}" class="offer-btn-2">Details</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
               @endforeach
               <!-- Nissan Tab End -->

            </div>
         </div>
      </div>
   </div>
</div>
</section>
@endif

@push('js')
<script>
   $(document).ready(function() {
      $('.nav-link').on('click', function(e) {
         e.preventDefault(); // Sayfa yenilenmesini önler
         var target = $(this).attr('href');
         $('.tab-pane').removeClass('show active');
         $(target).addClass('show active');
      });
   });
</script>
@endpush