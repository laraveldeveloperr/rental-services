@extends('admin.default')
@section('content')
<div class="card">
  <div class="card-header">
    <h3>{{ $model->name }}
      <div class="float-end">
        <a class="btn btn-danger btn-xs" href="{{ route(ADMIN.'.models.index') }}">
          <span>
            <i class="mdi mdi-arrow-left"></i>
          </span>
          {{ __('models') }}
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

    <form action="{{ route(ADMIN.'.models.update', $model->id) }}" method="POST">
      @csrf
      @method("PUT")
      <div class="tab-content p-3 border" id="myTabContent">
        @foreach ($languages as $lang_key => $lang)
        <div class="tab-pane fade {{ $lang_key==0  ? 'show active' : '' }}" id="{{ $lang->shortened }}-pane"
          role="tabpanel" aria-labelledby="{{ $lang->shortened }}" tabindex="0">
          <div class="row mb-3">
            <label for="name" class="col-sm-3 col-form-label">{{ __('model') }}</label>
            <div class="col-sm-9">
              <input type="text" value="{{ $model->translate($lang->shortened)->name }}" class="form-control"
                name="data[{{ $lang->shortened }}][name]" id="name" placeholder="{{ __('enter_model') }}">
            </div>
          </div>

          <div class="row mb-3">
            <label for="slug" class="col-sm-3 col-form-label">{{ __('seo_link') }}</label>
            <div class="col-sm-9">
              <input type="text" value="{{ $model->translate($lang->shortened)->slug }}" class="form-control"
                name="data[{{ $lang->shortened }}][slug]" id="slug" placeholder="{{ __('enter_seo_link') }}">
            </div>
          </div>
        </div>
        @endforeach
        <div class="row mb-3">
          <label for="brands_id" class="col-sm-3 col-form-label">{{ __('brand') }}</label>
          <div class="col-sm-9">
            <select name="brands_id" class="js-example-basic-single form-select" id="brands_id">
            <option disabled>{{ __('select') }}</option>
            @foreach($brands as $brand)
            <option value="{{ $brand->id }}" {{ $model->brands_id==$brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
            @endforeach
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label for="status" class="col-sm-3 col-form-label">{{ __('status') }}</label>
          <div class="col-sm-9">
            <select name="status" class="js-example-basic-single form-select" id="status">
              <option selected disabled>{{ __('select') }}</option>
              <option value="1" {{$model->status==1 ? 'selected' : ''}}>{{ __('active') }}</option>
              <option value="0" {{$model->status==0 ? 'selected' : ''}}>{{ __('deactive') }}</option>
            </select>
          </div>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary">{{ __('update') }}</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection