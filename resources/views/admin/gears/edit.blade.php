@extends('admin.default')
@section('content')
    <div class="card">
	<div class="card-header">
        <h3>{{ $gear->name }}
            <div class="float-end">
                <a class="btn btn-danger btn-xs" href="{{ route(ADMIN.'.gears.index') }}">
                    <span>
                        <i class="mdi mdi-arrow-left"></i>
                    </span>    
                     Ötürücülər
                </a>
            </div>
        </h3>
        </div>
      <div class="card-body">
        <form class="forms-sample" action="{{ route(ADMIN.'.gears.update', $gear->id) }}" method="POST" enctype="multipart/form-data">
			@csrf
            @method("PUT")
          <div class="row mb-3">
            <label for="name" class="col-sm-3 col-form-label">Ötürücü</label>
            <div class="col-sm-9">
              <input type="text" value="{{ $gear->name }}" class="form-control" name="name" id="name" placeholder="Ötürücü adını daxil edin">
            </div>
          </div>

		  <div class="row mb-3">
            <label for="status" class="col-sm-3 col-form-label">Status</label>
            <div class="col-sm-9">
			  <select name="status" class="js-example-basic-single form-select" id="status">
				<option selected disabled>Seçin</option>
				<option value="1" {{ $gear->status==1 ? 'selected' : ''}}>Aktiv</option>
				<option value="0" {{ $gear->status==0 ? 'selected' : ''}}>Deaktiv</option>
			  </select>
            </div>
          </div>

		 
          <button type="submit" class="btn btn-primary me-2">Yadda saxla</button>
        </form>
      </div>
    </div>
@endsection

