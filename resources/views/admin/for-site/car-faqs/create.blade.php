@extends('admin.default')
@section('content')
<div class="card">
  <div class="card-header">
    <h3>{{ __('new') }}
      <div class="float-end">
        <a class="btn btn-danger btn-xs" href="{{ route(ADMIN.'.car-faqs.index') }}">
          <span>
            <i class="mdi mdi-arrow-left"></i>
          </span>
          {{ __('faqs') }}
        </a>
      </div>
    </h3>
  </div>
  <div class="card-body">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      @foreach ($languages as $lang_key => $lang)
      <li class="nav-item" role="presentation">
        <button class="nav-link  {{ $lang_key==0  ? 'active' : '' }}" id="{{$lang->shortened}}" data-bs-toggle="tab"
          data-bs-target="#{{$lang->shortened}}-pane" type="button" role="tab" aria-controls="{{$lang->shortened}}-pane"
          aria-selected="true">
          {{ $lang->name }}
        </button>
      </li>
      @endforeach
    </ul>
    <form class="forms-sample" action="{{ route(ADMIN.'.car-faqs.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="tab-content p-3 border" id="myTabContent">
        @foreach ($languages as $lang_key => $lang)
        <div class="tab-pane fade {{ $lang_key==0  ? 'show active' : '' }}" id="{{ $lang->shortened }}-pane"
          role="tabpanel" aria-labelledby="{{ $lang->shortened }}" tabindex="0">
          <div class="row mb-3">
            <label for="question" class="col-sm-3 col-form-label">{{ __('question') }}</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" value="{{ old('question') }}"
                name="data[{{ $lang->shortened }}][question]" id="question" placeholder="{{ __('enter_question') }}">
            </div>
          </div>

          <div class="row mb-3">
            <label for="content" class="col-sm-3 col-form-label">{{ __('answer') }}</label>
            <div class="col-sm-9">
              <textarea id="summernote-{{ $lang->shortened }}" name="data[{{ $lang->shortened }}][answer]"
                height="300"></textarea>
            </div>
          </div>
        </div>
        @endforeach

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
      </div>
    </form>
  </div>
</div>
@endsection

@push('js')
<script>
  $(document).ready(function() {
    @foreach($languages as $lang_key => $lang)
    $('#summernote-{{ $lang->shortened }}').summernote({
      height: 300
    });
    @endforeach
  });
</script>
@endpush