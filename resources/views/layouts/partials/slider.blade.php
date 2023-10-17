@if ($page_design->slide==1)
<section class="gauto-slider-area fix">
   <div class="gauto-slide owl-carousel">
      @foreach ($slides as $slide)
      <div class="gauto-main-slide" style="background-image: url('{{ asset('images/slides').'/'.$slide->image }}')">
         <div class="gauto-main-caption">
            <div class="gauto-caption-cell">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="slider-text">
                           <p>{{ $slide->title }}</p>
                           <h2>{!! $slide->content !!}</h2>
                           <a href="{{ route('car-listing') }}" class="gauto-btn">{{ __('reserve_now') }}</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>      
      @endforeach
   </div>
</section>
@endif