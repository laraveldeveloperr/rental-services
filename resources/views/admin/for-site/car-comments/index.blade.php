@extends('admin.default')
@section('content')
    <div class="card">
        <div class="card-header">
        <h3>Rəylər
            <div class="float-end">
                <a class="btn btn-success btn-xs" href="{{ route(ADMIN.'.car-comments.create') }}">
                    <span>
                        <i class="mdi mdi-plus"></i>
                    </span>    
                    Yeni rəy
                </a>
            </div>
        </h3>
        </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>№</th>
                <th>Avtomobil</th>
                <th>Paylaşan</th>
                <th>Ad Soyad</th>
                <th>Rəy</th>
                <th>Status</th>
                <th>Əməliyyatlar</th>
              </tr>
            </thead>
            <tbody>
              @foreach($comments as $comment_key => $comment)
              <tr>
                <td>
                    {{ $comment->id }}
                </td>
                <td>{{$comment->cars->licence_plate }}</td>
                <td>{{$comment->who_shared==1 ? 'Admin' : 'İstifadəçi'}}</td>
                <td>{{$comment->name_surname}}</td>
                <td>{!! $comment->comment !!}</td>
                <td>
                    <button class="btn btn-outline-{{ $comment->status==1 ? 'success' : 'danger' }} btn-xs">
                    {{ $comment->status==1 ? 'Aktiv' : 'Deaktiv' }}
                    </button>
                </td>
                <td>
                <ul class="list-inline">
                            <li class="list-inline-item">
                            <a class="dropdown-item d-flex align-items-center" href="{{ route(ADMIN.'.car-comments.edit',  $comment->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">Düzəliş et</span></a>
                            </li>
                            <li class="list-inline-item">
                                {!! Form::open([
                                'class'=>'delete',
                                'url' => route(ADMIN . '.car-comments.destroy',  $comment->id),
                                'method' => 'DELETE',
                                ])
                                !!}

                                <button class="dropdown-item d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash icon-sm me-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> <span class="">Sil</span></button>
                                {!! Form::close() !!}
                            </li>
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
