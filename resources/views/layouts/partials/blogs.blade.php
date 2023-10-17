@if ($page_design->blogs==1)
<section class="gauto-blog-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h4>latest</h4>
                     <h2>our blog</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               @foreach ($blogs as $blog)
               <div class="col-lg-4">
                  <div class="single-blog">
                     <div class="blog-image">
                        <a href="{{ route('blogs.show', $blog->slug) }}">
                        <img src="{{ asset('images/blogs').'/'.$blog->image}}" alt="{{ $blog->title }}" height="250px;" />
                        </a>
                     </div>
                     <div class="blog-text">
                        <h3><a href="{{ route('blogs.show', $blog->slug) }}">{{$blog->title}}</a></h3>
                        <div class="blog-meta-home">
                           <div class="blog-meta-left">
                              <p>{{ $blog->created_at->format('d.m.Y') }}</p>
                           </div>
                           <div class="blog-meta-right">
                              <p><i class="fa fa-eye"></i> {{ $blog->viewed }}</p>
                              <p><i class="fa fa-commenting"></i> 67</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               @endforeach
            </div>
         </div>
      </section>
      @endif