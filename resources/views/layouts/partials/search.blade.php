@if ($page_design->search==1)   
<section class="gauto-find-area">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="find-box">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="find-text">
                              <h3>{{ __('search_your_best_cars_here') }}.</h3>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="find-form">
                              <form method="GET" action="{{ route('search') }}">
                              <div class="row">
                                    <div class="col-md-12">
                                       <p>
                                          <select class="brands_id" name="brands_id">
                                             <option data-display="Marka">{{ __('brands') }}</option>
                                             @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                             @endforeach
                                          </select>
                                       </p>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-4">
                                       <p>
                                          <input id="start_date" name="start_date"  placeholder="{{ __('select_start_date') }}" data-select="datepicker" type="text">
                                       </p>
                                    </div>
                                    <div class="col-md-4">
                                       <p>
                                          <input id="end_date" name="end_date" placeholder="{{ __('select_end_date') }}" data-select="datepicker" type="text">
                                       </p>
                                    </div>
                                    <div class="col-md-4">
                                       <p>
                                          <button type="submit" class="gauto-theme-btn">{{ __('find_car') }}</button>
                                       </p>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endif

@push('js')
   <script>
      $(document).ready(function(){
         $('.brands_id').change(function () {
            var brandId = $(this).val();
            if (brandId) {
                $.ajax({
                    type: "GET",
                    url: "{{ url('models-by-brand-id/') }}"+'/'+brandId,
                    success: function (data) {
                        $('.models_id').empty();
                        var html = '<span class="current"></span>';
                        html +='<ul class="list">';
                        $.each(data, function (key, value) {
                           html += '<li data-value="'+ value.id+'" class="option" >'+value.name+'</li>';
                        });
                        html +='</ul>';

                        $('.models_id').append(html);
                    }
                });
            } else {
                  $('.models_id').empty();
                  $('.models_id').append('<option value="">Model Seçin</option>');
              }
          });

          $('.models_id').change(function () {
            var selectedValue = $(this).val();
            var currentSpan = $(this).siblings('.current');
            currentSpan.text(selectedValue);
         });
      })
   </script>
@endpush