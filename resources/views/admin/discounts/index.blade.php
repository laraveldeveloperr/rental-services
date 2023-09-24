@extends('admin.default')
@section('content')
    <div class="card">
        <div class="card-header">
        <h3>Endirimlər
            <div class="float-end">
                <a class="btn btn-success btn-xs" href="{{ route(ADMIN.'.discounts.create') }}">
                    <span>
                        <i class="mdi mdi-plus"></i>
                    </span>    
                    Yeni endirim
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
                <th>Marka</th>
                <th>Model</th>
                <th>Avtomobil</th>
                <th>Tip</th>
                <th>Məbləğ/Faiz</th>
                <th>Başlanğıc tarixi</th>
                <th>Bitiş tarixi</th>
                <th>Status</th>
                <th>Əməliyyatlar</th>
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
                      Tətbiq edilməyib
                      </small>
                    @else
                     <strong> {{ $type->models->name }} </strong>                      
                    @endif
                </td>
                <td>
                    @if (is_null($type->cars))
                    <small class="text-danger">
                      Tətbiq edilməyib
                    </small>
                    @else
                      <strong> {{$type->cars->licence_plate}} </strong>                     
                    @endif
                </td>
                <td>
                    {{ $type->type==1 ? 'Faizlə' : 'Manatla' }}
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
                    {{ $type->status==1 ? 'Aktiv' : 'Deaktiv' }}
                    </button>
                </td>
                <td>
                <ul class="list-inline">
                            <li class="list-inline-item">
                            <a class="dropdown-item d-flex align-items-center" href="{{ route(ADMIN.'.discounts.edit', $type->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">Düzəliş et</span></a>
                            </li>
                            <li class="list-inline-item">
                                {!! Form::open([
                                'class'=>'delete',
                                'url' => route(ADMIN . '.discounts.destroy', $type->id),
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
