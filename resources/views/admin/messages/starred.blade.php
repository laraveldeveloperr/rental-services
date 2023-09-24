@extends('admin.default')
@section('content')
<div class="row inbox-wrapper">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          @include('admin.partials.message-sidebar')
          <div class="col-lg-9">
            <div class="p-3 border-bottom">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="d-flex align-items-end mb-2 mb-md-0">
                    <h4 class="me-1">Seçilmiş mesajlar</h4>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="input-group">
                    <input class="form-control" type="text" placeholder="email axtar...">
                    <button class="btn btn-light btn-icon" type="button" id="button-search-addon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-3 border-bottom d-flex align-items-center justify-content-between flex-wrap">
              <div class="d-none d-md-flex align-items-center flex-wrap">
                <div class="form-check me-3">
                  <input type="checkbox" class="form-check-input" id="inboxCheckAll">
                </div>
                <div class="btn-group me-2">
                  <button class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" type="button"> Seçilənlərə tətbiq et <span class="caret"></span></button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item mark-as-read" href="#">Oxunmuş kimi işarələ</a>
                    <a class="dropdown-item mark-as-unread" href="#">Oxunmamış kimi işarələ</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger destroy-selected" href="#">Sil</a>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-end flex-grow-1">
                <span class="me-2">1-10 of 253</span>
                <div class="btn-group">
                  <button class="btn btn-outline-secondary btn-icon" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg></button>
                  <button class="btn btn-outline-secondary btn-icon" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></button>
                </div>
              </div>
            </div>
            <div class="email-list">

              <!-- email list item -->
              @foreach ($messages as $message)
              <div class="email-list-item email-list-item--{{ $message->read == 1 ? 'read' : 'unread' }}">
                <div class="email-list-actions">
                  <div class="form-check">
                    <input type="checkbox" value="{{ $message->id }}" name="selected[]" class="form-check-input checked-message">
                  </div>
                  <a class="favorite"  href="javascript:;">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" id="star" data-id="{{ $message->id }}" width="24" height="24" viewBox="0 0 24 24" fill="{{ $message->starred == 1 ? 'orange' : 'none' }}" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                      </svg>
                    </span>
                  </a>                </div>
                <a href="{{ route(ADMIN.'.messages.show', $message->id) }}" class="email-list-detail">
                  <div class="content">
                  <span class="from">{{ $message->repicient }}</span>
                    <p class="msg">{{ $message->subject }} </p>
                    <p> {!! $message->message !!}</p>
                  </div>
                  <span class="date">
                    {{ $message->created_at }}
                  </span>
                </a>
              </div>
              @endforeach
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

  
  $('.mark-as-read').on('click', function () {
        var selectedMessages = $('.checked-message:checked').map(function () {
            return $(this).val();
        }).get();

        $.ajax({
          url:"{{ route(ADMIN.'.messages.mark-as-read') }}",
          method:"POST",
          data: {
            "_token":"{{ csrf_token() }}",
            "selectedMessages":selectedMessages 
          },
          success:function(response){
            alert(response.message);
            location.reload();
          }
        })
    });
  $('.mark-as-unread').on('click', function () {
        var selectedMessages = $('.checked-message:checked').map(function () {
            return $(this).val();
        }).get();

        $.ajax({
          url:"{{ route(ADMIN.'.messages.mark-as-unread') }}",
          method:"POST",
          data: {
            "_token":"{{ csrf_token() }}",
            "selectedMessages":selectedMessages 
          },
          success:function(response){
            alert(response.message);
            location.reload();
          }
        })
    });

    $('.destroy-selected').on('click', function () {
        var selectedMessages = $('.checked-message:checked').map(function () {
            return $(this).val();
        }).get();

        $.ajax({
          url:"{{ route(ADMIN.'.messages.destroy-selected') }}",
          method:"POST",
          data: {
            "_token":"{{ csrf_token() }}",
            "selectedMessages":selectedMessages 
          },
          success:function(response){
            alert(response.message);
            location.reload();
          }
        })
      });
</script>
  
@endpush