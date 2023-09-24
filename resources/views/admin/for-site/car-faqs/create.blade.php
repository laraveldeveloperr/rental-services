@extends('admin.default')
@section('content')
<div class="card">
	<div class="card-header">
        <h3>Yeni faq
            <div class="float-end">
                <a class="btn btn-danger btn-xs" href="{{ route(ADMIN.'.car-faqs.index') }}">
                    <span>
                        <i class="mdi mdi-arrow-left"></i>
                    </span>    
                    Ən çox soruşulan suallar
                </a>
            </div>
        </h3>
        </div>
      <div class="card-body">
        <form class="forms-sample" action="{{ route(ADMIN.'.car-faqs.store') }}" method="POST" enctype="multipart/form-data">
			  @csrf
          
          <div class="row mb-3">
            <label for="question" class="col-sm-3 col-form-label">Sual</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="question" value="{{ old('question') }}" id="question" placeholder="Sual daxil edin">
            </div>
          </div>
          
          <div class="row mb-3">
            <label for="answer" class="col-sm-3 col-form-label">Cavab</label>
            <div class="col-sm-9">
              <textarea id="summernote" name="answer" height="300">{{ old('answer') }}</textarea>
            </div>
          </div>

          <div class="row mb-3">
            <label for="status" class="col-sm-3 col-form-label">Status</label>
            <div class="col-sm-9">
            <select name="status" class="js-example-basic-single form-select" id="status">
              <option selected disabled>Seçin</option>
              <option value="1" {{ old('status')==1 ? 'selected' : '' }}>Aktiv</option>
              <option value="0" {{ old('status')==0 ? 'selected' : '' }}>Deaktiv</option>
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
    });
  </script>
@endpush

