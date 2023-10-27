@extends('admin.default')
@section('content')
<div class="card">
  <div class="card-header">
    <h3>{{ __('blogs') }}
      <div class="float-end">
        @can('create blogs')
        <a class="btn btn-success btn-xs" href="{{ route(ADMIN.'.blogs.create') }}">
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
            <th>{{ __('title') }}</th>
            <th>{{ __('date') }}</th>
            <th>{{ __('status') }}</th>
            <th>{{ __('operations') }}</th>
          </tr>
        </thead>
        <tbody>
          @foreach($blogs as $blog_key => $blog)
          <tr>
            <td>
              {{ $blog->id }}
            </td>
            <td>
              @can('edit blogs')
              <a href="{{ route(ADMIN.'.blogs.edit', $blog->id) }}">
                {{$blog->title}}
              </a>
              @endcan
            </td>
            <td>
              {{ $blog->created_at->format('d.m.Y') }}
            </td>
            <td>
              <button class="btn btn-outline-{{ $blog->status==1 ? 'success' : 'danger' }} btn-xs">
                {{ $blog->status==1 ? __('active') : __('deactive') }}
              </button>
            </td>
            <td>
              <ul class="list-inline">
                @can('edit blogs')
                <li class="list-inline-item">
                  <a href="{{ route(ADMIN.'.blogs.show', $blog->id) }}" class="dropdown-item d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-eye icon-sm me-2">
                      <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                      <circle cx="12" cy="12" r="3"></circle>
                    </svg> <span class="">{{ __('show') }}</span>
                  </a>
                </li>
                @endcan
                @can('edit blogs')
                <li class="list-inline-item">
                  <a class="dropdown-item d-flex align-items-center"
                    href="{{ route(ADMIN.'.blogs.edit',  $blog->id) }}"><svg xmlns="http://www.w3.org/2000/svg"
                      width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2">
                      <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                    </svg> <span class="">{{ __('edit') }}</span></a>
                </li>
                @endcan
                @can('delete blogs')
                <li class="list-inline-item">
                  {!! Form::open([
                  'class'=>'delete',
                  'url' => route(ADMIN . '.blogs.destroy', $blog->id),
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