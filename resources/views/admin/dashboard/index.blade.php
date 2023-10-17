@extends('admin.default')

@section('content')

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h4 class="mb-3 mb-md-0">{{ __('welcome') }}, {{ auth()->user()->name }}</h4>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">{{ __('all_brons') }}</h6>
                      <div class="dropdown mb-2">
                        <button class="btn btn-link p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </button>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <div class="d-flex align-items-baseline">
                          <p class="text-success">
                            <span>+{{ $bron_count }}</span>
                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                          </p>
                        </div>
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                        <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">{{ __('last_month') }}</h6>
                      <div class="dropdown mb-2">
                        <button class="btn btn-link p-0" type="button" id="dropdownMenuButton1"
                          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </button>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <div class="d-flex align-items-baseline">
                          <p class="text-success">
                            <span>+{{$bron_count_last_30_days}}</span>
                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                          </p>
                        </div>
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                        <div id="ordersChart" class="mt-md-3 mt-xl-0"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">{{ __('last_week') }}</h6>
                      <div class="dropdown mb-2">
                        <button class="btn btn-link p-0" type="button" id="dropdownMenuButton2"
                          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </button>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <div class="d-flex align-items-baseline">
                          <p class="text-success">
                            <span>+{{ $bron_count_last_7_days }}</span>
                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                          </p>
                        </div>
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                        <div id="growthChart" class="mt-md-3 mt-xl-0"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- row -->

        <div class="row">
          <div class="col-12 col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                  <h6 class="card-title mb-0">{{ __('remainder') }}</h6>
                </div>
                <div class="row align-items-start mb-2">
                  <div class="alert alert-primary" role="alert">
                    <p class="text-muted tx-13 mb-3 mb-md-0">{{ __('dear') }} {{ auth()->user()->name }}, {{__('keep_your_password_secret_for_system_security!')}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- row -->

        <div class="row">
        <div class="col-lg-12 col-xl-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">{{ __('weekly_brons') }}</h6>
                </div>
                <div class="col-xl-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                    <canvas id="heftelikChart"></canvas>
                    </div>
                  </div>
                </div>
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
        </div> <!-- row -->

        <div class="row">
          <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">{{ __('messages') }}</h6>
                  <div class="dropdown mb-2">
                    <button class="btn btn-link p-0" type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </button>
                  </div>
                </div>
                <div class="d-flex flex-column">
                  @foreach ($messages as $message)
                  <a href="{{ route(ADMIN.'.messages.show', $message->id) }}" class="d-flex align-items-center border-bottom pb-3">
                    <div class="me-3">
                      <img src="{{ asset('assets/images/faces/face2.jpg')}}" class="rounded-circle wd-35" alt="user">
                    </div>
                    <div class="w-100">
                      <div class="d-flex justify-content-between">
                        <h6 class="fw-normal text-body mb-1">{{ $message->sender }}</h6>
                        <p class="text-muted tx-12">{{ $message->created_at->format('d.m.Y') }}</p>
                      </div>
                      <p class="text-muted tx-13">{{ substr($message->message, 0, 50) }}...</p>
                    </div>
                  </a>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-xl-8 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">{{ __('notifications') }}</h6>
                </div>
                <div class="table-responsive">
                  <table class="table table-hover mb-0">
                    <thead>
                      <tr>
                        <th class="pt-0">#</th>
                        <th class="pt-0">Project Name</th>
                        <th class="pt-0">Start Date</th>
                        <th class="pt-0">Due Date</th>
                        <th class="pt-0">Status</th>
                        <th class="pt-0">Assign</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>NobleUI jQuery</td>
                        <td>01/01/2023</td>
                        <td>26/04/2023</td>
                        <td><span class="badge bg-danger">Released</span></td>
                        <td>Leonardo Payne</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>NobleUI Angular</td>
                        <td>01/01/2023</td>
                        <td>26/04/2023</td>
                        <td><span class="badge bg-success">Ətraflı bax</span></td>
                        <td>Carl Henson</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>NobleUI ReactJs</td>
                        <td>01/05/2023</td>
                        <td>10/09/2023</td>
                        <td><span class="badge bg-info">Pending</span></td>
                        <td>Jensen Combs</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>NobleUI VueJs</td>
                        <td>01/01/2023</td>
                        <td>31/11/2023</td>
                        <td><span class="badge bg-warning">Work in Progress</span>
                        </td>
                        <td>Amiah Burton</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>NobleUI Laravel</td>
                        <td>01/01/2023</td>
                        <td>31/12/2023</td>
                        <td><span class="badge bg-danger">Coming soon</span></td>
                        <td>Yaretzi Mayo</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>NobleUI NodeJs</td>
                        <td>01/01/2023</td>
                        <td>31/12/2023</td>
                        <td><span class="badge bg-primary">Coming soon</span></td>
                        <td>Carl Henson</td>
                      </tr>
                      <tr>
                        <td class="border-bottom">3</td>
                        <td class="border-bottom">NobleUI EmberJs</td>
                        <td class="border-bottom">01/05/2023</td>
                        <td class="border-bottom">10/11/2023</td>
                        <td class="border-bottom"><span class="badge bg-info">Pending</span></td>
                        <td class="border-bottom">Jensen Combs</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- row -->

@endsection

@push('js')
  <script>
    var ctx = document.getElementById('heftelikChart').getContext('2d');
    var bronChart = new Chart(ctx,{
      type:'bar',
      data:{
        labels: {!! json_encode($labels_week) !!},
        datasets: {!! json_encode($datasets_week) !!},
      }
    });

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
