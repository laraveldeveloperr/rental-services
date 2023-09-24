@extends('admin.default')
@section('content')
    <div class="card">
	<div class="card-header">
        <h3>Ümumi tənzimləmələr
        </h3>
        </div>
      <div class="card-body">
        <form class="forms-sample" action="{{ route(ADMIN.'.general-settings.store') }}" method="POST" enctype="multipart/form-data">
			  @csrf
              <div class="row mb-3">
                <label for="logo" class="col-sm-3 col-form-label">Logo</label>
                <div class="col-sm-9">
                    <input type="file" name="logo" id="myDropify"  data-default-file="{{ asset('images').'/'.$general_settings->logo }}"/>
                </div>
              </div>

          <div class="row mb-3">
            <label for="numbers" class="col-sm-3 col-form-label">Əlaqə nömrələri</label>
            <div class="col-sm-7 phone-number-content">
              @if (is_null(json_decode($general_settings->numbers, true)))
              <input type="text" class="form-control" name="numbers[]" value="{{ old('numbers') }}" id="numbers" placeholder="Əlaqə nömrəsi daxil edin">
              @else
                @foreach(json_decode($general_settings->numbers, true) as $number)
                <div class="input-group mb-2">
                  <input type="text" name="numbers[]" value="{{ $number }}" class="form-control" placeholder="Yeni əlaqə nömrəsi daxil edin">
                  <button class="btn btn-danger remove-phone-number">Sil</button>
                </div>
                @endforeach
              @endif
            </div>
            <div class="col-sm-2">
              <button type="button" class="w-100 btn btn-xs btn-success add-phone-number">
                + Yeni əlaqə nömrəsi
              </button>
            </div>
          </div>

          <div class="row mb-3">
            <label for="emails" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-7 email-address-content">
              @if (is_null(json_decode($general_settings->emails, true)))
                <input type="text" class="form-control" name="email[]" value="{{ old('email') }}" id="email" placeholder="Email adresi daxil edin">
                @else
                  @foreach(json_decode($general_settings->emails, true) as $email)
                  <div class="input-group mb-2">
                    <input type="text" name="emails[]" value="{{ $email }}" class="form-control" placeholder="Yeni email adresi daxil edin">
                    <button class="btn btn-danger remove-email-address">Sil</button>
                  </div>
                  @endforeach
                @endif
            </div>
            <div class="col-sm-2">
              <button type="button" class="w-100 btn btn-xs btn-success add-email-address">
                + Yeni email adresi
              </button>
            </div>
          </div>

          <div class="row mb-3">
            <label for="social_networks" class="col-sm-3 col-form-label">Sosial şəbəkələr</label>
            <div class="col-sm-7 social-address-content">
              @if (is_null(json_decode($general_settings->social_networks, true)))
                  <input type="text" class="form-control" name="social_networks[]" value="{{ old('social_networks') }}" id="social_networks" placeholder="Sosial şəbəkə daxil edin">
                  @else
                    @foreach(json_decode($general_settings->social_networks, true) as $sn)
                    <div class="input-group mb-2">
                      <input type="text" name="social_networks[]" value="{{ $sn }}" class="form-control" placeholder="Yeni sosial şəbəkə daxil edin">
                      <button class="btn btn-danger remove-social-address">Sil</button>
                    </div>
                    @endforeach
                  @endif
            </div>
            <div class="col-sm-2">
              <button type="button" class="w-100 btn btn-xs btn-success add-social-address">
                + Yeni sosial şəbəkə
              </button>
            </div>
          </div>

          <div class="row mb-3">
            <label for="address" class="col-sm-3 col-form-label">Ünvan</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="address" value="{{ $general_settings->address }}" id="address" placeholder="Ünvanı daxil edin">
            </div>
          </div>


          <div class="row mb-3">
            <label for="about_text" class="col-sm-3 col-form-label">Haqqımızda</label>
            <div class="col-sm-9">
              <textarea id="summernote" name="about_text" height="300">{{ !is_null($general_settings->about_text) ? $general_settings->about_text : '' }}</textarea>
            </div>
          </div>

          <div class="row mb-3">
            <label for="meta_title" class="col-sm-3 col-form-label">Meta başlıq</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="meta_title" value="{{ !is_null($general_settings->meta_title) ? $general_settings->meta_title : '' }}" id="meta_title" placeholder="Meta başlıq daxil edin">
            </div>
          </div>

          <div class="row mb-3">
            <label for="meta_keywords" class="col-sm-3 col-form-label">Açar sözlər</label>
            <div class="col-sm-9">
                <input name="meta_keywords[]" value="{{ implode(',', json_decode($general_settings->meta_keywords, true)) }}" id="tags" />
            </div>
        </div>

          <div class="row mb-3">
            <label for="meta_description" class="col-sm-3 col-form-label">Haqqımızda</label>
            <div class="col-sm-9">
              <textarea id="description" name="meta_description" height="300">{{ !is_null($general_settings->meta_description) ? $general_settings->meta_description : '' }}</textarea>
            </div>
          </div>

          

		      <div class="row mb-3">
            <label for="repair_mode" class="col-sm-3 col-form-label">Təmir rejimi</label>
            <div class="col-sm-9">
            <select name="repair_mode" class="js-example-basic-single form-select" id="repair_mode">
              <option selected disabled>Seçin</option>
              <option value="1" {{ old('repair_mode')==1 ? 'selected' : '' }}>Aktiv</option>
              <option value="0" {{ old('repair_mode')==0 ? 'selected' : '' }}>Deaktiv</option>
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
