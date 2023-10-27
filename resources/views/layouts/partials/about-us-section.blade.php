@if ($page_design->about_us_section==1)
<section class="gauto-about-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="about-left">
                     <h4>about us</h4>
                     <p>{!! $general_settings->home_about_section_text !!}</p>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="about-right">
                     <img src="{{ asset('images').'/'.$page_design->home_about_section_image}}" alt="car" />
                  </div>
               </div>
            </div>
         </div>
      </section>
   @endif