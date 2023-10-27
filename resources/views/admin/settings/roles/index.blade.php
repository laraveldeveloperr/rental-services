@extends('admin.default')
@section('content')
    <div class="card">
        <div class="card-header">
        <h3>{{ __('roles') }}
            <div class="float-end">
                @can('create roles')
                <a class="btn btn-success btn-xs" href="{{ route(ADMIN.'.roles.create') }}">
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
                <th>{{ __('role') }}</th>
                <th>{{ __('role_permissions') }}</th>
                <th>{{ __('operations') }}</th>
              </tr>
            </thead>
            <tbody>
              @foreach($roles as $role_key => $role)
              <tr>
                <td>
                    {{ $role_key+1 }}
                </td>
                <td>
                    <a href="{{ route(ADMIN.'.roles.edit', $role->id) }}">
                        {{$role->name}}
                    </a>
                    </td>
                    <td>
                      @can('permissions')
                      <button type="button" class="btn btn-outline-primary btn-xs" data-bs-toggle="modal" data-bs-target=".permission-modal-{{ $role->id }}">Səlahiyyətlərə bax</button>
                      @endcan
                    <div class="modal fade permission-modal-{{ $role->id }}" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <form action="{{ route(ADMIN.'.roles.set-permission') }}" method="post">
                            @csrf
                            <div class="card">
                            <div class="card-header">
                              <h3>{{ __('permissions') }}</h3>
                            </div>
                            <div class="card-body">
                              <div class="row">
                                @php
                                $rolePermissions = $role->permissions->pluck('id')->toArray();
                                @endphp
                              <input type="hidden" value="{{ $role->id }}" name="role_id" id="">
                              @foreach ($permissions as $permission)
                              <div class="form-check mb-3 col-md-4">
                                <input type="checkbox" {{ in_array($permission->id, $rolePermissions) ? 'checked' : '' }} value="{{ $permission->id }}" class="form-check-input" name="permissions[]" id="exampleCheck1-{{ $permission->id }}">
                                <label class="form-check-label" for="exampleCheck1-{{ $permission->id }}">
                                  {{ $permission->name }}
                                </label>
                              </div>
                              @endforeach
                            </div>
                          </div>
                          <div class="card-footer">
                          @can('edit permissions')
                          <button class="btn btn-xs btn-success">{{ __('apply') }}</button>
                          @endcan  
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  
                  </td>
                <td>
                  
                <ul class="list-inline">
                  @can('edit roles')
                  <li class="list-inline-item">
                    <a class="dropdown-item d-flex align-items-center" href="{{ route(ADMIN.'.roles.edit', $role->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">{{ __('edit') }}</span></a>
                  </li>
                  @endcan
                  @can('delete roles')
                  <li class="list-inline-item">
                      {!! Form::open([
                      'class'=>'delete',
                      'url' => route(ADMIN . '.roles.destroy', $role->id),
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
