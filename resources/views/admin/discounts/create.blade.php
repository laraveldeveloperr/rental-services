@extends('admin.default')
@section('content')
    <div class="card">
	<div class="card-header">
        <h3>Yeni endirim
            <div class="float-end">
                <a class="btn btn-danger btn-xs" href="{{ route(ADMIN.'.discounts.index') }}">
                    <span>
                        <i class="mdi mdi-arrow-left"></i>
                    </span>    
                    Endirimlər
                </a>
            </div>
        </h3>
        </div>
      <div class="card-body">
        <form class="forms-sample" action="{{ route(ADMIN.'.discounts.store') }}" method="POST" enctype="multipart/form-data">
			@csrf

          <div class="row mb-3" id="brand-section">
            <label for="brands_id" class="col-sm-2 col-form-label">Marka</label>
            <div class="col-sm-10">
            <select name="brands_id" class="js-example-basic-single form-select brand-content" id="brands_id">
              <option selected disabled>Seçin</option>
              @foreach ($brands as $brand)
                <option value="{{ $brand->id }}" {{ old('brands_id')==$brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
              @endforeach
            </select>
            </div>
          </div>

          <div class="row mb-3" id="model-section">
            <label for="models_id" class="col-sm-2 col-form-label">Model</label>
            <div class="col-sm-10">
            <select name="models_id" class="js-example-basic-single form-select model-content" id="models_id">
              <option selected disabled>Seçin</option>
              @foreach ($models as $model)
                <option value="{{ $model->id }}" {{ old('models_id')==$model->id ? 'selected' : '' }}>{{ $model->name }}</option>
              @endforeach
            </select>
            </div>
          </div>

          <div class="row mb-3" id="car-section">
            <label for="models_id" class="col-sm-2 col-form-label">Avtomobil</label>
            <div class="col-sm-10">
            <select name="cars_id" class="js-example-basic-single form-select car-content" id="cars_id">
              <option selected disabled>Seçin</option>
              @foreach ($cars as $car)
                <option value="{{ $car->id }}" {{ old('cars_id')==$car->id ? 'selected' : '' }}>{{ $car->brands->name }} {{ $car->models->name }} {{ $car->name }}</option>
              @endforeach
            </select>
            </div>
          </div>

          <div class="row mb-3" id="car-section">
            <label for="type" class="col-sm-2 col-form-label">Endirim</label>
            <div class="col-sm-5">
              <select name="type" class="js-example-basic-single form-select discount-type" id="type">
                <option selected disabled>Seçin</option>
                <option value="1">Faizlə</option>
                <option value="0">Manatla</option>
              </select>
            </div>
            <div class="col-sm-5">
              <input type="number" name="discount" class="form-control" id="discount" placeholder="Endirimi daxil edin">
            </div>
          </div>

          <div class="row mb-3" id="car-section">
            <label for="type" class="col-sm-2 col-form-label">Tarix aralığı</label>
              <div class="col-md-5">
                <input type="date" class="form-control" name="start_date" id="start_date">
              </div>
              <div class="col-sm-5">
                <input type="date" class="form-control" name="end_date" id="end_date">
              </div>
          </div>
		      
          <div class="row mb-3">
            <label for="status" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
              <select name="status" class="js-example-basic-single form-select" id="status">
                <option selected disabled>Seçin</option>
                <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Aktiv</option>
                <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Deaktiv</option>
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

    $('.modal-content').change(function () {
      var modalId = $(this).val();
      if (modalId) {
          $.ajax({
              type: "GET",
              url: "{{ url('admin/cars-by-model-id/') }}"+'/'+modalId,
              success: function (data) {
                  $('.model-content').empty();
                  $('.model-content').append('<option value="">Avtomobil Seçin</option>');
                  $.each(data, function (key, value) {
                      $('.model-content').append('<option value="' + value.id + '">' + value.name + '</option>');
                  });
              }
          });
      } else {
            $('.model-content').empty();
            $('.model-content').append('<option value="">Avtomobil Seçin</option>');
      }
    });
  </script>
@endpush

