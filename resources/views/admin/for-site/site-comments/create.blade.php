@extends('admin.default')
@section('content')
<div class="card">
	<div class="card-header">
        <h3>{{ __('new') }}
            <div class="float-end">
                <a class="btn btn-danger btn-xs" href="{{ route(ADMIN.'.site-comments.index') }}">
                    <span>
                        <i class="mdi mdi-arrow-left"></i>
                    </span>    
                    {{ __('comments') }}
                </a>
            </div>
        </h3>
        </div>
      <div class="card-body">
        <form class="forms-sample" action="{{ route(ADMIN.'.site-comments.store') }}" method="POST" enctype="multipart/form-data">
			  @csrf
          
          <div class="row mb-3">
            <label for="who_shared" class="col-sm-3 col-form-label">{{ __('shared') }}1</label>
            <div class="col-sm-9">
            <select name="who_shared" class="js-example-basic-single form-select" id="who_shared">
              <option selected disabled>{{ __('select') }}</option>
              <option value="1" {{ old('who_shared')==1 ? 'selected' : '' }}>{{ __('admin') }}</option>
              <option value="0" {{ old('who_shared')==0 ? 'selected' : '' }}>{{ __('user') }}</option>
            </select>
            </div>
          </div>
          <div class="row mb-3">
            <label for="name_surname" class="col-sm-3 col-form-label">{{ __('name_surname') }}</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="name_surname" value="{{ old('name_surname') }}" id="name_surname">
            </div>
          </div>
          
          <div class="row mb-3">
            <label for="comment" class="col-sm-3 col-form-label">{{ __('comment') }}</label>
            <div class="col-sm-9">
              <textarea id="summernote" name="comment" height="300">{{ old('comment') }}</textarea>
            </div>
          </div>
          
          <div class="row mb-3">
            <label for="comment_date" class="col-sm-3 col-form-label">{{ __('date') }}</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" value="{{ old('comment_date') }}" name="comment_date" id="comment_date">
            </div>
          </div>

          <div class="row mb-3">
            <label for="status" class="col-sm-3 col-form-label">{{ __('status') }}</label>
            <div class="col-sm-9">
            <select name="status" class="js-example-basic-single form-select" id="status">
              <option selected disabled>{{ __('select') }}</option>
              <option value="1" {{ old('status')==1 ? 'selected' : '' }}>{{ __('active') }}</option>
              <option value="0" {{ old('status')==0 ? 'selected' : '' }}>{{ __('deactive') }}</option>
            </select>
            </div>
          </div>
		 
          <button type="submit" class="btn btn-primary me-2">{{ __('save') }}</button>
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
    });
  </script>
@endpush

