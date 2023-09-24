@extends('admin.default')
@section('content')
    <div class="card">
        <div class="card-header">
        <h3>Bronlar
            <!-- <div class="float-end">
                <a class="btn btn-success btn-xs" href="{{ route(ADMIN.'.brons.create') }}">
                    <span>
                        <i class="mdi mdi-plus"></i>
                    </span>    
                    Yeni Rəng
                </a>
            </div> -->
        </h3>
        </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>№</th>
                <th>Bron nömrəsi</th>
                <th>Telefon</th>
                <th>Avtomobil</th>
                <th>Qiymət</th>
                <th>Endirimli qiymət</th>
                <th>Tarix</th>
                <th>Status</th>
                <th>İnvoys</th>
              </tr>
            </thead>
            <tbody>
              @foreach($brons as $bron_type => $bron)
              <tr>
                <td>
                    {{ $bron_type+1 }}
                </td>
                <td>
                    <a href="{{ route(ADMIN.'.brons.edit', $bron->id) }}">
                        {{$bron->bron_number}}
                    </a>
                    </td>
                <td>{{ $bron->phone }}</td>
                <td>{{ $bron->brands->name }} {{ $bron->models->name }} {{ $bron->cars->licence_plate }}</td>
                <td>{{ $bron->price }}</td>
                <td>{{ $bron->discounted_price }}</td>
                <td>{{ $bron->pick_up }} <br> {{ $bron->drop_off }}</td>
                <td>
                <div class="btn-group">
                    @php
                    $class = "";
                    $text = "";
                    if ($bron->status == 0) {
                        $class = "warning";
                        $text = "Gözləyir";
                    } elseif ($bron->status == 1) {
                        $class = "success";
                        $text = "Qəbul edildi";
                    } elseif ($bron->status == 2) {
                        $class = "danger";
                        $text = "Qəbul edilmədi";
                    }
                    @endphp
                    <button type="button" class="btn btn-{{ $class }} btn-xs dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $text }}
                    </button>
                    <ul class="dropdown-menu">
                        <li><button class="dropdown-item text-warning bron-status" disabled data-id="0" bron-id="{{ $bron->id }}">Gözləyən</button></li>
                        <li><button class="dropdown-item text-success bron-status" data-id="1" bron-id="{{ $bron->id }}">Qəbul edildi</button></li>
                        <li><button class="dropdown-item text-danger bron-status" data-id="2" bron-id="{{ $bron->id }}">Qəbul edilmədi</button></li>
                    </ul>
                </div>
                </td>
                <td>
                <ul class="list-inline">
                            <li class="list-inline-item">
                              <a href="{{ route(ADMIN.'.brons.show', $bron->id) }}" class="dropdown-item d-flex align-items-center">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-sm me-2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span class="">İnvoys</span>
                              </a>
                            </li>
                            <!-- <li class="list-inline-item">
                                {!! Form::open([
                                'class'=>'delete',
                                'url' => route(ADMIN . '.brons.destroy', $bron->id),
                                'method' => 'DELETE',
                                ])
                                !!}

                                <button class="dropdown-item d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash icon-sm me-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> <span class="">Sil</span></button>
                                {!! Form::close() !!}
                            </li> -->
                        </ul>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection
@push('js')
<script>
  $('.bron-status').click(function(){
    var bron_id = $(this).attr('bron-id');
    var status = $(this).attr('data-id');
    $.ajax({
      method:"POST",
      url:"{{ url('admin/change-bron-status') }}",
      data: {
        "_token": "{{ csrf_token() }}",
        "bron_id":bron_id,
        "status":status
      },
      success:function(data){
        alert(data);
        location.reload(true);
      }
    })
  })
</script>
  
@endpush