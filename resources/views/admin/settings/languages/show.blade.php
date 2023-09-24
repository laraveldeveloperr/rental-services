@extends('admin.default')
@section('content')
    <div class="card">
        <div class="card-header">
        <h3>{{ $lang->name }}
            <div class="float-end">
            <a class="btn btn-danger btn-xs" href="{{ route(ADMIN.'.languages.index') }}">
                    <span>
                        <i class="mdi mdi-arrow-left"></i>
                    </span>    
                    Dil
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
                <th>Sabit</th>
                <th>Dəyər</th>
              </tr>
            </thead>
            <tbody>
              @foreach($translations as $type_key => $type)
              <tr>
                <td>
                    {{ $type_key+1 }}
                </td>
                <td>
                    <a href="{{ route(ADMIN.'.languages.edit', $type->id) }}">
                        {{$type->key}}
                    </a>
                    </td>
                <td>
                  <input type="text" value="{{ $type->value }}" class="form-control" name="" id="">
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection
