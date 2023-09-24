@extends('admin.default')
@section('content')
    <div class="card">
        <div class="card-header">
        <h3>Sürət qutusu
            <div class="float-end">
                <a class="btn btn-success btn-xs" href="{{ route(ADMIN.'.transmissions.create') }}">
                    <span>
                        <i class="mdi mdi-plus"></i>
                    </span>    
                    Yeni sürət qutusu
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
                <th>Sürət qutusu</th>
                <th>Avtomobil sayı</th>
                <th>Status</th>
                <th>Əməliyyatlar</th>
              </tr>
            </thead>
            <tbody>
              @foreach($items as $item_key => $item)
              <tr>
                <td>
                    {{ $item_key+1 }}
                </td>
                <td>
                    <a href="{{ route(ADMIN.'.transmissions.edit', $item->id) }}">
                        {{$item->name}}
                    </a>
                    </td>
                <td>{{ $item->cars_count }} avtomobil</td>
                <td>
                    <button class="btn btn-outline-{{ $item->status==1 ? 'success' : 'danger' }} btn-xs">
                    {{ $item->status==1 ? 'Aktiv' : 'Deaktiv' }}
                    </button>
                </td>
                <td>
                <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="{{ route(ADMIN . '.transmissions.edit', $item->id) }}" class="btn btn-info btn-sm text-white">Düzəliş et</a>
                            </li>
                            <li class="list-inline-item">
                                {!! Form::open([
                                'class'=>'delete',
                                'url' => route(ADMIN . '.transmissions.destroy', $item->id),
                                'method' => 'DELETE',
                                ])
                                !!}

                                <button class="btn btn-danger btn-sm">
                                    Sil
                                </button>

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
