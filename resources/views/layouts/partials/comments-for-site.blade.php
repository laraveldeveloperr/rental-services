@if ($page_design->comments_for_site==1)
<section class="gauto-testimonial-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h4>Some words</h4>
                     <h2>testimonial</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="testimonial-slider owl-carousel">
                     @foreach ($comments as $comment)
                     <div class="single-testimonial">
                        <div class="testimonial-text">
                           <p>
                              {!! $comment->comment !!}
                           </p>
                           <div class="testimonial-meta">
                              <div class="client-image">
                                 <img src="{{ asset('frontend/img/testimonial.jpg')}}" alt="testimonial" />
                              </div>
                              <div class="client-info">
                                 <h3>{{ $comment->name_surname }}</h3>
                                 <p>Xidmətin daimi istifadəçisi</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </section>
      @endif