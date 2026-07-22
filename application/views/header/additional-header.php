<header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="70px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="<?php echo base_url()?>"><img src="<?php echo base_url(); ?>images/petalite-logo.png" alt="" width="149" height="46"/></a></div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Basket-->
                    <div class="rd-navbar-basket-wrap">
                      <button class="rd-navbar-basket fl-bigmug-line-shopping198" data-rd-navbar-toggle=".cart-inlines"><span>2</span></button>
                      <div class="cart-inline">
                        <div class="cart-inline-header">
                          <h5 class="cart-inline-title">In cart:<span> 2</span> Products</h5>
                          <h6 class="cart-inline-title">Total price:<span> $524</span></h6>
                        </div>
                        <div class="cart-inline-body">
                          <div class="cart-inline-item">
                            <div class="unit align-items-center">
                              <div class="unit-left"><a class="cart-inline-figure" href="single-product.html"><img src="<?php echo base_url(); ?>images/product-mini-9-100x100.png" alt="" width="100" height="100"/></a></div>
                              <div class="unit-body">
                                <h6 class="cart-inline-name"><a href="single-product.html">Burdur Pearl</a></h6>
                                <div>
                                  <div class="group-xs group-middle-2">
                                    <div class="table-cart-stepper">
                                      <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000"/>
                                    </div>
                                    <h6 class="cart-inline-title">$289</h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="cart-inline-item">
                            <div class="unit align-items-center">
                              <div class="unit-left"><a class="cart-inline-figure" href="single-product.html"><img src="<?php echo base_url(); ?>images/product-mini-10-100x100.png" alt="" width="100" height="100"/></a></div>
                              <div class="unit-body">
                                <h6 class="cart-inline-name"><a href="single-product.html">Lymra Limestone</a></h6>
                                <div>
                                  <div class="group-xs group-middle-2">
                                    <div class="table-cart-stepper">
                                      <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000"/>
                                    </div>
                                    <h6 class="cart-inline-title">$235</h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="cart-inline-footer">
                          <div class="group-sm"><a class="button button-md button-default-outline button-wapasha" href="cart-page.html">Go to cart</a><a class="button button-md button-secondary button-pipaluk" href="checkout.html">Checkout</a></div>
                        </div>
                      </div>
                    </div><a class="rd-navbar-basket rd-navbar-basket-mobile fl-bigmug-line-shopping198" href="cart-page.html"><span>2</span></a>
                    <!-- RD Navbar Search-->
                    <div class="rd-navbar-search">
                      <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                      <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                        <div class="form-wrap">
                          <label class="form-label" for="rd-navbar-search-form-input">Search...</label>
                          <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                          <div class="rd-search-results-live" id="rd-search-results-live"></div>
                          <button class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                        </div>
                      </form>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="<?php echo $flag==='home' ? 'rd-nav-item active' : 'rd-nav-item'?> "><a class="rd-nav-link" href="<?php echo base_url('home')?>">Home</a>
                      </li>
                      <li class="<?php echo $flag==='petalite' ? 'rd-nav-item active' : 'rd-nav-item'?>"><a class="rd-nav-link" href="">Petalite</a>
                      <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="<?php echo base_url('petalite-architects')?>">Petalite Architects</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="<?php echo base_url('petalite-developers')?>">Petalite Developers</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="<?php echo base_url('petalite-electrical')?>">Petalite Electrical </a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="<?php echo base_url('petalite-interior')?>">Petalite Interior</a></li>
                        </ul> 
                      </li>
                      <li class="<?php echo $flag==='about' ? 'rd-nav-item active' : 'rd-nav-item'?> "><a class="rd-nav-link" href="<?php echo base_url('About-Petalite-Architects')?>">About </a>
                      </li>
                      <li  class="<?php echo $flag==='portfolio' ? 'rd-nav-item active' : 'rd-nav-item'?>"><a class="rd-nav-link" href="<?php echo base_url('Portfolio-Petalite-Architects')?>">Portfolio</a>
                        <!-- RD Navbar Dropdown-->
                        <!-- <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-gallery.html">Grid Gallery</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="full-width-gallery.html">Full width Gallery</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="masonry-gallery.html">Masonry Gallery</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="full-width-masonry-gallery.html">Full Width Masonry Gallery</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="single-project.html">Single Project</a></li>
                        </ul> -->
                      </li>
                      <li class="<?php echo $flag==='service' ? 'rd-nav-item active' : 'rd-nav-item'?>"><a class="rd-nav-link" href="<?php echo base_url('Service-Offered-Petalite-Architects')?>">Services</a>
                        <!-- RD Navbar Dropdown-->
                        <!-- <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="classic-blog.html">Classic Blog</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-blog.html">Grid Blog</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-blog-2.html">Grid Blog 2</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-blog-3.html">Grid Blog 3</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Blog Post</a></li>
                        </ul> -->
                      </li>
                      <li class="<?php echo $flag==='testimonials' ? 'rd-nav-item active' : 'rd-nav-item'?>"><a class="rd-nav-link" href="<?php echo base_url('Testimonials-Petalite-Architects')?>">Testimonials</a>
                      </li>
                     
                      <li class="<?php echo $flag==='contact' ? 'rd-nav-item active' : 'rd-nav-item'?>"><a class="rd-nav-link" href="<?php echo base_url('Contact-Petalite-Architects')?>">Contact </a>
                      </li>
                     
                    </ul>
                  </div>
                  <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
                    <div class="project-hamburger"><span class="project-hamburger-arrow-top"></span><span class="project-hamburger-arrow-center"></span><span class="project-hamburger-arrow-bottom"></span></div>
                    <div class="project-hamburger-2"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
                    </div>
                    <div class="project-close"><span></span><span></span></div>
                  </div>
                </div>
                <div class="rd-navbar-project rd-navbar-modern-project">
                  <div class="rd-navbar-project-modern-header">
                    <h4 class="rd-navbar-project-modern-title">Follow us</h4>
                    <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="data-multitoggle-isolate">
                      <div class="project-close"><span></span><span></span></div>
                    </div>
                  </div>
                  <div class="rd-navbar-project-content rd-navbar-modern-project-content">
                    <div>
                      <p class="text-spacing-25">Want to get the latest flooring ideas from our team? Follow us on Instagram to keep up with the newest trends and offers from Petalite Architects.</p>
                      <div class="row row-10 gutters-10" data-lightgallery="group">
                        <div class="col-6 col-lg-4">
                          <!-- Thumbnail Classic-->
                          <article class="thumbnail thumbnail-mary">
                            <div class="thumbnail-mary-figure"><img src="<?php echo base_url(); ?>images/gallery-image-14-124x124.jpg" alt="" width="124" height="124"/>
                            </div>
                            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?php echo base_url(); ?>images/gallery-image-14-1200x800-original.jpg" data-lightgallery="item"><img src="<?php echo base_url(); ?>images/gallery-image-14-124x124.jpg" alt="" width="124" height="124"/></a>
                            </div>
                          </article>
                        </div>
                        <div class="col-6 col-lg-4">
                          <!-- Thumbnail Classic-->
                          <article class="thumbnail thumbnail-mary">
                            <div class="thumbnail-mary-figure"><img src="<?php echo base_url(); ?>images/gallery-image-15-124x124.jpg" alt="" width="124" height="124"/>
                            </div>
                            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?php echo base_url(); ?>images/grid-gallery-3-1200x800-original.jpg" data-lightgallery="item"><img src="<?php echo base_url(); ?>images/gallery-image-15-124x124.jpg" alt="" width="124" height="124"/></a>
                            </div>
                          </article>
                        </div>
                        <div class="col-6 col-lg-4">
                          <!-- Thumbnail Classic-->
                          <article class="thumbnail thumbnail-mary">
                            <div class="thumbnail-mary-figure"><img src="<?php echo base_url(); ?>images/gallery-image-16-124x124.jpg" alt="" width="124" height="124"/>
                            </div>
                            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?php echo base_url(); ?>images/grid-gallery-5-1200x800-original.jpg" data-lightgallery="item"><img src="<?php echo base_url(); ?>images/gallery-image-16-124x124.jpg" alt="" width="124" height="124"/></a>
                            </div>
                          </article>
                        </div>
                        <div class="col-6 col-lg-4">
                          <!-- Thumbnail Classic-->
                          <article class="thumbnail thumbnail-mary">
                            <div class="thumbnail-mary-figure"><img src="<?php echo base_url(); ?>images/gallery-image-17-124x124.jpg" alt="" width="124" height="124"/>
                            </div>
                            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?php echo base_url(); ?>images/gallery-image-17-530x800-original.jpg" data-lightgallery="item"><img src="<?php echo base_url(); ?>images/gallery-image-17-124x124.jpg" alt="" width="124" height="124"/></a>
                            </div>
                          </article>
                        </div>
                        <div class="col-6 col-lg-4">
                          <!-- Thumbnail Classic-->
                          <article class="thumbnail thumbnail-mary">
                            <div class="thumbnail-mary-figure"><img src="<?php echo base_url(); ?>images/gallery-image-18-124x124.jpg" alt="" width="124" height="124"/>
                            </div>
                            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?php echo base_url(); ?>images/grid-gallery-2-530x800-original.jpg" data-lightgallery="item"><img src="<?php echo base_url(); ?>images/gallery-image-18-124x124.jpg" alt="" width="124" height="124"/></a>
                            </div>
                          </article>
                        </div>
                        <div class="col-6 col-lg-4">
                          <!-- Thumbnail Classic-->
                          <article class="thumbnail thumbnail-mary">
                            <div class="thumbnail-mary-figure"><img src="<?php echo base_url(); ?>images/gallery-image-19-124x124.jpg" alt="" width="124" height="124"/>
                            </div>
                            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="<?php echo base_url(); ?>images/grid-gallery-1-570x800-original.jpg" data-lightgallery="item"><img src="<?php echo base_url(); ?>images/gallery-image-19-124x124.jpg" alt="" width="124" height="124"/></a>
                            </div>
                          </article>
                        </div>
                      </div>
                      <ul class="rd-navbar-modern-contacts">
                        <li>
                          <div class="unit unit-spacing-sm">
                            <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                            <div class="unit-body"><a class="link-phone" href="tel:#">+91-82817 66075</a></div>
                          </div>
                        </li>
                        <li>
                          <div class="unit unit-spacing-sm">
                            <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                            <div class="unit-body"><a class="link-location" href="#">V H Shopping Complex, Pattambi Rd, Kunnamkulam, Kerala 680503</a></div>
                          </div>
                        </li>
                        <li>
                          <div class="unit unit-spacing-sm">
                            <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                            <div class="unit-body"><a class="link-email" href="mailto:#">info@petalite.in</a></div>
                          </div>
                        </li>
                      </ul>
                      <ul class="list-inline rd-navbar-modern-list-social">
                        <li><a class="icon fa fa-facebook" href="#"></a></li>
                        <li><a class="icon fa fa-twitter" href="#"></a></li>
                        <li><a class="icon fa fa-google-plus" href="#"></a></li>
                        <li><a class="icon fa fa-instagram" href="#"></a></li>
                        <li><a class="icon fa fa-pinterest" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>