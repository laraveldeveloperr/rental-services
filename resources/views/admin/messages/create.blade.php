@extends('admin.default')
@section('content')
<div class="row inbox-wrapper">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          @include('admin.partials.message-sidebar')
          <div class="col-lg-9">
            <div class="email-list">
            <div>
              <div class="d-flex align-items-center p-3 border-bottom tx-16">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit icon-md me-2"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                Yeni mesaj
              </div>
            </div>
            <form action="{{ route(ADMIN.'.messages.store') }}" method="POST">
                @csrf
            <div class="p-3 pb-0">
                <div class="subject">
                    <div class="row mb-3">
                    <label class="col-md-2 col-form-label">Kimə</label>
                    <div class="col-md-10">
                        <input class="form-control" value="{{ old('repicient') }}" name="repicient" type="text">
                    </div>
                    </div>
                </div>
                <div class="subject">
                    <div class="row mb-3">
                    <label class="col-md-2 col-form-label">Başlıq</label>
                    <div class="col-md-10">
                        <input class="form-control" name="subject" value="{{ old('subject') }}" type="text">
                    </div>
                    </div>
                </div>
            </div>
            <div class="px-3">
              <div class="col-md-12">
                <div class="mb-3">
                  <textarea id="summernote" name="message" height="300"></textarea>
                </div>
              </div>
              <div>
                <div class="col-md-12">
                  <button class="btn btn-primary me-1 mb-1" type="submit" name="send" value="1"> Göndər</button>
                  <button class="btn btn-secondary me-1 mb-1" type="submit" name="send" value="0"> Qaralamada saxla</button>
                  <button class="btn btn-danger me-1 mb-1 cancel-email" type="button"> Ləğv et</button>
                </div>
              </div>
            </div> 
            </form>
            
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
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