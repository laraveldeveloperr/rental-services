@extends('admin.default')
@push('css')
    <style>
        #main-td {
            font-weight: bold;
        }
    </style>
@endpush
@section('content')

<div class="col-lg-12 col-xs-12 grid-margin stretch-card">
    <div class="card">
        <div class="row">
            
        </div>
    </div>
</div>

    <div class="col-lg-12 col-xl-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">{{ __('monthly_brons') }}</h6>
                    </div>
                    <div class="col-xl-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <canvas id="ayliqChart"></canvas>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-xs-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="table table-striped table-bordered">
                <table class="table">
                    <tr>
                        <td id="main-td">{{ __('brand') }}</td>
                        <td> {{ $car->brands->name }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">{{ __('model') }}</td>
                        <td> {{ $car->models->name }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">{{ __('ban_type') }}</td>
                        <td> {{ $car->ban_types->name }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">{{ __('fuel_type') }}</td>
                        <td> {{ $car->fuels->name }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">{{ __('gear') }}</td>
                        <td> {{ $car->gears->name }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">{{ __('transmission') }}</td>
                        <td> {{ $car->transmissions->name }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">{{ __('engine') }}</td>
                        <td> {{ $car->engines->name }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">{{ __('color') }}</td>
                        <td> {{ $car->colors->name }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">{{ __('car_properties') }}</td>
                        <td> 
                            <div class="list-group">
                                @foreach ($car->properties as $property)
                                <a href="#" class="list-group-item list-group-item-action">{{ $property->name }}</a>
                                @endforeach 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td id="main-td">{{ __('licence_plate') }}</td>
                        <td> {{ $car->licence_plate }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">{{ __('manufacturing_year') }}</td>
                        <td> {{ $car->manufacturing_year }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">{{ __('daily_price') }}</td>
                        <td> {{ $car->day_price }} ₼</td>
                    </tr>
                    <tr>
                        <td id="main-td">{{ __('weekly_price') }}</td>
                        <td> {{ is_null($car->week_price) ? __('weekly_price_not_specified') : $car->week_price .'₼' }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">Aylıq qiymət</td>
                        <td> {{ is_null($car->month_price) ? __('monthly_price_not_specified') : $car->week_price .'₼' }} ₼</td>
                    </tr>
                    <tr>
                        <td id="main-td">Status</td>
                        <td> 
                            <button class="btn btn-xs btn-outline-{{ $car->status == 1 ? 'success' : 'danger' }}">
                            {{ $car->status == 1 ? __('active') : __('deactive') }}
                            </button>    
                        </td> 
                    </tr>
                    <tr>
                        <td id="main-td">__('discount')</td>
                        <td> 
                        @if ($car->discounts)
                            <button class="btn btn-outline-{{ $car->discounts->status == 1 ? 'primary' : 'danger' }} btn-xs">
                            __('discount') {{ $car->discounts->discount }} {{ $car->discounts->type == 1 ? '%' : '₼' }}
                            </button>
                        @else
                            <p class="text-danger">__('discount_not_specified')</p>
                            @endif  
                        </td> 
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

    
@endsection

@push('js')
    <script>
        var ctx2 = document.getElementById('ayliqChart').getContext('2d');
        var bronChart = new Chart(ctx2,{
        type:'bar',
        data:{
            labels: {!! json_encode($labels_month) !!},
            datasets: {!! json_encode($datasets_month) !!},
        }
        });
    </script>
@endpush