@extends('admin.default')
@push('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
        <link href="{{ asset('assets/plugins/dropzone/dropzone.min.css')}}" rel="stylesheet" />
        <style>
            .lightbox-gallery{
                background-image: linear-gradient(#4A148C, #E53935);
                background-repeat: no-repeat;
                color: #000;
                overflow-x: hidden
            }
            
            .lightbox-gallery p{
                color:#fff
            }
            
            .lightbox-gallery h2{
                font-weight:bold;
                margin-bottom:40px;
                padding-top:40px;
                color:#fff
            }
            
            @media (max-width:767px){
                .lightbox-gallery h2{
                    margin-bottom:25px;
                    padding-top:25px;
                    font-size:24px
                }
            }
            
            .lightbox-gallery .intro{
                font-size:16px;
                max-width:500px;
                margin:0 auto 40px
            }
            
            .lightbox-gallery .intro p{
                margin-bottom:0
            }
            
            .lightbox-gallery .photos{
                padding-bottom:20px
            }
            
            .lightbox-gallery .item{
                padding-bottom:30px
            }

            .image-container {
                position: relative;
                display: inline-block;
            }

            .delete-button {
                position: absolute;
                top: 10px; /* Yatay pozisyonu ayarlayın */
                right: 10px; /* Dikey pozisyonu ayarlayın */
                background-color: red; /* İstediğiniz arkaplan rengini ayarlayın */
                color: white;
                border: none;
                padding: 5px 10px;
                cursor: pointer;
                z-index: 2; /* Diğer öğelerin üzerine çıkmasını sağlar */
            }
        </style>
@endpush
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Qalereya
                <div class="float-end">
                    <a class="btn btn-success btn-xs" href="{{ route(ADMIN.'.cars.index') }}">
                        <span>
                            <i class="mdi mdi-plus"></i>
                        </span>    
                        {{ __('cars') }}
                    </a>
                </div>
            </h3>
        </div>
        <div class="card-body">
        <form action="{{ route(ADMIN.'.gallery-upload') }}" class="dropzone" id="exampleDropzone">
            @csrf
            <input type="hidden" name="cars_id" value="{{$cars_id}}" id="">
        </form>
        <div class="card mt-4">
            <div class="card-body gallery-content row">
            @foreach ($gallery as $image)
                <div class="col-sm-6 col-md-4 col-lg-3 item mt-4">
                    <div class="image-container">
                        <a href="{{ asset('images/cars').'/'.$image->image }}" data-lightbox="photos">
                            <img class="img-fluid" src="{{ asset('images/cars').'/'.$image->image }}" style="height: 150px; width:250px"">
                        </a>
                        <button class="btn btn-xs btn-outline-danger delete-button" data-image-id="{{ $image->id }}" >X</button>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    
    <script>
        Dropzone.options.exampleDropzone = {
            init: function () {
                this.on("success", function (file, response) {
                    
                });
            },
        };

        $('.delete-button').click(function(){
            var image_id = $(this).attr('data-image-id');
            var container = $(this).closest('.item');
            $.ajax({
                url:"{{ url('admin/gallery-delete') }}"+'/'+image_id,
                method:"POST",
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                success:function(response)
                {
                    container.remove();
                }
            })
        })
    </script>
@endpush