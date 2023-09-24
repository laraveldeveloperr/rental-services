@extends('admin.default')
@section('content')
    <div class="card">
	<div class="card-header">
        <h3>{{ $lang->name }}
            <div class="float-end">
                <a class="btn btn-danger btn-xs" href="{{ route(ADMIN.'.languages.index') }}">
                    <span>
                        <i class="mdi mdi-arrow-left"></i>
                    </span>    
                    Dil
                </a>
            </div>
        </h3>
        </div>
      <div class="card-body">
        <form class="forms-sample" action="{{ route(ADMIN.'.languages.update', $lang->id) }}" method="POST" enctype="multipart/form-data">
			@csrf
            @method("PUT")
          <div class="row mb-3">
            <label for="name" class="col-sm-3 col-form-label">Dil</label>
            <div class="col-sm-9">
              <input type="text" value="{{ $lang->name }}" class="form-control" name="name" id="name" placeholder="Dil daxil edin">
            </div>
          </div>

          <div class="row mb-3">
            <label for="shortened" class="col-sm-3 col-form-label">Dil</label>
            <div class="col-sm-9">
              <input type="text" value="{{ $lang->shortened }}" class="form-control" name="shortened" id="shortened" placeholder="Qısaldılmış adı daxil edin">
            </div>
          </div>

		  <div class="row mb-3">
            <label for="status" class="col-sm-3 col-form-label">Status</label>
            <div class="col-sm-9">
			  <select name="status" class="js-example-basic-single form-select" id="status">
				<option selected disabled>Seçin</option>
				<option value="1" {{ $lang->status==1 ? 'selected' : ''}}>Aktiv</option>
				<option value="0" {{ $lang->status==0 ? 'selected' : ''}}>Deaktiv</option>
			  </select>
            </div>
          </div>

		 
          <button type="submit" class="btn btn-primary me-2">Yadda saxla</button>
        </form>
      </div>
    </div>
@endsection

