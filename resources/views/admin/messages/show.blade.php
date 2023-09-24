@extends('admin.default')
@section('content')
<div class="row inbox-wrapper">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          @include('admin.partials.message-sidebar')
          <div class="col-lg-9">
            <div class="d-flex align-items-center justify-content-between flex-wrap px-3 py-2 border-bottom">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <a href="#" class="text-body">{{ $message->sender }}</a> 
                  <span class="mx-2 text-muted">kimə</span>
                  <a href="#" class="text-body me-2">{{ $message->repicient }}</a>
                </div>
              </div>
              <div class="tx-13 text-muted mt-2 mt-sm-0">{{ $message->created_at }}</div>
            </div>
            <div class="p-4 border-bottom">
                <strong>{{ $message->subject }}</strong>
                <p>{!! $message->message !!}</p>
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
  $('#star').click(function(){
    var message_id = $(this).attr('data-id');
    var fill_type = $(this).attr('fill');

    $.ajax({
      url:"{{ url('admin/messages/update-info/') }}"+'/'+message_id+'/'+fill_type,
      method:"GET",
      success:function(response){
        alert(response.message);
        location.reload();
      }
    })
  })
</script>
  
@endpush