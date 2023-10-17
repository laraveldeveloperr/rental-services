@extends('admin.default')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>{{ __('call_requests') }}</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="dataTableExample" class="table">
                <thead>
                    <tr>
                        <th>№</th>
                        <th>{{ __('name_surname') }}</th>
                        <th>{{ __('phone') }}</th>
                        <th>{{ __('status') }}</th>
                        <th>{{ __('operations') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($call as $item)
                    <tr>
                        <td>
                            {{ $item->id }}
                        </td>
                        <td>
                            {{$item->name_surname}}
                        </td>
                        <td>
                            {{$item->phone}}
                        </td>
                        <td>
                            <button class="btn btn-outline-{{ $item->status==1 ? 'success' : 'danger' }} btn-xs">
                                {{ $item->status==1 ? __('answered') : __('unanswered')  }}
                            </button>
                        </td>
                        <td>
                            @if($item->status==1)
                            <button class="dropdown-item d-flex align-items-center">
                                    <span class="">{{ __('answered') }}</span></button>
                            @else
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    {!! Form::open([
                                    'class'=>'update',
                                    'url' => route(ADMIN . '.call-requests.update', $item->id),
                                    'method' => 'PUT',
                                    ])
                                    !!}

                                    <button class="dropdown-item d-flex align-items-center">
                                    <span class="">{{ __('mark_as_answered') }}</span></button>
                                    {!! Form::close() !!}
                                </li>
                            </ul>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection