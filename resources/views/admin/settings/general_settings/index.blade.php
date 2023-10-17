@extends('admin.default')
@section('content')
<div class="card">
  <div class="card-header">
    <h3>Ümumi tənzimləmələr
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
    <form class="forms-sample" action="{{ route(ADMIN.'.general-settings.store') }}" method="POST"
      enctype="multipart/form-data">
      @csrf
      <div class="tab-content p-3 border" id="myTabContent">
        @foreach ($languages as $lang_key => $lang)
        <div class="tab-pane fade {{ $lang_key==0  ? 'show active' : '' }}" id="{{ $lang->shortened }}-pane"
          role="tabpanel" aria-labelledby="{{ $lang->shortened }}" tabindex="0">

          <div class="row mb-3">
            <label for="address" class="col-sm-3 col-form-label">{{ __('address') }}</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="data[{{ $lang->shortened }}][address]" value="{{ $general_settings->address }}"
                id="address" placeholder="{{ __('enter_address') }}">
            </div>
          </div>

          <div class="row mb-3">
            <label for="about_text" class="col-sm-3 col-form-label">{{ __('about') }}</label>
            <div class="col-sm-9">
              <textarea id="summernote" name="data[{{ $lang->shortened }}][about_text]"
                height="300">{{ !is_null($general_settings->about_text) ? $general_settings->about_text : '' }}</textarea>
            </div>
          </div>

          <div class="row mb-3">
            <label for="privacy_policy" class="col-sm-3 col-form-label">{{ __('privacy_policy') }}</label>
            <div class="col-sm-9">
              <textarea id="summernote-privacy-policy" name="data[{{ $lang->shortened }}][privacy_policy]"
                height="300">{{ !is_null($general_settings->privacy_policy) ? $general_settings->privacy_policy : '' }}</textarea>
            </div>
          </div>

          <div class="row mb-3">
            <label for="meta_title" class="col-sm-3 col-form-label">{{ __('meta_title') }}</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="data[{{ $lang->shortened }}][meta_title]"
                value="{{ !is_null($general_settings->meta_title) ? $general_settings->meta_title : '' }}"
                id="meta_title" placeholder="{{ __('enter_meta_title') }}">
            </div>
          </div>

          <div class="row mb-3">
            <label for="meta_keywords" class="col-sm-3 col-form-label">{{ __('meta_keywords') }}</label>
            <div class="col-sm-9">
              <input name="data[{{ $lang->shortened }}][meta_keywords][]"
                value="{{ implode(',', json_decode($general_settings->meta_keywords, true)) }}" placeholder="{{ __('enter_meta_keywords') }}" id="tags" />
            </div>
          </div>

          <div class="row mb-3">
            <label for="meta_description" class="col-sm-3 col-form-label">{{ __('meta_description') }}</label>
            <div class="col-sm-9">
              <textarea id="description" name="data[{{ $lang->shortened }}][meta_description]"
                height="300">{{ !is_null($general_settings->meta_description) ? $general_settings->meta_description : '' }}</textarea>
            </div>
          </div>
        </div>
        @endforeach
        <div class="row mb-3">
          <label for="logo" class="col-sm-3 col-form-label">{{ __('logo') }}</label>
          <div class="col-sm-9">
            <input type="file" name="logo" id="myDropify"
              data-default-file="{{ asset('images').'/'.$general_settings->logo }}" />
          </div>
        </div>

        <div class="row mb-3">
          <label for="numbers" class="col-sm-3 col-form-label">{{ __('contact_numbers') }}</label>
          <div class="col-sm-7 phone-number-content">
            @if (is_null(json_decode($general_settings->numbers, true)))
            <input type="text" class="form-control" name="numbers[]" value="{{ old('numbers') }}" id="numbers"
              placeholder="{{ __('enter_contact_numbers') }}">
            @else
            @foreach(json_decode($general_settings->numbers, true) as $number)
            <div class="input-group mb-2">
              <input type="text" name="numbers[]" value="{{ $number }}" class="form-control"
                placeholder="{{ __('add_new_contact_number') }}">
              <button class="btn btn-danger remove-phone-number">{{ __('delete') }}</button>
            </div>
            @endforeach
            @endif
          </div>
          <div class="col-sm-2">
            <button type="button" class="w-100 btn btn-xs btn-success add-phone-number">
              + {{ __('new_contact_number') }}
            </button>
          </div>
        </div>

        <div class="row mb-3">
          <label for="emails" class="col-sm-3 col-form-label">{{ __('email') }}</label>
          <div class="col-sm-7 email-address-content">
            @if (is_null(json_decode($general_settings->emails, true)))
            <input type="text" class="form-control" name="email[]" value="{{ old('email') }}" id="email"
              placeholder="{{ __('enter_email_address') }}">
            @else
            @foreach(json_decode($general_settings->emails, true) as $email)
            <div class="input-group mb-2">
              <input type="text" name="emails[]" value="{{ $email }}" class="form-control"
                placeholder="{{ __('add_new_email_address') }}">
              <button class="btn btn-danger remove-email-address">{{ __('delete') }}</button>
            </div>
            @endforeach
            @endif
          </div>
          <div class="col-sm-2">
            <button type="button" class="w-100 btn btn-xs btn-success add-email-address">
              + {{ __('new_email_address') }}
            </button>
          </div>
        </div>

        <div class="row mb-3">
          <label for="social_networks" class="col-sm-3 col-form-label">{{ __('social_networks') }}</label>
          <div class="col-sm-7 social-address-content">
            @if (is_null(json_decode($general_settings->social_networks, true)))
            <input type="text" class="form-control" name="social_networks[]" value="{{ old('social_networks') }}"
              id="social_networks" placeholder="{{ __('enter_social_network') }}n">
            @else
            @foreach(json_decode($general_settings->social_networks, true) as $sn)
            <div class="input-group mb-2">
              <input type="text" name="social_networks[]" value="{{ $sn }}" class="form-control"
                placeholder="{{ __('add_new_social_network') }}">
              <button class="btn btn-danger remove-social-address">{{ __('delete') }}</button>
            </div>
            @endforeach
            @endif
          </div>
          <div class="col-sm-2">
            <button type="button" class="w-100 btn btn-xs btn-success add-social-address">
              + {{ __('new_social_network') }}
            </button>
          </div>
        </div>
        <div class="row mb-3">
          <label for="repair_mode" class="col-sm-3 col-form-label">{{ __('repair_mode') }}</label>
          <div class="col-sm-9">
            <select name="repair_mode" class="js-example-basic-single form-select" id="repair_mode">
              <option selected disabled>{{ __('select') }}</option>
              <option value="1" {{ $general_settings->repair_mode == 1 ? 'selected' : '' }}>{{ __('active') }}</option>
              <option value="0" {{ $general_settings->repair_mode == 0 ? 'selected' : '' }}>{{ __('deactive') }}</option>
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
    $('#summernote').summernote({
      height: 300
    });
    $('#summernote-privacy-policy').summernote({
      height: 300
    });
    $('#description').summernote({
      height: 300
    });
    $(".add-phone-number").click(function() {
      var newInput = '<div class="input-group mb-2">' +
        '<input type="text" name="numbers[]" class="mt-2 form-control" placeholder="Yeni əlaqə nömrəsi daxil edin">' +
        '<button class="mt-2 btn btn-danger remove-phone-number">Sil</button>' +
        '</div>';
      $(".phone-number-content").append(newInput);
    });
    // "Sil" düğmesine tıklandığında ilgili input alanını silin
    $(document).on("click", ".remove-phone-number", function() {
      $(this).parent(".input-group").remove();
    });
    $(".add-email-address").click(function() {
      var newInput = '<div class="input-group mb-2">' +
        '<input type="text" name="emails[]" class="mt-2 form-control" placeholder="Yeni email adresi daxil edin">' +
        '<button class="mt-2 btn btn-danger remove-email-address">Sil</button>' +
        '</div>';
      $(".email-address-content").append(newInput);
    });
    // "Sil" düğmesine tıklandığında ilgili input alanını silin
    $(document).on("click", ".remove-email-address", function() {
      $(this).parent(".input-group").remove();
    });
    $(".add-social-address").click(function() {
      var newInput = '<div class="input-group mb-2">' +
        '<input type="text" name="social_networks[]" class="mt-2 form-control" placeholder="Yeni social şəbəkə daxil edin">' +
        '<button class="mt-2 btn btn-danger remove-social-address">Sil</button>' +
        '</div>';
      $(".social-address-content").append(newInput);
    });
    // "Sil" düğmesine tıklandığında ilgili input alanını silin
    $(document).on("click", ".remove-social-address", function() {
      $(this).parent(".input-group").remove();
    });
  });
</script>
@endpush