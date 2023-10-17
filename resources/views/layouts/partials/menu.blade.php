<section class="gauto-mainmenu-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-9">
                  <div class="mainmenu">
                     <nav>
                        <ul id="gauto_navigation">
                           <li class="active"><a href="index.html">home</a></li>
                           <li><a href="about.html">about</a></li>
                           <li>
                              <a href="#">Service</a>
                              <ul>
                                 <li><a href="service.html">All services</a></li>
                                 <li><a href="single-service.html">Service Details</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="#">cars</a>
                              <ul>
                                 <li><a href="{{route('car-listing')}}">car listing</a></li>
                                 <li><a href="car-booking.html">car booking</a></li>
                              </ul>
                           </li>
                           <li><a href="gallery.html">gallery</a></li>
                           <li>
                              <a href="#">Shop</a>
                              <ul>
                                 <li><a href="products.html">products</a></li>
                                 <li><a href="single-product.html">product details</a></li>
                                 <li><a href="cart.html">Shoping Cart</a></li>
                                 <li><a href="checkout.html">checkout</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="#">pages</a>
                              <ul>
                                 <li><a href="blog.html">blog</a></li>
                                 <li><a href="single-blog.html">single blog</a></li>
                                 <li><a href="404.html">404 not found</a></li>
                                 <li><a href="login.html">login</a></li>
                                 <li><a href="register.html">register</a></li>
                              </ul>
                           </li>
                           <li><a href="contact.html">contact</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-12">
                  <div class="main-search-right">
                     <!-- Responsive Menu Start -->
                     <div class="gauto-responsive-menu"></div>
                     <!-- Responsive Menu Start -->
                      
                     <!-- Cart Box Start -->
                     <div class="header-cart-box">
                        <div class="login dropdown">
                           <button class="dropdown-toggle cart-icon" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <span>2</span>
                           </button>
                           <div class="dropdown-menu cart-dropdown" aria-labelledby="dropdownMenu1">
                              <ul class="product_list">
                                 <li>
                                    <div class="cart-btn-product">
                                       <a class="product-remove" href="#">
                                       <i class="fa fa-times"></i>
                                       </a>
                                       <div class="cart-btn-pro-img">
                                          <a href="#">
                                          <img src="{{ asset('frontend/img/cart-1.png')}}" alt="product" />
                                          </a>
                                       </div>
                                       <div class="cart-btn-pro-cont">
                                          <h4><a href="#">CAR SPOILERS</a></h4>
                                          <p>Quantity 2</p>
                                          <span class="price">
                                          $29.99
                                          </span>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="cart-btn-product">
                                       <a class="product-remove" href="#">
                                       <i class="fa fa-times"></i>
                                       </a>
                                       <div class="cart-btn-pro-img">
                                          <a href="#">
                                          <img src="{{ asset('frontend/img/cart-2.jpg')}}" alt="product" />
                                          </a>
                                       </div>
                                       <div class="cart-btn-pro-cont">
                                          <h4><a href="#">CAR SPOILERS</a></h4>
                                          <p>Quantity 2</p>
                                          <span class="price">
                                          $29.99
                                          </span>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                              <div class="cart-subtotal">
                                 <p>
                                    Subtotal :
                                    <span class="drop-total">$59.98</span>
                                 </p>
                              </div>
                              <div class="cart-btn">
                                 <a href="#" class="cart-btn-1">View Cart</a>
                                 <a href="#" class="cart-btn-2">Checkout</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Cart Box End -->
                      
                     <!-- Search Box Start -->
                     <div class="search-box">
                        <form>
                           <input type="search" placeholder="Search">
                           <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                     </div>
                     <!-- Search Box End -->
                      
                  </div>
               </div>
            </div>
         </div>
      </section>