@extends('admin.default')
@section('content')
<div class="card">
	<div class="card-header">
        <h3>Bloq
            <div class="float-end">
                <a class="btn btn-danger btn-xs" href="{{ route(ADMIN.'.blogs.index') }}">
                    <span>
                        <i class="mdi mdi-arrow-left"></i>
                    </span>    
                    Bloqlar
                </a>
            </div>
        </h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="{{ asset('images/blogs').'/'.$blog->image }}" alt="" srcset="">
            </div>
            <div class="col-md-12">
                {!! $blog->content !!}
            </div>
        </div>
    </div>
@endsection