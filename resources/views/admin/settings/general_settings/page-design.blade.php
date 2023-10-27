@extends('admin.default')
@push('css')
<style>
    .div {
        border: 1px solid orange;
        padding: 15px;
    }
</style>
@endpush
@section('content')
<div class="card">
    <div class="card-header">
        <h3>{{ __('main_page_view') }}
        </h3>
    </div>
    <div class="card-body">
 
        
                <form class="forms-sample" action="{{ route(ADMIN.'.page-design.update', $page->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">{{ __('topbar') }}</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="topbar" {{ $page->topbar==1 ? 'checked' : '' }}
                                class="form-check-input" id="checkDefault">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">{{ __('header') }}</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="header" {{ $page->header==1 ? 'checked' : '' }}
                                class="form-check-input" id="checkDefault">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">{{ __('menu') }}</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="menu" {{ $page->menu==1 ? 'checked' : '' }}
                                class="form-check-input" id="checkDefault">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">{{ __('slide') }}</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="slide" {{ $page->slide==1 ? 'checked' : '' }}
                                class="form-check-input" id="checkDefault">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">{{ __('search_bar') }}</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="search" {{ $page->search==1 ? 'checked' : '' }}
                                class="form-check-input" id="checkDefault">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">{{ __('about_section') }}</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="about_us_section"
                                {{ $page->about_us_section==1 ? 'checked' : '' }} class="form-check-input"
                                id="checkDefault">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">{{ __('banner1') }}</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="banner1" {{ $page->banner1==1 ? 'checked' : '' }}
                                class="form-check-input" id="checkDefault">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">{{ __('banner2') }}</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="banner2" {{ $page->banner2==1 ? 'checked' : '' }}
                                class="form-check-input" id="checkDefault">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">{{ __('blog') }}</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="blogs" {{ $page->blogs==1 ? 'checked' : '' }}
                                class="form-check-input" id="checkDefault">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">{{ __('comments_for_site') }}</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="comments_for_site"
                                {{ $page->comments_for_site==1 ? 'checked' : '' }} class="form-check-input"
                                id="checkDefault">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">{{ __('our_members') }}</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="members" {{ $page->members==1 ? 'checked' : '' }}
                                class="form-check-input" id="checkDefault">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">{{ __('offers') }}</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="offers" {{ $page->offers==1 ? 'checked' : '' }}
                                class="form-check-input" id="checkDefault">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">{{ __('services') }}</label>
                        <div class="col-sm-9">
                            <input type="checkbox" name="services" {{ $page->services==1 ? 'checked' : '' }}
                                class="form-check-input" id="checkDefault">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="home_about_section_image"
                            class="col-sm-3 col-form-label">{{ __('home_about_section_image') }}</label>
                        <div class="col-sm-9">
                            <input type="file" name="home_about_section_image" id="myDropify1" data-default-file="{{ asset('images').'/'.$page->home_about_section_image }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for "banner1_image" class="col-sm-3 col-form-label">{{ __('banner1_image') }}</label>
                        <div class="col-sm-9">
                            <input type="file" name="banner1_image" id="myDropify2" data-default-file="{{ asset('images').'/'.$page->banner1_image }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for "banner2_image" class="col-sm-3 col-form-label">{{ __('banner2_image') }}</label>
                        <div class="col-sm-9">
                            <input type="file" name="banner2_image" id="myDropify3" data-default-file="{{ asset('images').'/'.$page->banner2_image }}">
                        </div>
                    </div>
            <button type="submit" class="btn btn-primary me-2 mt-4">{{ __('save') }}</button>
                </form>
        </div>
    </div>
    @endsection

    @push('js')
    <script>
        $(document).ready(function() {
            $('#myDropify1').dropify();
            $('#myDropify2').dropify();
            $('#myDropify3').dropify();
        });
    </script>
    @endpush