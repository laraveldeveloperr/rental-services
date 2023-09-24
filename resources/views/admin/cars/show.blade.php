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
                    <h6 class="card-title mb-0">Aylıq bronlar</h6>
                    <div class="dropdown mb-2">
                        <button class="btn btn-link p-0" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye"
                            class="icon-sm me-2"></i> <span class="">Ətraflı bax</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2"
                            class="icon-sm me-2"></i> <span class="">Düzəliş et</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash"
                            class="icon-sm me-2"></i> <span class="">Sil</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer"
                            class="icon-sm me-2"></i> <span class="">Çap et</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download"
                            class="icon-sm me-2"></i> <span class="">Endir</span></a>
                        </div>
                    </div>
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
                        <td id="main-td">Marka</td>
                        <td> {{ $car->brands->name }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">Model</td>
                        <td> {{ $car->models->name }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">Ban növü</td>
                        <td> {{ $car->ban_types->name }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">Yanacaq</td>
                        <td> {{ $car->fuels->name }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">Ötürücü</td>
                        <td> {{ $car->gears->name }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">Sürət qutusu</td>
                        <td> {{ $car->transmissions->name }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">Mator həcmi</td>
                        <td> {{ $car->engines->name }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">Rəng</td>
                        <td> {{ $car->colors->name }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">Avtomobil özəllikləri</td>
                        <td> 
                            <div class="list-group">
                                @foreach ($car->properties as $property)
                                <a href="#" class="list-group-item list-group-item-action">{{ $property->name }}</a>
                                @endforeach 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td id="main-td">Dövlət qeydiyyat nişanı</td>
                        <td> {{ $car->licence_plate }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">İstehsal tarixi</td>
                        <td> {{ $car->manufacturing_year }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">Günlük qiymət</td>
                        <td> {{ $car->day_price }} ₼</td>
                    </tr>
                    <tr>
                        <td id="main-td">Həftəlik qiymət</td>
                        <td> {{ is_null($car->week_price) ? 'Həftəlik qiymət təyin edilməyib' : $car->week_price .'₼' }} </td>
                    </tr>
                    <tr>
                        <td id="main-td">Aylıq qiymət</td>
                        <td> {{ is_null($car->month_price) ? 'Aylıq qiymət təyin edilməyib' : $car->week_price .'₼' }} ₼</td>
                    </tr>
                    <tr>
                        <td id="main-td">Status</td>
                        <td> 
                            <button class="btn btn-xs btn-outline-{{ $car->status == 1 ? 'success' : 'danger' }}">
                            {{ $car->status == 1 ? 'Aktiv' : 'Deaktiv' }}
                            </button>    
                        </td> 
                    </tr>
                    <tr>
                        <td id="main-td">Endirim</td>
                        <td> 
                        @if ($car->discounts)
                            <button class="btn btn-outline-{{ $car->discounts->status == 1 ? 'primary' : 'danger' }} btn-xs">
                            Endirim {{ $car->discounts->discount }} {{ $car->discounts->type == 1 ? '%' : '₼' }}
                            </button>
                        @else
                            <p class="text-danger">Endirim tətbiq edilməyib</p>
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