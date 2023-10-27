@extends('admin.default')
@push('css')

@endpush
@section('content')
<div class="card">
  <div class="card-header">
    <h3>{{ __('new') }}
      <div class="float-end">
        <a class="btn btn-danger btn-xs" href="{{ route(ADMIN.'.brands.index') }}">
          <span>
            <i class="mdi mdi-arrow-left"></i>
          </span>
          {{ __('brands') }}
        </a>
      </div>
    </h3>
  </div>
  <div class="card-body">
   
    <form action="{{ route(ADMIN.'.teams.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      
          <div class="row mb-3">
            <label for="name_surname" class="col-sm-3 col-form-label">{{ __('name_surname') }}</label>
            <div class="col-sm-9">
              <input type="text" value="{{ old('name_surname') }}" class="form-control" name="name_surname" id="name_surname"
                placeholder="{{ __('name_surname') }}">
            </div>
          </div>

          <div class="row mb-3">
            <label for="experience" class="col-sm-3 col-form-label">{{ __('experience') }}</label>
            <div class="col-sm-9">
              <input type="text" value="{{ old('experience') }}" class="form-control" name="experience" id="experience"
                placeholder="{{ __('experience') }}">
            </div>
          </div>

          <div class="row mb-3">
            <label for="job" class="col-sm-3 col-form-label">{{ __('job') }}</label>
            <div class="col-sm-9">
              <input type="text" value="{{ old('job') }}" class="form-control" name="job" id="job"
                placeholder="{{ __('job') }}">
            </div>
          </div>

        <div class="row mb-3">
          <label for="image" class="col-sm-3 col-form-label">{{ __('image') }}</label>
          <div class="col-sm-9">
            <input type="file" name="image" id="myDropify" />
          </div>
        </div>

        <div class="row mb-3">
          <label for="status" class="col-sm-3 col-form-label">{{ __('status') }}</label>
          <div class="col-sm-9">
            <select name="status" class="js-example-basic-single form-select" id="status">
              <option selected disabled>{{ __('select') }}</option>
              <option value="1">{{ __('active') }}</option>
              <option value="0">{{ __('deactive') }}</option>
            </select>
          </div>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary">{{ __('save') }}</button>
        </div>
    </form>
  </div>
</div>
@endsection