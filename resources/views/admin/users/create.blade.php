@extends('admin.default')
@section('content')
<div class="card">
	<div class="card-header">
        <h3>{{ __('new') }}
            <div class="float-end">
                <a class="btn btn-danger btn-xs" href="{{ route(ADMIN.'.users.index') }}">
                    <span>
                        <i class="mdi mdi-arrow-left"></i>
                    </span>    
                    {{ __('admins') }}
                </a>
            </div>
        </h3>
        </div>
      <div class="card-body">
      <div class="card-body">
        <form class="forms-sample" action="{{ route(ADMIN.'.users.store') }}" method="POST" enctype="multipart/form-data">
			  @csrf
          <div class="row mb-3">
            <label for="name" class="col-sm-3 col-form-label">{{ __('name_surname') }}</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="{{ old('name') }}" name="name" id="name" placeholder="{{ __('enter_name_surname') }}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="email" class="col-sm-3 col-form-label">{{ __('email') }}</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="{{ old('email') }}" name="email" id="email" placeholder="{{ __('enter_email') }}">
            </div>
          </div>

		  <div class="row mb-3">
            <label for="password" class="col-sm-3 col-form-label">{{ __('set_password') }}</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" value="{{ old('password') }}" name="password" id="password" placeholder="{{ __('set_password') }}">
            </div>
          </div>

		  <div class="row mb-3">
            <label for="avatar" class="col-sm-3 col-form-label">{{ __('image') }}</label>
            <div class="col-sm-9">
			        <input type="file" name="avatar" id="myDropify"/ required>
            </div>
          </div>
          
          <div class="row mb-3">
            <label for="bio" class="col-sm-3 col-form-label">{{ __('about') }}</label>
            <div class="col-sm-9">
              <textarea id="summernote" name="bio" height="300"></textarea>
            </div>
          </div>

		  <div class="row mb-3">
				<label for="role" class="col-sm-3 col-form-label">{{ __('role') }}</label>
				<div class="col-sm-9">
					<select name="role" class="js-example-basic-single form-select" id="role">
						<option selected disabled>{{ __('select') }}</option>
						@foreach ($roles as $role)
							<option value="{{ $role->name }}">{{ $role->name }}</option>
						@endforeach
					</select>
				</div>
          	  </div>

		 
          <button type="submit" class="btn btn-primary me-2">{{ __('save') }}</button>
        </form>
      </div>
      </div>
    </div>
@endsection


@push('js')
  <script>
    $(document).ready(function () {

        $('#summernote').summernote({
          height: 300
        });
    });
  </script>
@endpush

