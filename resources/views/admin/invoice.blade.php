<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Document</title>
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
    .container {
      max-width: 100%;
      margin: 0 auto;
      padding: 20px;
    }

    .card {
      border: 1px solid #000;
      padding: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table,
    th,
    td {
      border: 1px solid #333;
    }

    th,
    td {
      padding: 10px;
      text-align: left;
    }
  </style>
</head>

<body>
  <div class="col-md-12 container">
    <div class="card">
    <div class="container-fluid d-flex justify-content-between">
          <div class="col-lg-3 pe-0">
            <h4 class="fw-bold text-uppercase text-end mt-4 mb-2">{{  __('invoice') }}</h4>
            <h6 class="text-end mb-5 pb-4">{{ $bron->bron_number }}</h6>
            <p class="text-end">{{ $bron->name }} {{ $bron->surname }}</p>
            <h6 class="mb-0 mt-3 text-end fw-normal mb-2"><span class="text-muted">{{  __('start_date') }} :</span> {{ $bron->pick_up }}</h6>
            <h6 class="text-end fw-normal"><span class="text-muted">{{  __('end_date') }} :</span>{{ $bron->drop_off }}</h6>
          </div>
        </div>
        <div class="container-fluid mt-5 d-flex justify-content-center w-100">
          <div class="table-responsive w-100">
              <table class="table table-bordered">
                <thead>
                  <tr>
                      <th>#</th>
                      <th>{{  __('car') }}</th>
                      <th class="text-end">{{  __('licence_plate') }}</th>
                      <th class="text-end">{{  __('price') }} ({{  __('for_one_day') }})</th>
                      <th class="text-end">{{  __('day') }}</th>
                      <th class="text-end">{{  __('price_sum') }}</th>
                      <th class="text-end">{{  __('discounted_price') }}</th>
                    </tr>
                </thead>
                <tbody>
                  <tr class="text-end">
                    <td class="text-start">1</td>
                    <td class="text-start">{{ $bron->brands->name }} {{ $bron->models->name }}</td>
                    <td>{{ $bron->cars->licence_plate }}</td>
                    <td>{{ $bron->cars->day_price }} AZN</td>
                    <td>
                        {{ $gunFarki }}
                    </td>
                    <td>
                        {{ $bron->price }} AZN
                    </td>
                    <td>
                        {{ $bron->discounted_price }} AZN
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
                            <td class="text-bold-800">{{ __('total_amount') }}</td>
                            <td class="text-bold-800 text-end">{{ $bron->price }} AZN</td>
                          </tr>
                          <tr>
                              @if($bron->type==1)
                              <td class="text-bold-800">{{ __('discount_percentage') }}</td>
                              <td class="text-bold-800 text-end">{{ $bron->discount }} %</td>
                              @else
                              <td class="text-bold-800">{{ __('discount_amount') }}</td>
                              <td class="text-bold-800 text-end">{{ $bron->discount }} AZN</td>
                              @endif
                          </tr>
                        <tr>
                          <td>{{ __('tax') }}</td>
                          <td class="text-end">0 AZN</td>
                        </tr>
                        <tr class="bg-light">
                          <td class="text-bold-800">{{ __('amount_to_be_paid') }}</td>
                          <td class="text-bold-800 text-end">{{ $bron->discounted_price }} AZN</td>
                        </tr>
                      </tbody>
                  </table>
                </div>
            </div>
          </div>
        </div>
    </div>
  </div>

</body>

</html>