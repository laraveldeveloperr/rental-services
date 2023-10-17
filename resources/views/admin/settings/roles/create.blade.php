@extends('admin.default')
@section('content')
    <div class="card">
	<div class="card-header">
        <h3>{{ __('new') }}
            <div class="float-end">
                <a class="btn btn-danger btn-xs" href="{{ route(ADMIN.'.roles.index') }}">
                    <span>
                        <i class="mdi mdi-arrow-left"></i>
                    </span>    
                    {{ __('roles') }}
                </a>
            </div>
        </h3>
        </div>
      <div class="card-body">
        <form class="forms-sample" action="{{ route(ADMIN.'.roles.store') }}" method="POST" enctype="multipart/form-data">
			    @csrf
          <div class="row mb-3">
            <label for="name" class="col-sm-3 col-form-label">{{ __('role') }}</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="{{ old('name') }}" name="name" id="name" placeholder="{{ __('enter_role') }}">
            </div>
          </div>
          <button type="submit" class="btn btn-primary me-2">{{ __('save') }}</button>
        </form>
      </div>
    </div>
@endsection

