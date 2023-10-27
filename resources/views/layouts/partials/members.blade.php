<section class="gauto-driver-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h4>{{ __('experts') }}</h4>
                     <h2>{{ __('team') }}</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               @foreach ($teams as $member)
               <div class="col-lg-3 col-sm-6">
                  <div class="single-driver">
                     <div class="driver-image">
                        <img src="{{ asset('images/team').'/'.$member->image }}" alt="{{ $member->name_surname }}" />
                     </div>
                     <div class="driver-text">
                        <div class="driver-name">
                           <a href="#">
                              <h3>{{ $member->name_surname }}</h3>
                           </a>
                           <p>{{ $member->experience }}</p>
                           <p>{{ $member->job }}</p>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
               
         </div>
      </section>