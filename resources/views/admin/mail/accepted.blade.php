<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rezervasyon Onayı</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* E-posta için özel stil kuralları buraya eklenebilir */
    body {
      font-family: Arial, sans-serif;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
    }
    .header {
      background-color: #f2f2f2;
      padding: 20px;
      text-align: center;
    }
    .order-details {
      margin-top: 20px;
    }
    .order-details table {
      width: 100%;
      border-collapse: collapse;
      border: 1px solid #ddd;
    }
    .order-details th, .order-details td {
      border: 1px solid #ddd;
      padding: 8px;
    }
    .order-details th {
      background-color: #f2f2f2;
      text-align: left;
    }
    .footer {
      background-color: #f2f2f2;
      padding: 10px;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
        <center>
            <img src="https://stg1.mysanatorium.com/frontend/images/logo/logo_new.png">
        </center>
      <h2>Bron qəbul edildi!</h2>
      <p>Salam,</p>
      <p class="text-success">Avtomobil bronu qəbul edildi. Bron məlumatları:</p>
    </div>
    <div class="order-details">
    <table>
        <tr>
          <th>Bron nömrəsi:</th>
          <td>{{ $bron_number }}</td>
        </tr>
        <tr>
          <th>Marka:</th>
          <td>{{$brands_id}}</td>
        </tr>
        <tr>
          <th>Model:</th>
          <td>
              {{ $models_id }}
          </td>
        </tr>
        <tr>
          <th>Avtomobil:</th>
          <td>
              {{ $cars_id }}
          </td>
        </tr>
        <tr>
          <th>Sifariş tarixi:</th>
          <td>{{$start_date}}</td>
        </tr>
        <tr>
          <th>Bitiş tarixi:</th>
          <td>{{$end_date}}</td>
        </tr>
        <tr>
          <th>Qiymət:</th>
          <td>{{ $price }}</td>
        </tr>
        <tr>
          <th>Endirim tipi:</th>
          <td>{{ $discount_type }}</td>
        </tr>
        <tr>
          <th>Endirim:</th>
          <td>{{ $discount }}</td>
        </tr>
        <tr>
          <th>Endirimli qiymət:</th>
          <td>{{ $discounted_price }}</td>
        </tr>
        <tr>
          <th class="text-success">Bron statusu:</th>
          <td class="text-success">Qəbul edildi</td>
        </tr>
      </table>
    </div>
    <div class="footer">
      <p>Bizi seçdiyiniz üçün təşəkkür edirik!</p>
    </div>
  </div>
</body>
</html>