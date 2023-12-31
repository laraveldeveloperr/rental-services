@extends('admin.default')
@section('content')
    <div class="card">
        <div class="card-header">
        <h3>{{ __('faqs') }}
            <div class="float-end">
                @can('create car faqs')
                <a class="btn btn-success btn-xs" href="{{ route(ADMIN.'.car-faqs.create') }}">
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
                <th>{{ __('question') }}</th>
                <th>{{ __('answer') }}</th>
                <th>{{ __('status') }}</th>
                <th>{{ __('operations') }}</th>
              </tr>
            </thead>
            <tbody>
              @foreach($elements as $element_key => $element)
              <tr>
                <td>
                    {{ $element->id }}
                </td>
                <td>
                    <a href="{{ route(ADMIN.'.car-faqs.edit', $element->id) }}">
                        {{$element->question}}
                    </a>
                </td>
                <td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 200px;">
                        {!! $element->answer !!}
                </td>
                <td>
                    <button class="btn btn-outline-{{ $element->status==1 ? 'success' : 'danger' }} btn-xs">
                    {{ $element->status==1 ? __('active')  : __('deactive') }}
                    </button>
                </td>
                <td>
                <ul class="list-inline">
                @can('edit car faqs')
                <li class="list-inline-item">
                            <a class="dropdown-item d-flex align-items-center" href="{{ route(ADMIN.'.car-faqs.edit',  $element->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">{{ __('edit') }}</span></a>
                            </li>
                @endcan            
                @can('delete car faqs')
                <li class="list-inline-item">
                    {!! Form::open([
                    'class'=>'delete',
                    'url' => route(ADMIN . '.car-faqs.destroy',  $element->id),
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
