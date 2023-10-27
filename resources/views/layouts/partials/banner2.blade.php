@if($page_design->banner2==1)
<section class="gauto-call-area">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="call-box" style="background: url('{{ asset('images').'/'.$page_design->banner2_image }}'); background-size:cover; height:250px;">
                  </div>
               </div>
            </div>
         </div>

      </section>
      @endif