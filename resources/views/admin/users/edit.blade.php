@extends('admin.default')
@section('content')
    <div class="card">
	<div class="card-header">
        <h3>{{ $user->name }}
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
        <form class="forms-sample" action="{{ route(ADMIN.'.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
			@csrf
			@method("PUT")
          <div class="row mb-3">
            <label for="name" class="col-sm-3 col-form-label">{{ __('name_surname') }}</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="{{ $user->name }}" name="name" id="name" placeholder="{{ __('enter_name_surname') }}">
            </div>
          </div>

		  <div class="row mb-3">
            <label for="email" class="col-sm-3 col-form-label">{{ __('email') }}</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="{{ $user->email }}" name="email" id="email" placeholder="{{ __('enter_email') }}">
            </div>
          </div>

		  <div class="row mb-3">
            <label for="role" class="col-sm-3 col-form-label">{{ __('role') }}</label>
            <div class="col-sm-9">
			  <select name="role" class="js-example-basic-single form-select" id="role">
				<option selected disabled>{{ __('select') }}</option>
				@forelse ($roles as $role)
					<option value="{{ $role->name }}">{{ $role->name }}</option>
				@empty
					<option disabled>{{ __('role_not_included') }}</option>
				@endforelse
			  </select>
            </div>
          </div>

		 
          <button type="submit" class="btn btn-primary me-2">{{ __('update') }}</button>
        </form>
      </div>
    </div>
@endsection

