@extends('admin.default')
@section('content')
    <div class="card">
	<div class="card-header">
        <h3>{{ $blog->title }}
            <div class="float-end">
                <a class="btn btn-danger btn-xs" href="{{ route(ADMIN.'.blogs.index') }}">
                    <span>
                        <i class="mdi mdi-arrow-left"></i>
                    </span>    
                    Bloqlar
                </a>
            </div>
        </h3>
        </div>
      <div class="card-body">
      <form class="forms-sample" action="{{ route(ADMIN.'.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
			  @csrf
          @method('PUT')
          <div class="row mb-3">
            <label for="title" class="col-sm-3 col-form-label">Başlıq</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="title" value="{{ $blog->title }}" id="title" placeholder="Bloq başlığını daxil edin">
            </div>
          </div>
          
          <div class="row mb-3">
            <label for="content" class="col-sm-3 col-form-label">Mətn</label>
            <div class="col-sm-9">
              <textarea id="summernote" name="content" height="300">{{ $blog->content }}</textarea>
            </div>
          </div>

          <div class="row mb-3">
            <label for="image" class="col-sm-3 col-form-label">Şəkil</label>
            <div class="col-sm-9">
			        <input type="file" name="image" id="myDropify" data-default-file="{{ asset('images/blogs').'/'.$blog->image }}"/>
            </div>
          </div>

		      <div class="row mb-3">
            <label for="status" class="col-sm-3 col-form-label">Status</label>
            <div class="col-sm-9">
            <select name="status" class="js-example-basic-single form-select" id="status">
              <option selected disabled>Seçin</option>
              <option value="1" {{ $blog->status==1 ? 'selected' : '' }}>Aktiv</option>
              <option value="0" {{ $blog->status==0 ? 'selected' : '' }}>Deaktiv</option>
            </select>
            </div>
          </div>

		 
          <button type="submit" class="btn btn-primary me-2">Yadda saxla</button>
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
        


