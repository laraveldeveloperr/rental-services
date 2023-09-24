@extends('admin.default')
@section('content')
    <div class="card">
	<div class="card-header">
        <h3>Yeni marka
            <div class="float-end">
                <a class="btn btn-danger btn-xs" href="{{ route(ADMIN.'.brands.index') }}">
                    <span>
                        <i class="mdi mdi-arrow-left"></i>
                    </span>    
                    Markalar
                </a>
            </div>
        </h3>
        </div>
      <div class="card-body">
        <form class="forms-sample" action="{{ route(ADMIN.'.brands.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
          <div class="row mb-3">
            <label for="name" class="col-sm-3 col-form-label">Marka adı</label>
            <div class="col-sm-9">
              <input type="text" value="{{ old('name') }}" class="form-control" name="name" id="name" placeholder="Marka adını daxil edin">
            </div>
          </div>
          <div class="row mb-3">
            <label for="icon" class="col-sm-3 col-form-label">Loqo</label>
            <div class="col-sm-9">
			        <input type="file" name="icon" id="myDropify"/>
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

