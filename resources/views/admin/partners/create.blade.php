@extends('admin.default')
@push('css')

@endpush
@section('content')
<div class="card">
  <div class="card-header">
    <h3>{{ __('new') }}
      <div class="float-end">
        <a class="btn btn-danger btn-xs" href="{{ route(ADMIN.'.partners.index') }}">
          <span>
            <i class="mdi mdi-arrow-left"></i>
          </span>
          {{ __('partners') }}
        </a>
      </div>
    </h3>
  </div>
  <div class="card-body">
   
    <form action="{{ route(ADMIN.'.partners.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      
          <div class="row mb-3">
            <label for="company_name" class="col-sm-3 col-form-label">{{ __('company_name') }}</label>
            <div class="col-sm-9">
              <input type="text" value="{{ old('company_name') }}" class="form-control" name="company_name" id="company_name"
                placeholder="{{ __('company_name') }}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="address" class="col-sm-3 col-form-label">{{ __('address') }}</label>
            <div class="col-sm-9">
              <input type="text" value="{{ old('address') }}" class="form-control" name="address" id="address"
                placeholder="{{ __('address') }}">
            </div>
          </div>

          <div class="row mb-3">
            <label for="voen" class="col-sm-3 col-form-label">{{ __('voen') }}</label>
            <div class="col-sm-9">
              <input type="text" value="{{ old('voen') }}" class="form-control" name="voen" id="voen"
                placeholder="{{ __('voen') }}">
            </div>
          </div>

          <div class="row mb-3">
            <label for="phone_number" class="col-sm-3 col-form-label">{{ __('phone_number') }}</label>
            <div class="col-sm-9">
              <input type="text" value="{{ old('phone_number') }}" class="form-control" name="phone_number" id="phone_number"
                placeholder="{{ __('phone_number') }}">
            </div>
          </div>

          <div class="row mb-3">
            <label for="email" class="col-sm-3 col-form-label">{{ __('email') }}</label>
            <div class="col-sm-9">
              <input type="text" value="{{ old('email') }}" class="form-control" name="email" id="email"
                placeholder="{{ __('email') }}">
            </div>
          </div>


          <div class="row mb-3">
            <label for="relevant_person" class="col-sm-3 col-form-label">{{ __('relevant_person') }}</label>
            <div class="col-sm-9">
              <input type="text" value="{{ old('relevant_person') }}" class="form-control" name="relevant_person" id="relevant_person"
                placeholder="{{ __('relevant_person') }}">
            </div>
          </div>


        <div class="row mb-3">
          <label for="logo" class="col-sm-3 col-form-label">{{ __('logo') }}</label>
          <div class="col-sm-9">
            <input type="file" name="logo" id="myDropify" />
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