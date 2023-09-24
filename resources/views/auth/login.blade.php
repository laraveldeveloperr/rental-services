<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive Laravel Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, laravel, theme, front-end, ui kit, web">

  <title>NobleUI - Laravel Admin Dashboard Template</title>


  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

  

  <meta name="_token" content="MtfPUaaOgWeSJ65M5nuNpIwHHEIQkO4fSYEaLxvw">
  
  <link rel="shortcut icon" href="{{ asset('favicon.ico')}}">


  <link href="{{ asset('assets/fonts/feather-font/css/iconfont.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" />

  <link href="{{ asset('css/app.css')}}" rel="stylesheet" />

  </head>
<body>

  <script src="{{ asset('assets/js/spinner.js')}}"></script>

  <div class="main-wrapper" id="app">
    <div class="page-wrapper full-page">
      <div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-4 pe-md-0">
            <div class="auth-side-wrapper" style="background-image: url('https://images.unsplash.com/photo-1603553329474-99f95f35394f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8fA%3D%3D&w=1000&q=80')">

            </div>
          </div>
          <div class="col-md-8 ps-md-0">
            <div class="auth-form-wrapper px-4 py-5">
              <a href="#" class="noble-ui-logo d-block mb-2">RENTAL<span>Services</span></a>
              <h5 class="text-muted fw-normal mb-4">Xoş gəldiniz! Hesaba daxil olun</h5>
              <form class="forms-sample" method="POST" action="{{route('login')}}">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Şifrə</label>
                  <input type="password" class="form-control" id="password" name="password" autocomplete="current-password" placeholder="Şifrə">
                </div>
               
                <div>
                  <button class="btn btn-primary me-2 mb-2 mb-md-0">Daxil olun</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
    </div>
  </div>
    <script src="{{ asset('js/app.js')}}"></script>
    <script src="{{ asset('assets/plugins/feather-icons/feather.min.js')}}"></script>
    <script src="{{ asset('assets/js/template.js')}}"></script>
    </body>
</html>