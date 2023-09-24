@extends('admin.default')
@section('content')
    <div class="card">
	<div class="card-header">
        <h3>{{ $car->brands->name }} {{ $car->models->name }}
            <div class="float-end">
                <a class="btn btn-danger btn-xs" href="{{ route(ADMIN.'.cars.index') }}">
                    <span>
                        <i class="mdi mdi-arrow-left"></i>
                    </span>    
                    Avtomobillər
                </a>
            </div>
        </h3>
        </div>
      <div class="card-body">
        <form class="forms-sample" action="{{ route(ADMIN.'.cars.update', $car->id) }}" method="POST" enctype="multipart/form-data">
			  @csrf
        @method('PUT')
          <div class="row mb-3">
            <label for="brands_id" class="col-sm-3 col-form-label">Marka</label>
            <div class="col-sm-9">
            <select name="brands_id" class="js-example-basic-single form-select brand-content" id="brands_id">
              <option selected disabled>Seçin</option>
              @foreach ($brands as $brand)
                <option value="{{ $brand->id }}" {{ $car->brands_id==$brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
              @endforeach
            </select>
            </div>
          </div>
          
          <div class="row mb-3">
            <label for="models_id" class="col-sm-3 col-form-label">Model</label>
            <div class="col-sm-9">
            <select name="models_id" class="js-example-basic-single form-select model-content" id="models_id">
              @foreach ($models as $model)
                <option value="{{ $model->id }}" {{ $car->models_id==$model->id ? 'selected' : '' }}>{{ $model->name }}</option>
              @endforeach
            </select>
            </div>
          </div>

          <div class="row mb-3">
            <label for="ban_types_id" class="col-sm-3 col-form-label">Ban növü</label>
            <div class="col-sm-9">
            <select name="ban_types_id" class="js-example-basic-single form-select" id="ban_types_id">
              <option selected disabled>Seçin</option>
              @foreach ($ban_types as $type)
                <option value="{{ $type->id }}" {{ $car->ban_types_id==$type->id ? 'selected' : '' }}>{{ $type->name }}</option>
              @endforeach
            </select>
            </div>
          </div>

          <div class="row mb-3">
            <label for="fuels_id" class="col-sm-3 col-form-label">Yanacaq</label>
            <div class="col-sm-9">
            <select name="fuels_id" class="js-example-basic-single form-select" id="fuels_id">
              <option selected disabled>Seçin</option>
              @foreach ($fuels as $fuel)
                <option value="{{ $fuel->id }}" {{$car->fuels_id==$fuel->id ? 'selected' : '' }}>{{ $fuel->name }}</option>
              @endforeach
            </select>
            </div>
          </div>

          <div class="row mb-3">
            <label for="gears_id" class="col-sm-3 col-form-label">Ötürücü</label>
            <div class="col-sm-9">
            <select name="gears_id" class="js-example-basic-single form-select" id="gears_id">
              <option selected disabled>Seçin</option>
              @foreach ($gears as $gear)
                <option value="{{ $gear->id }}" {{$car->gears_id==$gear->id ? 'selected' : '' }}>{{ $gear->name }}</option>
              @endforeach
            </select>
            </div>
          </div>

          <div class="row mb-3">
            <label for="transmissions_id" class="col-sm-3 col-form-label">Sürət qutusu</label>
            <div class="col-sm-9">
            <select name="transmissions_id" class="js-example-basic-single form-select" id="transmissions_id">
              <option selected disabled>Seçin</option>
              @foreach ($transmissions as $transmission)
                <option value="{{ $transmission->id }}" {{$car->transmissions_id==$transmission->id ? 'selected' : '' }}>{{ $transmission->name }}</option>
              @endforeach
            </select>
            </div>
          </div>

          <div class="row mb-3">
            <label for="engines_id" class="col-sm-3 col-form-label">Mator həcmi</label>
            <div class="col-sm-9">
            <select name="engines_id" class="js-example-basic-single form-select" id="engines_id">
              <option selected disabled>Seçin</option>
              @foreach ($engines as $engine)
                <option value="{{ $engine->id }}" {{$car->engines_id==$engine->id ? 'selected' : '' }}>{{ $engine->name }}</option>
              @endforeach
            </select>
            </div>
          </div>

          <div class="row mb-3">
            <label for="properties_id" class="col-sm-3 col-form-label">Avtomobil özəllikləri</label>
            <div class="col-sm-9">
            <select name="properties_id[]" class="js-example-basic-single form-select" id="properties_id" multiple>
              @foreach ($properties as $property)
                <option value="{{ $property->id }}" {{ in_array($property->id, $car_properties) ? 'selected' : '' }}>{{ $property->name }}</option>
              @endforeach
            </select>
            </div>
          </div>

          <div class="row mb-3">
            <label for="cars_faqs_id" class="col-sm-3 col-form-label">FAQs</label>
            <div class="col-sm-9">
            <select name="cars_faqs_id[]" class="js-example-basic-single form-select" id="cars_faqs_id" multiple>
              @foreach ($faqs as $element)
                <option value="{{ $element->id }}" {{ in_array($element->id, $faq_cars) ? 'selected' : '' }}>{{ $element->question }}</option>
              @endforeach
            </select>
            </div>
          </div>
          
          <div class="row mb-3">
            <label for="licence_plate" class="col-sm-3 col-form-label">Dövlət qeydiyyat nişanı</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="licence_plate" value="{{$car->licence_plate }}" id="licence_plate" placeholder="Dövlət qeydiyyat nişanını daxil edin">
            </div>
          </div>

          <div class="row mb-3">
            <label for="manufacturing_year" class="col-sm-3 col-form-label">İstehsal tarixi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="manufacturing_year" value="{{$car->manufacturing_year }}" id="manufacturing_year" placeholder="Istehsal tarixini daxil edin">
            </div>
          </div>

          <div class="row mb-3">
            <label for="colors_id" class="col-sm-3 col-form-label">Rəng</label>
            <div class="col-sm-9">
              <select name="colors_id" class="js-example-basic-single form-select" id="colors_id">
                @foreach ($colors as $color)
                  <option value="{{ $color->id }}" {{$car->colors_id==$color->id ? 'selected' : '' }}>{{ $color->name }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="row mb-3">
            <label for="day_price" class="col-sm-3 col-form-label">Günlük qiymət</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="{{$car->day_price }}" name="day_price" id="day_price" placeholder="Günlük qiyməti daxil edin">
            </div>
          </div>

          <div class="row mb-3">
            <label for="week_price" class="col-sm-3 col-form-label">Həftəlik qiymət</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="{{$car->week_price }}" name="week_price" id="week_price" placeholder="Həftəlik qiyməti daxil edin">
            </div>
          </div>

          <div class="row mb-3">
            <label for="month_price" class="col-sm-3 col-form-label">Aylıq qiymət</label>
            <div class="col-sm-9">
              <input type="text" class="form-control"  value="{{$car->month_price }}" name="month_price" id="month_price" placeholder="Aylıq qiyməti daxil edin">
            </div>
          </div>
          
          <div class="row mb-3">
            <label for="description" class="col-sm-3 col-form-label">Açıqlama</label>
            <div class="col-sm-9">
              <textarea id="summernote" name="description" height="300">{{$car->description }}</textarea>
            </div>
          </div>

          <div class="row mb-3">
            <label for="main_image" class="col-sm-3 col-form-label">Şəkil</label>
            <div class="col-sm-9">
			        <input type="file" name="main_image" id="myDropify"  data-default-file="{{ asset('images/cars').'/'.$car->main_image }}"/>
            </div>
          </div>

		      <div class="row mb-3">
            <label for="status" class="col-sm-3 col-form-label">Status</label>
            <div class="col-sm-9">
            <select name="status" class="js-example-basic-single form-select" id="status">
              <option selected disabled>Seçin</option>
              <option value="1" {{$car->status==1 ? 'selected' : '' }}>Aktiv</option>
              <option value="0" {{$car->status==0 ? 'selected' : '' }}>Deaktiv</option>
            </select>
            </div>
          </div>

		 
          <button type="submit" class="btn btn-primary me-2">Daxil et</button>
        </form>
      </div>
    </div>
@endsection

@push('js')
  <script>
    $(document).ready(function () {

        $('#summernote').summernote({
          height: 300
        });

        $("#licence_plate").inputmask("99-AA-999", {
            "placeholder": "*"
        });

        $('.brand-content').change(function () {
          var brandId = $(this).val();
          if (brandId) {
              $.ajax({
                  type: "GET",
                  url: "{{ url('admin/models-by-brand-id/') }}"+'/'+brandId,
                  success: function (data) {
                      $('.model-content').empty();
                      $('.model-content').append('<option value="">Model Seçin</option>');
                      $.each(data, function (key, value) {
                          $('.model-content').append('<option value="' + value.id + '">' + value.name + '</option>');
                      });
                  }
              });
          } else {
                $('.model-content').empty();
                $('.model-content').append('<option value="">Model Seçin</option>');
            }
        });
    });
  </script>
@endpush

