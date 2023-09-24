<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive Laravel Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, laravel, theme, front-end, ui kit, web">

  <title>{{ config('app.name') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
  <!-- End fonts -->
  
  <!-- CSRF Token -->
  <meta name="_token" content="MtfPUaaOgWeSJ65M5nuNpIwHHEIQkO4fSYEaLxvw">
  
  <link rel="shortcut icon" href="favicon.ico">

  <!-- plugin css -->
  <link href="{{ asset('assets/fonts/feather-font/css/iconfont.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/%40mdi/css/materialdesignicons.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/dropzone/dropzone.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.css')}}" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <!-- end plugin css -->

  <!-- common css -->
  <link href="{{ asset('css/app.css')}}" rel="stylesheet" />
  <link href="{{ asset('css/new.css')}}" rel="stylesheet" />
  <!-- end common css -->
    @stack('css')
  </head>
