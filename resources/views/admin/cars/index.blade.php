@extends('admin.default')
@section('content')
    <div class="card">
        <div class="card-header">
        <h3>{{ __('cars') }}
            <div class="float-end">
                <a class="btn btn-success btn-xs" href="{{ route(ADMIN.'.cars.create') }}">
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
                <th>{{ __('car') }}</th>
                <th>{{ __('ban_type') }}</th>
                <th>{{ __('manufacturing_year') }}</th>
                <th>{{ __('licence_plate') }}</th>
                <th>{{ __('discount') }}</th>
                <th>{{ __('status') }}</th>
                <th>{{ __('operations') }}</th>
              </tr>
            </thead>
            <tbody>
              @foreach($cars as $type_key => $type)
              <tr>
                <td>
                    {{ $type->id }}
                </td>
                <td>
                    <a href="{{ route(ADMIN.'.cars.edit', $type->id) }}">
                        {{$type->brands->name}} {{$type->models->name}}
                    </a>
                </td>
                <td>{{ $type->ban_types->name }}</td>
                <td>{{ $type->manufacturing_year }}</td>
                <td>{{ $type->licence_plate }}</td>
                <td>
                  @if ($type->discounts)
                    <button class="btn btn-outline-{{ $type->discounts->status == 1 ? 'primary' : 'danger' }} btn-xs">
                      Endirim {{ $type->discounts->discount }} {{ $type->discounts->type == 1 ? '%' : '₼' }}
                    </button>
                  @endif
                </td>
                <td>
                    <button class="btn btn-outline-{{ $type->status==1 ? 'success' : 'danger' }} btn-xs">
                    {{ $type->status==1 ? __('active') : __('deactive') }}
                    </button>
                </td>
                <td>
                <ul class="list-inline">
                            <li class="list-inline-item">
                              <a href="{{ route(ADMIN.'.car-gallery', $type->id) }}" class="dropdown-item d-flex align-items-center">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image icon-sm me-2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg><span class="">{{ __('gallery') }}</span>
                              </a>
                            </li>
                            <li class="list-inline-item">
                              <a href="{{ route(ADMIN.'.cars.show', $type->id) }}" class="dropdown-item d-flex align-items-center">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-sm me-2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span class="">{{ __('show') }}</span>
                              </a>
                            </li>
                            <li class="list-inline-item">
                            <a class="dropdown-item d-flex align-items-center" href="{{ route(ADMIN.'.cars.edit',  $type->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">{{ __('edit') }}</span></a>
                            </li>
                            <li class="list-inline-item">
                                {!! Form::open([
                                'class'=>'delete',
                                'url' => route(ADMIN . '.cars.destroy',  $type->id),
                                'method' => 'DELETE',
                                ])
                                !!}

                                <button class="dropdown-item d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash icon-sm me-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> <span class="">{{ __('delete') }}</span></button>
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
