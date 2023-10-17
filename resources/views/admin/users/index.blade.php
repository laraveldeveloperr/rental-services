@extends('admin.default')
@section('content')
    <div class="card">
        <div class="card-header">
        <h3>{{ __('admins') }}
            <div class="float-end">
                <a class="btn btn-success btn-xs" href="{{ route(ADMIN.'.users.create') }}">
                    <span>
                        <i class="mdi mdi-plus"></i>
                    </span>    
                    {{ __('new') }}
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
                <th>{{ __('name_surname') }}</th>
                <th>{{ __('email') }}</th>
                <th>{{ __('role') }}</th>
                <th>{{ __('operations') }}</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user_key => $user)
              <tr>
                <td>
                    {{ $user_key+1 }}
                </td>
                <td>
                    <a href="{{ route(ADMIN.'.users.edit', $user->id) }}">
                        {{$user->name}}
                    </a>
                    </td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                <ul class="list-inline">
                            <li class="list-inline-item">
                              <a class="dropdown-item d-flex align-items-center" href="{{ route(ADMIN.'.users.edit', $user->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">Düzəliş et</span></a>
                            </li>
                            <li class="list-inline-item">
                                {!! Form::open([
                                'class'=>'delete',
                                'url' => route(ADMIN . '.users.destroy', $user->id),
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
