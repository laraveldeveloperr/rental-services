@extends('admin.default')
@section('content')
    <div class="card">
	<div class="card-header">
        <h3>Yeni Dil
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
        <form class="forms-sample" action="{{ route(ADMIN.'.languages.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
          <div class="row mb-3">
            <label for="name" class="col-sm-3 col-form-label">Dil</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="name" id="name" placeholder="Dil daxil edin">
            </div>
          </div>
          <div class="row mb-3">
            <label for="shortened" class="col-sm-3 col-form-label">Qısaldılmış ad</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="shortened" id="shortened" placeholder="Qısaldılmış ad daxil edin">
            </div>
          </div>
		  <div class="row mb-3">
            <label for="status" class="col-sm-3 col-form-label">Status</label>
            <div class="col-sm-9">
			  <select name="status" class="js-example-basic-single form-select" id="status">
				<option selected disabled>Seçin</option>
				<option value="1">Aktiv</option>
				<option value="0">Deaktiv</option>
			  </select>
            </div>
          </div>

		 
          <button type="submit" class="btn btn-primary me-2">Daxil et</button>
        </form>
      </div>
    </div>
@endsection

