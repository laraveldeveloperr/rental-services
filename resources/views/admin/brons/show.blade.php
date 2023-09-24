@extends('admin.default')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <div class="container-fluid d-flex justify-content-between">
          <div class="col-lg-3 ps-0">
            <img src="{{ asset('images').'/'.$general_settings->logo }}" height="150" width="250" alt="">                
            <p class="mt-4">{{ $general_settings->address }}</p>
          </div>
          <div class="col-lg-3 pe-0">
            <h4 class="fw-bold text-uppercase text-end mt-4 mb-2">Faktura</h4>
            <h6 class="text-end mb-5 pb-4">{{ $bron->bron_number }}</h6>
            <p class="text-end">{{ $bron->name }} {{ $bron->surname }}</p>
            <h6 class="mb-0 mt-3 text-end fw-normal mb-2"><span class="text-muted">Başlanğıc tarixi :</span> {{ $bron->pick_up }}</h6>
            <h6 class="text-end fw-normal"><span class="text-muted">Bitiş tarixi :</span>{{ $bron->drop_off }}</h6>
          </div>
        </div>
        <div class="container-fluid mt-5 d-flex justify-content-center w-100">
          <div class="table-responsive w-100">
              <table class="table table-bordered">
                <thead>
                  <tr>
                      <th>#</th>
                      <th>Avtomobil</th>
                      <th class="text-end">Dövlət qeydiyyat nişanı</th>
                      <th class="text-end">Qiymət (1 gün üçün)</th>
                      <th class="text-end">Gün</th>
                      <th class="text-end">Toplam qiymət</th>
                      <th class="text-end">Endirimli qiymət</th>
                    </tr>
                </thead>
                <tbody>
                  <tr class="text-end">
                    <td class="text-start">1</td>
                    <td class="text-start">{{ $bron->brands->name }} {{ $bron->models->name }}</td>
                    <td>{{ $bron->cars->licence_plate }}</td>
                    <td>{{ $bron->cars->day_price }} ₼</td>
                    <td>
                        {{ $gunFarki }}
                    </td>
                    <td>
                        {{ $gunFarki*$bron->cars->day_price }} ₼
                    </td>
                    <td>
                        {{ $bron->discounted_price }} ₼
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
        <div class="container-fluid mt-5 w-100">
          <div class="row">
            <div class="col-md-6 ms-auto">
                <div class="table-responsive">
                  <table class="table">
                      <tbody>
                          <tr>
                            <td class="text-bold-800">Cəmi məbləğ</td>
                            <td class="text-bold-800 text-end">{{ $bron->price }} ₼</td>
                          </tr>
                          <tr>
                            <td class="text-bold-800">Endirim faizi</td>
                            <td class="text-bold-800 text-end">{{ $discount }} %</td>
                          </tr>
                        <tr>
                          <td>ƏDV</td>
                          <td class="text-end">0 ₼</td>
                        </tr>
                        <tr class="bg-light">
                          <td class="text-bold-800">Ödəniləcək məbləğ</td>
                          <td class="text-bold-800 text-end">{{ $bron->discounted_price }} ₼</td>
                        </tr>
                      </tbody>
                  </table>
                </div>
            </div>
          </div>
        </div>
        <div class="container-fluid w-100">
          <a href="javascript:;" class="btn btn-primary float-end mt-4 ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send me-3 icon-md"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>Göndər</a>
          <a href="{{ $bron->id }}/invoice" class="btn btn-outline-primary float-end mt-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer me-2 icon-md"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>Endir</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection