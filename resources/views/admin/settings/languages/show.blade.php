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
          {{ __('languages') }}
        </a>
      </div>
    </h3>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table">
        <form action="{{ route(ADMIN .'.update-translations') }}" method="POST">
          @csrf
          <input type="hidden" name="lang" value="{{ $lang->shortened }}">
          <thead>
            <tr>
              <th>№</th>
              <th>{{ __('constant') }}</th>
              <th>{{ __('value') }}</th>
            </tr>
          </thead>
          <tbody>
            @foreach($translations as $type_key => $type)
            <tr>
              <td>
                {{ $type_key+1 }}
              </td>
              <td>
                <input type="text" value="{{ $type }}" name="constant[{{ $type_key }}]" class="form-control" readonly id="">
              </td>
              <td>
                <input type="text" value="{{ $words[$type_key]['value'] }}" class="form-control" name="value[{{ $type_key }}]" id="">
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <td colspan="3">
                <button class="btn btn-xs btn-success">{{ __('save') }}</button>
              </td>
            </tr>
          </tfoot>
        </form>
      </table>
    </div>
  </div>
</div>
@endsection