@extends('layouts.app')
@section('content')
<section class="gauto-breadcromb-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcromb-box">
                    <h3>{{ __('car_listing') }}</h3>
                    <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.html">{{ __('home') }}</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>{{ $brand_name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gauto-car-listing section_70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="car-list-left">
                    
                    <div class="sidebar-widget">
                        <ul class="service-menu">
                            @foreach ($brands as $brand)
                            <li class="{{ $brand->name==$brand_name ? 'active' : ''}}">
                                <a href="#">{{ $brand->name }}<span>({{ $brand->cars->count() }})</span></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="sidebar-widget">
                        <form method="GET" action="{{ route('search') }}">
                            <p>
                                <select class="brands_id" name="brands_id">
                                    <option data-display="Marka">{{ __('brands') }}</option>
                                    @foreach ($brands_ as $brand)
                                    <option value="{{ $brand->id }}" {{ isset($_GET['brands_id'])==$brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </p>
                            <p>
                                <input id="start_date" value="{{ isset($_GET['start_date']) ? $_GET['start_date'] : '' }}" name="start_date" placeholder="{{ __('select_start_date') }}"
                                    data-select="datepicker" type="text">
                            </p>
                            <p>
                                <input id="end_date" value="{{ isset($_GET['end_date']) ? $_GET['end_date'] : '' }}" name="end_date" placeholder="{{ __('select_end_date') }}"
                                    data-select="datepicker" type="text">
                            </p>
                            <p>
                                <button type="submit" class="gauto-theme-btn">{{ __('find_car') }}</button>
                            </p>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-lg-8">
                <div class="car-listing-right">
                    <div class="property-page-heading">
                        <div class="propertu-page-head">
                            <ul>
                                <li class="active"><a href="#"><i class="fa fa-th-list"></i></a></li>
                                <li><a href="#"><i class="fa fa-th-large"></i></a></li>
                            </ul>
                        </div>
                        <div class="paging_status">
                            <p>1-10 of 25 results</p>
                        </div>
                        <div class="propertu-page-shortby">
                            <label><i class="fa fa-sort-amount-asc"></i>Sort By</label>
                            <select class="chosen-select-no-single" style="display: none;">
                                <option>Default</option>
                                <option>Price (Low to High)</option>
                                <option>Price (High to Low)</option>
                                <option>Featured</option>
                            </select>
                            <div class="nice-select chosen-select-no-single" tabindex="0"><span
                                    class="current">Default</span>
                                <ul class="list">
                                    <li data-value="Default" class="option selected">Default</li>
                                    <li data-value="Price (Low to High)" class="option">Price (Low to High)</li>
                                    <li data-value="Price (High to Low)" class="option">Price (High to Low)</li>
                                    <li data-value="Featured" class="option">Featured</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="car-grid-list">
                        <div class="row">
                            @foreach ($cars as $car)
                            <div class="col-md-6">
                                <div class="single-offers">
                                    <div class="offer-image">
                                        <a href="{{ route('car-details', $car->id) }}?brands_id={{ isset($_GET['brands_id']) ? $_GET['brands_id'] : '' }}&start_date={{ isset($_GET['start_date']) ? $_GET['start_date'] : '' }}&end_date={{ isset($_GET['end_date']) ? $_GET['end_date'] : '' }}">
                                            <img src="{{ asset('images/cars').'/'.$car->main_image }}" alt="offer 1">
                                        </a>
                                    </div>
                                    <div class="offer-text">
                                        <a href="{{ route('car-details', $car->id) }}?brands_id={{ isset($_GET['brands_id']) ? $_GET['brands_id'] : '' }}&start_date={{ isset($_GET['start_date']) ? $_GET['start_date'] : '' }}&end_date={{ isset($_GET['end_date']) ? $_GET['end_date'] : '' }}">
                                            <h3>{{ $car->brands->name }} {{ $car->models->name }}</h3>
                                        </a>
                                        <h4>{{ $car->day_price }} AZN<span>/ Day</span></h4>
                                        <ul>
                                            <li><i class="fa fa-car"></i>Buraxılış ili: {{ $car->manufacturing_year }}
                                            </li>
                                            <li><i class="fa fa-cogs"></i>{{ $car->transmissions->name }}</li>
                                            <li><i class="fa fa-dashboard"></i>{{ $car->engines->name }}</li>
                                        </ul>
                                        <div class="offer-action">
                                            <a href="{{ route('car-details', $car->id) }}?brands_id={{ isset($_GET['brands_id']) ? $_GET['brands_id'] : '' }}&start_date={{ isset($_GET['start_date']) ? $_GET['start_date'] : '' }}&end_date={{ isset($_GET['end_date']) ? $_GET['end_date'] : '' }}" class="offer-btn-1">Rent
                                                Car</a>
                                            <a href="{{ route('car-details', $car->id) }}?brands_id={{ isset($_GET['brands_id']) ? $_GET['brands_id'] : '' }}&start_date={{ isset($_GET['start_date']) ? $_GET['start_date'] : '' }}&end_date={{ isset($_GET['end_date']) ? $_GET['end_date'] : '' }}"
                                                class="offer-btn-2">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="pagination-box-row">
                        <p>Page 1 of 6</p>
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li>...</li>
                            <li><a href="#">6</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')
    <script>
        $('.models_id').change(function () {
            var selectedOption = $(this).find('option:selected');
            selectedOption.data('display', selectedOption.text());
         });
    </script>
@endpush