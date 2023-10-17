<!DOCTYPE html>
<html> 
  @include('layouts.partials.head') 
  <body>
    <script src="{{ asset('assets/js/spinner.js')}}"></script>
    <div class="main-wrapper" id="app"> 
      @include('admin.partials.sidebar') 
      <div class="page-wrapper"> 
        @include('admin.partials.topbar') 
            <div class="page-content">
            @yield('content')
            </div>
            <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
            <p class="text-muted mb-1 mb-md-0">Copyright © 2023 <a href="https://www.nobleui.com/" target="_blank">NobleUI</a>. </p>
            <p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i>
            </p>
            </footer>
      </div>
    </div>
    @include('sweetalert::alert')
    <!-- base js -->
    <script  src="{{ asset('js/app.js')}}"></script> 
    <script  src="{{ asset('assets/plugins/feather-icons/feather.min.js')}}"></script>
    <script  src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script  src="{{ asset('assets/js/template.js')}}"></script>
    <script  src="{{ asset('assets/js/dashboard.js')}}"></script>
    <script  src="{{ asset('assets/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
    <script  src="{{ asset('assets/plugins/select2/select2.min.js')}}"></script>
    <script  src="{{ asset('assets/js/data-table.js')}}"></script>
    <script  src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js')}}"></script>
    <script  src="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.js')}}"></script>
    <script  src="{{ asset('assets/plugins/dropify/js/dropify.min.js')}}"></script>
    <script  src="{{ asset('assets/js/dropify.js')}}"></script>
    <script  src="{{ asset('assets/js/select2.js')}}"></script>
    <script src="{{asset('assets/js/inputmask.js')}}"></script>
    <script src="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
    <script src="{{ asset('assets/js/tags-input.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script  src="{{ asset('assets/plugins/dropzone/dropzone.min.js')}}"></script>
    <script  src="{{ asset('assets/js/dropzone.js')}}"></script>

    @stack('js')
  </body>
  
</html>