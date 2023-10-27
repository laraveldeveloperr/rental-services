@extends('layouts.app')
@section('content')
<section class="gauto-breadcromb-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcromb-box">
                     <h3>{{$blog->title }}</h3>
                     <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.html">{{ __('home') }}</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>{{ $blog->title }}</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
<section class="gauto-blog-page-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="blog-page-left single-blog-page">
                     <div class="single-blog">
                        <div class="blog-image">
                           <a href="#">
                           <img src="{{ asset('images/blogs').'/'.$blog->image }}" alt="{{ $blog->title }}" style="height:500px">
                           </a>
                        </div>
                        <div class="blog-text">
                           <h3>{{ $blog->title }}</h3>
                           <ul>
                              <li><i class="fa fa-calendar"></i><a href="#">{{ $blog->created_at->format('d.m.Y') }}</a></li>
                              <li><i class="fa fa-comments-o"></i><a href="#">(05) {{ __('comments') }}</a></li>
                           </ul>
                           
                        <strong>{!! $blog->content !!}</strong>
                        </div>
                        <!-- <div class="gauto-comment-list">
                           <div class="comment-group-title">
                              <h2>3 Comments</h2>
                           </div>
                           <div class="single-comment-item">
                              <div class="single-comment-box">
                                 <div class="main-comment">
                                    <div class="author-image">
                                       <img src="assets/img/4.jpg" alt="author">
                                    </div>
                                    <div class="comment-text">
                                       <div class="comment-info">
                                          <h4>david kamal</h4>
                                          <p>12 FEB 2019</p>
                                          <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                       </div>
                                       <div class="comment-text-inner">
                                          <p>Ne erat velit invidunt his. Eum in dicta veniam interesset, harum lupta definitionem. Vocibus suscipit prodesset vim ei, equidem perpetua eu per.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="single-comment-box reply-comment">
                                 <div class="main-comment">
                                    <div class="author-image">
                                       <img src="assets/img/5.jpg" alt="author">
                                    </div>
                                    <div class="comment-text">
                                       <div class="comment-info">
                                          <h4>Danial Martin</h4>
                                          <p>12 FEB 2019</p>
                                          <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                       </div>
                                       <div class="comment-text-inner">
                                          <p>Ne erat velit invidunt his. Eum in dicta veniam interesset, harum lupta definitionem. Vocibus suscipit prodesset vim ei, equidem perpetua eu per.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="single-comment-box">
                                 <div class="main-comment">
                                    <div class="author-image">
                                       <img src="assets/img/4.jpg" alt="author">
                                    </div>
                                    <div class="comment-text">
                                       <div class="comment-info">
                                          <h4>sumaiya mim</h4>
                                          <p>12 FEB 2019</p>
                                          <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                       </div>
                                       <div class="comment-text-inner">
                                          <p>Ne erat velit invidunt his. Eum in dicta veniam interesset, harum lupta definitionem. Vocibus suscipit prodesset vim ei, equidem perpetua eu per.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div> -->
                        <!-- <div class="gauto-leave-comment">
                           <h2>Leave a comment</h2>
                           <p>Your must sing-in to make or comment a post</p>
                           <form>
                              <input class="ns-com-name" name="name" placeholder="Name" type="text">
                              <input class="ns-com-name" name="email" placeholder="Email" type="email">
                              <textarea class="comment" placeholder="Comment..." name="comment"></textarea>
                              <button type="submit" class="gauto-theme-btn">post comment</button>
                           </form>
                        </div> -->
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="blog-page-right">
                     <div class="sidebar-widget">
                        <form class="product_search">
                           <input type="search" placeholder="{{ __('keywords') }}">
                           <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                     </div>
                     <div class="sidebar-widget">
                        <h3>{{ __('recent_posts') }}</h3>
                        <ul class="top-products">
                           @foreach ($blogs as $blog)    
                           <li>
                              <div class="recent-img">
                                 <a href="{{ route('blogs.show', $blog->title) }}">
                                 <img src="{{ asset('images/blogs').'/'.$blog->image }}" alt="{{ $blog->title }}">
                                 </a>
                              </div>
                              <div class="recent-text">
                                 <h4>
                                    <a href="{{ route('blogs.show', $blog->title) }}"> {{ $blog->title }} </a>
                                 </h4>
                              </div>
                           </li>
                           @endforeach
                        </ul>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection