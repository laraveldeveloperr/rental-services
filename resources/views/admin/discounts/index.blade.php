@extends('admin.default')
@section('content')
    <div class="card">
        <div class="card-header">
        <h3>{{ __('discounts') }}
            <div class="float-end">
              @can('create discounts')
              <a class="btn btn-success btn-xs" href="{{ route(ADMIN.'.discounts.create') }}">
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
                <th>{{ __('brand') }}</th>
                <th>{{ __('model') }}</th>
                <th>{{ __('car') }}</th>
                <th>{{ __('type') }}</th>
                <th>{{ __('price') }}/{{ __('percentage') }}</th>
                <th>{{ __('start_date') }}</th>
                <th>{{ __('end_date') }}</th>
                <th>{{ __('status') }}</th>
                <th>{{ __('operations') }}</th>
              </tr>
            </thead>
            <tbody>
              @foreach($discounts as $type_key => $type)
              <tr>
                <td>
                    {{ $type_key+1 }}
                </td>
                <td>
                    <strong>{{ $type->brands->name }}</strong>
                </td>
                <td>
                    @if (is_null($type->models))
                      <small class="text-danger">
                      {{ __('not_applied') }}
                      </small>
                    @else
                     <strong> {{ $type->models->name }} </strong>                      
                    @endif
                </td>
                <td>
                    @if (is_null($type->cars))
                    <small class="text-danger">
                      {{ __('not_applied') }}
                    </small>
                    @else
                      <strong> {{$type->cars->licence_plate}} </strong>                     
                    @endif
                </td>
                <td>
                    {{ $type->type==1 ? __('percentage') : __('flat') }}
                </td>
                <td>
                    <strong class="text-success">
                    {{ $type->discount }} {{ $type->type == 1 ? '%' : '₼' }}
                    </strong>
                </td>
                <td>
                    {{ $type->start_date }}
                </td>
                <td>
                    {{ $type->end_date }}
                </td>
                <td>
                    <button class="btn btn-outline-{{ $type->status==1 ? 'success' : 'danger' }} btn-xs">
                    {{ $type->status==1 ? __('active') : __('deactive') }}
                    </button>
                </td>
                <td>
                <ul class="list-inline">
                  @can('edit discounts')
                  <li class="list-inline-item">
                  <a class="dropdown-item d-flex align-items-center" href="{{ route(ADMIN.'.discounts.edit', $type->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">{{ __('edit') }}</span></a>
                  </li>
                  @endcan
                  @can('delete discounts')
                  <li class="list-inline-item">
                      {!! Form::open([
                      'class'=>'delete',
                      'url' => route(ADMIN . '.discounts.destroy', $type->id),
                      'method' => 'DELETE',
                      ])
                      !!}

                      <button class="dropdown-item d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash icon-sm me-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> <span class="">{{ __('delete') }}</span></button>
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
