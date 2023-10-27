@extends('admin.default')
@section('content')
<div class="card">
  <div class="card-header">
    <h3>{{ __('teams') }}
      <div class="float-end">
      @can('team')
      <a class="btn btn-success btn-xs" href="{{ route(ADMIN.'.teams.create') }}">
          <span>
            <i class="mdi mdi-plus"></i>
          </span>
          {{ __('new') }}
        </a>
      @endcan  
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
            <th>{{ __('experience') }}</th>
            <th>{{ __('job') }}</th>
            <th>{{ __('status') }}</th>
            <th>{{ __('operations') }}</th>
          </tr>
        </thead>
        <tbody>
          @foreach($teams as $team_key => $item)
          <tr>
            <td>
              {{ $item->id }}
            </td>
            <td>
              <a href="{{ route(ADMIN.'.teams.edit', $item->id) }}">
                {{$item->name_surname}}
              </a>
            </td>
            <td>
              {{ $item->experience }}
            </td>
            <td>
              {{ $item->job }}
            </td>
            <td>
              <button class="btn btn-outline-{{ $item->status==1 ? 'success' : 'danger' }} btn-xs">
                {{ $item->status==1 ? __('active') : __('deactive')  }}
              </button>
            </td>
            <td>
              <ul class="list-inline">
                @can('edit team')
                <li class="list-inline-item">
                  <a class="dropdown-item d-flex align-items-center"
                    href="{{ route(ADMIN.'.teams.edit', $item->id) }}"><svg xmlns="http://www.w3.org/2000/svg"
                      width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2">
                      <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                    </svg> <span class="">{{ __('edit') }}</span></a>
                </li>
                @endcan
                @can('delete team')
                <li class="list-inline-item">
                  {!! Form::open([
                  'class'=>'delete',
                  'url' => route(ADMIN . '.teams.destroy', $item->id),
                  'method' => 'DELETE',
                  ])
                  !!}

                  <button class="dropdown-item d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg"
                      width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash icon-sm me-2">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    </svg> <span class="">{{ __('delete') }}</span></button>
                  {!! Form::close() !!}
                </li>
                @endcan
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