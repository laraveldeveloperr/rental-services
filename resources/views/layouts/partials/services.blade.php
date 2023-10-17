@if($page_design->services==1)
<section class="gauto-service-area section_70">
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
               <div class="col-md-12">
                  <div class="service-slider owl-carousel">
                     @foreach ($services as $key_service => $service)   
                     <div class="single-service">
                        <span class="service-number">{{ $key_service+1 }}</span>
                        <div class="service-icon">
                           <img src="{{ asset('images/services').'/'.$service->image}}" alt="{{ $service->title }}" />
                        </div>
                        <div class="service-text">
                           <a href="{{ route('services.show', $service->slug) }}">
                              <h3>{{ $service->title }}</h3>
                           </a>
                           <p>{{ substr(strip_tags($service->content), 0, 150) }}...</p>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </section>
      @endif