@if ($page_design->banner1==1)
<section class="gauto-promo-area">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="promo-box-left">
                     <img src="{{ asset('images').'/'.$page_design->banner1_image}}" alt="promo car" />
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="promo-box-right">
                     {!! $general_settings->banner1_text !!}
                  </div>
               </div>
            </div>
         </div>
      </section>
@endif
