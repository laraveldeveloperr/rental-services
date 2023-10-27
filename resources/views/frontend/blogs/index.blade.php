@extends('layouts.app')
@section('content')
<section class="gauto-breadcromb-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcromb-box">
                     <h3>{{ __('blogs') }}</h3>
                     <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.html">{{ __('home') }}</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>{{ __('blogs') }}</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="gauto-blog-page-area section_70">
         <div class="container">
            <div class="row">
                     @foreach ($blogs as $blog_key => $blog)
                     <div class="col-lg-4">
                        <div class="single-blog">
                            <div class="blog-image">
                            <a href="{{ route('blogs.show', $blog->slug) }}">
                            <img src="{{ asset('images/blogs').'/'.$blog->image }}" alt="{{ $blog->title }}">
                            </a>
                            </div>
                            <div class="blog-text">
                            <h3><a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a></h3>
                            <ul>
                                <li><i class="fa fa-eye"></i><a href="{{ route('blogs.show', $blog->slug) }}"> {{ $blog->viewed }} </a></li>
                                <li><i class="fa fa-calendar"></i><a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->created_at->format('d.m.Y') }}</a></li>
                            </ul>
                            <p>{!! $blog->content !!}</p>
                            <a href="{{ route('blogs.show', $blog->slug) }}" class="gauto-btn">read more</a>
                            </div>
                        </div>
                     </div>
                     @endforeach
                     <div class="pagination-box-row">
                        {{ $blogs->links() }}
                     </div>
            </div>
         </div>
      </section>
@endsection