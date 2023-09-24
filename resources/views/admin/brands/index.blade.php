@extends('admin.default')
@section('content')
    <div class="card">
        <div class="card-header">
        <h3>Markalar
            <div class="float-end">
                <a class="btn btn-success btn-xs" href="{{ route(ADMIN.'.brands.create') }}">
                    <span>
                        <i class="mdi mdi-plus"></i>
                    </span>    
                    Yeni marka
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
                <th>Marka adı</th>
                <th>Model sayı</th>
                <th>Avtomobil sayı</th>
                <th>Endirim</th>
                <th>Status</th>
                <th>Əməliyyatlar</th>
              </tr>
            </thead>
            <tbody>
              @foreach($brands as $brand_key => $brand)
              <tr>
                <td>
                    {{ $brand->id }}
                </td>
                <td>
                    <a href="{{ route(ADMIN.'.brands.edit', $brand->id) }}">
                        {{$brand->name}}
                    </a>
                    </td>
                <td>{{ $brand->models_count }} model</td>
                <td>{{ $brand->cars_count }} avtomobil</td>
                <td>
                  @if ($brand->discounts)
                    <button class="btn btn-outline-{{ $brand->discounts->status == 1 ? 'primary' : 'danger' }} btn-xs">
                      Endirim {{ $brand->discounts->discount }} {{ $brand->discounts->type == 1 ? '%' : '₼' }}
                    </button>
                  @endif
                </td>
                <td>
                    <button class="btn btn-outline-{{ $brand->status==1 ? 'success' : 'danger' }} btn-xs">
                    {{ $brand->status==1 ? 'Aktiv' : 'Deaktiv' }}
                    </button>
                </td>
                <td>
                <ul class="list-inline">
                            <li class="list-inline-item">
                            <a class="dropdown-item d-flex align-items-center" href="{{ route(ADMIN.'.brands.edit', $brand->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">Düzəliş et</span></a>
                            </li>
                            <li class="list-inline-item">
                                {!! Form::open([
                                'class'=>'delete',
                                'url' => route(ADMIN . '.brands.destroy', $brand->id),
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
