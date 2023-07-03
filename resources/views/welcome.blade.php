<!DOCTYPE html>
<html lang="en">
  @include('head')

<body>
<div class="page-wrapper">
  <main class="main">

    <header class="header">
        <div class="header-top">
          <div class="container" style="height: 40px">
            <div class="header-left">
              <div class="">
                <a href="#">USD</a>
              </div>
              <!-- End .header-dropdown -->

              <div class="ms-5">
                <a href="#">ENG</a>
              </div>
              <!-- End .header-dropdown -->
            </div>
            <!-- End .header-left -->

            <div class="header-right">
              <ul class="top-menu">
                <li>
                  <a href="#">Links</a>
                  <ul>
                    <li>
                      <a href="#"
                        ><i
                          class="bi bi-telephone"
                          style="padding-bottom: 2px"
                        ></i
                        >Call: +0123 456 789</a
                      >
                    </li>
                    <li>
                      <a href="#"
                        ><i class="bi bi-heart" style="padding-bottom: 2px"></i
                        >Wishlist <span>(3)</span></a
                      >
                    </li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li>
                      <button type="submit" class="border-0 btn-primary-outline rounded" style="background-color: #c96; color: white; height: 30px; padding: 0 20px 0 19px;">
                        <i class="bi bi-person" style="margin-bottom: 2px;"></i>Logout
                      </button>
                    </li>
                  </ul>
                </li>
              </ul>
              <!-- End .top-menu -->
            </div>
            <!-- End .header-right -->
          </div>
          <!-- End .container -->
        </div>
        <!-- End .header-top -->

        <div class="header-middle sticky-header">
          <div class="container">
            <div class="header-left">
              <button class="mobile-menu-toggler">
                <span class="sr-only">Toggle mobile menu</span>
                <i class="bi bi-list"></i>
              </button>

              <a href="/main" class="logo">
                <img
                  src="{{ asset('utills/logo2.png') }}"
                  alt="Molla Logo"
                  width="105"
                  height="25"
                />
              </a>

              <nav class="main-nav">
                <ul class="menu sf-arrows">
                  <li class="megamenu-container active">
                    <a href="#" style="padding: 10px 30px">Home</a>

                    <div class="megamenu demo">
                      <div class="menu-col">
                        <div class="menu-title">Choose your demo</div>
                        <!-- End .menu-title -->

                        <div class="demo-list">
                          <div class="demo-item">
                            <a href="#">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/1.jpg);
                                "
                              ></span>
                              <span class="demo-title"
                                >01 - furniture store</span
                              >
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item">
                            <a href="#">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/2.jpg);
                                "
                              ></span>
                              <span class="demo-title"
                                >02 - furniture store</span
                              >
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item">
                            <a href="#">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/3.jpg);
                                "
                              ></span>
                              <span class="demo-title"
                                >03 - electronic store</span
                              >
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item">
                            <a href="#">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/4.jpg);
                                "
                              ></span>
                              <span class="demo-title"
                                >04 - electronic store</span
                              >
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item">
                            <a href="#">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/5.jpg);
                                "
                              ></span>
                              <span class="demo-title">05 - fashion store</span>
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item">
                            <a href="#">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/6.jpg);
                                "
                              ></span>
                              <span class="demo-title">06 - fashion store</span>
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item">
                            <a href="#">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/7.jpg);
                                "
                              ></span>
                              <span class="demo-title">07 - fashion store</span>
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item">
                            <a href="index-8.html">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/8.jpg);
                                "
                              ></span>
                              <span class="demo-title">08 - fashion store</span>
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item">
                            <a href="index-9.html">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/9.jpg);
                                "
                              ></span>
                              <span class="demo-title">09 - fashion store</span>
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item">
                            <a href="index-10.html">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/10.jpg);
                                "
                              ></span>
                              <span class="demo-title">10 - shoes store</span>
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item hidden">
                            <a href="index-11.html">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/11.jpg);
                                "
                              ></span>
                              <span class="demo-title"
                                >11 - furniture simple store</span
                              >
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item hidden">
                            <a href="index-12.html">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/12.jpg);
                                "
                              ></span>
                              <span class="demo-title"
                                >12 - fashion simple store</span
                              >
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item hidden">
                            <a href="index-13.html">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/13.jpg);
                                "
                              ></span>
                              <span class="demo-title">13 - market</span>
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item hidden">
                            <a href="index-14.html">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/14.jpg);
                                "
                              ></span>
                              <span class="demo-title"
                                >14 - market fullwidth</span
                              >
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item hidden">
                            <a href="index-15.html">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/15.jpg);
                                "
                              ></span>
                              <span class="demo-title">15 - lookbook 1</span>
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item hidden">
                            <a href="index-16.html">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/16.jpg);
                                "
                              ></span>
                              <span class="demo-title">16 - lookbook 2</span>
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item hidden">
                            <a href="index-17.html">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/17.jpg);
                                "
                              ></span>
                              <span class="demo-title">17 - fashion store</span>
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item hidden">
                            <a href="index-18.html">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/18.jpg);
                                "
                              ></span>
                              <span class="demo-title"
                                >18 - fashion store (with sidebar)</span
                              >
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item hidden">
                            <a href="index-19.html">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/19.jpg);
                                "
                              ></span>
                              <span class="demo-title">19 - games store</span>
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item hidden">
                            <a href="index-20.html">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/20.jpg);
                                "
                              ></span>
                              <span class="demo-title">20 - book store</span>
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item hidden">
                            <a href="index-21.html">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/21.jpg);
                                "
                              ></span>
                              <span class="demo-title">21 - sport store</span>
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item hidden">
                            <a href="index-22.html">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/22.jpg);
                                "
                              ></span>
                              <span class="demo-title">22 - tools store</span>
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item hidden">
                            <a href="index-23.html">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/23.jpg);
                                "
                              ></span>
                              <span class="demo-title"
                                >23 - fashion left navigation store</span
                              >
                            </a>
                          </div>
                          <!-- End .demo-item -->

                          <div class="demo-item hidden">
                            <a href="index-24.html">
                              <span
                                class="demo-bg"
                                style="
                                  background-image: url(assets/images/menu/demos/24.jpg);
                                "
                              ></span>
                              <span class="demo-title"
                                >24 - extreme sport store</span
                              >
                            </a>
                          </div>
                          <!-- End .demo-item -->
                        </div>
                        <!-- End .demo-list -->

                        <div class="megamenu-action text-center">
                          <a
                            href="#"
                            class="btn btn-outline-primary-2 view-all-demos"
                            ><span>View All Demos</span
                            ><i class="icon-long-arrow-right"></i
                          ></a>
                        </div>
                        <!-- End .text-center -->
                      </div>
                      <!-- End .menu-col -->
                    </div>
                    <!-- End .megamenu -->
                  </li>
                  <li>
                    <a href="#" style="padding: 10px 30px"
                      >Shop<i class="bi bi-caret-down ms-2"></i
                    ></a>

                    <div class="megamenu megamenu-md">
                      <div class="row no-gutters">
                        <div class="col-md-12">
                          <div class="menu-col">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="menu-title">Shop with sidebar</div>
                                <!-- End .menu-title -->
                                <ul>
                                  <li>
                                    <a href="category-list.html">Shop List</a>
                                  </li>
                                  <li>
                                    <a href="category-2cols.html"
                                      >Shop Grid 2 Columns</a
                                    >
                                  </li>
                                  <li>
                                    <a href="category.html"
                                      >Shop Grid 3 Columns</a
                                    >
                                  </li>
                                  <li>
                                    <a href="category-4cols.html"
                                      >Shop Grid 4 Columns</a
                                    >
                                  </li>
                                  <li>
                                    <a href="category-market.html"
                                      ><span
                                        >Shop Market<span class="tip tip-new"
                                          >New</span
                                        ></span
                                      ></a
                                    >
                                  </li>
                                </ul>

                                <div class="menu-title">Shop no sidebar</div>
                                <!-- End .menu-title -->
                                <ul>
                                  <li>
                                    <a href="category-boxed.html"
                                      ><span
                                        >Shop Boxed No Sidebar<span
                                          class="tip tip-hot"
                                          >Hot</span
                                        ></span
                                      ></a
                                    >
                                  </li>
                                  <li>
                                    <a href="category-fullwidth.html"
                                      >Shop Fullwidth No Sidebar</a
                                    >
                                  </li>
                                </ul>
                              </div>
                              <!-- End .col-md-6 -->

                              <div class="col-md-6">
                                <div class="menu-title">Product Category</div>
                                <!-- End .menu-title -->
                                <ul>
                                  <li>
                                    <a href="product-category-boxed.html"
                                      >Product Category Boxed</a
                                    >
                                  </li>
                                  <li>
                                    <a href="product-category-fullwidth.html"
                                      ><span
                                        >Product Category Fullwidth<span
                                          class="tip tip-new"
                                          >New</span
                                        ></span
                                      ></a
                                    >
                                  </li>
                                </ul>
                                <div class="menu-title">Shop Pages</div>
                                <!-- End .menu-title -->
                                <ul>
                                  <li><a href="cart.html">Cart</a></li>
                                  <li><a href="checkout.html">Checkout</a></li>
                                  <li><a href="wishlist.html">Wishlist</a></li>
                                  <li>
                                    <a href="dashboard.html">My Account</a>
                                  </li>
                                  <li><a href="#">Lookbook</a></li>
                                </ul>
                              </div>
                              <!-- End .col-md-6 -->
                            </div>
                            <!-- End .row -->
                          </div>
                          <!-- End .menu-col -->
                        </div>
                        <!-- End .col-md-8 -->
                      </div>
                      <!-- End .row -->
                    </div>
                    <!-- End .megamenu megamenu-md -->
                  </li>
                  <li>
                    <a href="#" style="padding: 10px 30px"
                      >Product<i class="bi bi-caret-down ms-2"></i
                    ></a>

                    <div class="megamenu megamenu-sm">
                      <div class="row no-gutters">
                        <div class="col-md-6">
                          <div class="menu-col">
                            <div class="menu-title">Product Details</div>
                            <!-- End .menu-title -->
                            <ul>
                              <li><a href="product.html">Default</a></li>
                              <li>
                                <a href="product-centered.html">Centered</a>
                              </li>
                              <li>
                                <a href="product-extended.html"
                                  ><span
                                    >Extended Info<span class="tip tip-new"
                                      >New</span
                                    ></span
                                  ></a
                                >
                              </li>
                              <li>
                                <a href="product-gallery.html">Gallery</a>
                              </li>
                              <li>
                                <a href="product-sticky.html">Sticky Info</a>
                              </li>
                              <li>
                                <a href="product-sidebar.html"
                                  >Boxed With Sidebar</a
                                >
                              </li>
                              <li>
                                <a href="product-fullwidth.html">Full Width</a>
                              </li>
                              <li>
                                <a href="product-masonry.html"
                                  >Masonry Sticky Info</a
                                >
                              </li>
                            </ul>
                          </div>
                          <!-- End .menu-col -->
                        </div>
                        <!-- End .col-md-6 -->
                      </div>
                      <!-- End .row -->
                    </div>
                    <!-- End .megamenu megamenu-sm -->
                  </li>
                  <li>
                    <a href="#" style="padding: 10px 30px"
                      >Pages<i class="bi bi-caret-down ms-2"></i
                    ></a>

                    <ul>
                      <li>
                        <a href="about.html" class="">About</a>

                        <ul>
                          <li><a href="about.html">About 01</a></li>
                          <li><a href="about-2.html">About 02</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="contact.html" class="">Contact</a>

                        <ul>
                          <li><a href="contact.html">Contact 01</a></li>
                          <li><a href="contact-2.html">Contact 02</a></li>
                        </ul>
                      </li>
                      <li><a href="login.html">Login</a></li>
                      <li><a href="faq.html">FAQs</a></li>
                      <li><a href="404.html">Error 404</a></li>
                      <li><a href="coming-soon.html">Coming Soon</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#" style="padding: 10px 30px"
                      >Blog<i class="bi bi-caret-down ms-2"></i
                    ></a>

                    <ul>
                      <li><a href="blog.html">Classic</a></li>
                      <li><a href="blog-listing.html">Listing</a></li>
                      <li>
                        <a href="#">Grid</a>
                        <ul>
                          <li>
                            <a href="blog-grid-2cols.html">Grid 2 columns</a>
                          </li>
                          <li>
                            <a href="blog-grid-3cols.html">Grid 3 columns</a>
                          </li>
                          <li>
                            <a href="blog-grid-4cols.html">Grid 4 columns</a>
                          </li>
                          <li>
                            <a href="blog-grid-sidebar.html">Grid sidebar</a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="#">Masonry</a>
                        <ul>
                          <li>
                            <a href="blog-masonry-2cols.html"
                              >Masonry 2 columns</a
                            >
                          </li>
                          <li>
                            <a href="blog-masonry-3cols.html"
                              >Masonry 3 columns</a
                            >
                          </li>
                          <li>
                            <a href="blog-masonry-4cols.html"
                              >Masonry 4 columns</a
                            >
                          </li>
                          <li>
                            <a href="blog-masonry-sidebar.html"
                              >Masonry sidebar</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="#">Mask</a>
                        <ul>
                          <li>
                            <a href="blog-mask-grid.html">Blog mask grid</a>
                          </li>
                          <li>
                            <a href="blog-mask-masonry.html"
                              >Blog mask masonry</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="#">Single Post</a>
                        <ul>
                          <li>
                            <a href="single.html">Default with sidebar</a>
                          </li>
                          <li>
                            <a href="single-fullwidth.html"
                              >Fullwidth no sidebar</a
                            >
                          </li>
                          <li>
                            <a href="single-fullwidth-sidebar.html"
                              >Fullwidth with sidebar</a
                            >
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#" style="padding: 10px 30px"
                      >Elements<i class="bi bi-caret-down ms-2"></i
                    ></a>

                    <ul>
                      <li><a href="elements-products.html">Products</a></li>
                      <li><a href="elements-typography.html">Typography</a></li>
                      <li><a href="elements-titles.html">Titles</a></li>
                      <li><a href="elements-banners.html">Banners</a></li>
                      <li>
                        <a href="elements-product-category.html"
                          >Product Category</a
                        >
                      </li>
                      <li>
                        <a href="elements-video-banners.html">Video Banners</a>
                      </li>
                      <li><a href="elements-buttons.html">Buttons</a></li>
                      <li><a href="elements-accordions.html">Accordions</a></li>
                      <li><a href="elements-tabs.html">Tabs</a></li>
                      <li>
                        <a href="elements-testimonials.html">Testimonials</a>
                      </li>
                      <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                      <li><a href="elements-portfolio.html">Portfolio</a></li>
                      <li><a href="elements-cta.html">Call to Action</a></li>
                      <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                    </ul>
                  </li>
                </ul>
                <!-- End .menu -->
              </nav>
              <!-- End .main-nav -->
            </div>
            <!-- End .header-left -->
          </div>
          <!-- End .container -->
        </div>
        <!-- End .header-middle -->
    </header>
       <!-- End .header -->
  
      <div class="page-header text-center" style="background-image: url('https://img.freepik.com/premium-photo/3d-rendered-white-abstract-wave-background-rippled-cloth_167650-2946.jpg?w=996')">
        		<div class="container">
        			<h1 class="page-title">Grid 4 Columns<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
      <div class="container">
        <ol class="breadcrumb">
          <li class="pe-3">Home &nbsp;   ></li>
          <li class="pe-3">Shop &nbsp;   ></li>
          <li>Grid 4 Columns</li>
          <div class="ms-auto"> 
            <a href="/createProduct">
              <button
                type="submit"
                class="border-0 btn-primary-outline rounded"
                style="background-color: #c96; color: white; height: 30px; padding: 0 10px 0 10px;">
                  Create Product
              </button>
            </a>  
          </div>
        </ol>
      </div>
      <!-- End .container -->
    </nav>
    <!-- End .breadcrumb-nav -->

    <div class="page-content" style="padding-bottom: 0rem !important">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <div class="toolbox">
              <div class="toolbox-left">
                <div class="toolbox-info">
                  Showing <span>{{$products->count()}} of {{$products->count()}}</span>
                </div>
                <!-- End .toolbox-info -->
              </div>
              <!-- End .toolbox-left -->

              <div class="toolbox-right">
                <div class="toolbox-sort">
                  <label for="sortby">Sort by:</label>
                  <div>
                    <select name="sortby" id="sortby" class="form-control bg-white px-5">
                      <option value="popularity" selected="selected">
                        Most Popular
                      </option>
                      <option value="rating">Most Rated</option>
                      <option value="date">Date</option>
                    </select>
                  </div>
                </div>
                <!-- End .toolbox-sort -->
                <div class="toolbox-layout">
                  <a href="category-list.html" class="btn-layout">
                    <svg width="16" height="10">
                      <rect x="0" y="0" width="4" height="4" />
                      <rect x="6" y="0" width="10" height="4" />
                      <rect x="0" y="6" width="4" height="4" />
                      <rect x="6" y="6" width="10" height="4" />
                    </svg>
                  </a>

                  <a href="category-2cols.html" class="btn-layout">
                    <svg width="10" height="10">
                      <rect x="0" y="0" width="4" height="4" />
                      <rect x="6" y="0" width="4" height="4" />
                      <rect x="0" y="6" width="4" height="4" />
                      <rect x="6" y="6" width="4" height="4" />
                    </svg>
                  </a>

                  <a href="category.html" class="btn-layout">
                    <svg width="16" height="10">
                      <rect x="0" y="0" width="4" height="4" />
                      <rect x="6" y="0" width="4" height="4" />
                      <rect x="12" y="0" width="4" height="4" />
                      <rect x="0" y="6" width="4" height="4" />
                      <rect x="6" y="6" width="4" height="4" />
                      <rect x="12" y="6" width="4" height="4" />
                    </svg>
                  </a>

                  <a href="category-4cols.html" class="btn-layout active">
                    <svg width="22" height="10">
                      <rect x="0" y="0" width="4" height="4" />
                      <rect x="6" y="0" width="4" height="4" />
                      <rect x="12" y="0" width="4" height="4" />
                      <rect x="18" y="0" width="4" height="4" />
                      <rect x="0" y="6" width="4" height="4" />
                      <rect x="6" y="6" width="4" height="4" />
                      <rect x="12" y="6" width="4" height="4" />
                      <rect x="18" y="6" width="4" height="4" />
                    </svg>
                  </a>
                </div>
                <!-- End .toolbox-layout -->
              </div>
              <!-- End .toolbox-right -->
            </div>
            <!-- End .toolbox -->
                <div class="products mb-3">
                  <div class="row justify-content-center">
                  @foreach($products as $product)
                      <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                      <a href="/productDetails/{{ $product->ID }}">
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                            <span class="product-label label-new">New</span>
                                <img
                                src="/productImages/{{ $product->image }}"
                                alt="{{ $product->name }}"
                                class="product-image"
                                />
                            <div class="product-action-vertical">
                                <a
                                href="#"
                                class="btn-product-icon bi bi-heart btn-wishlist btn-expandable"
                                ><span>Add To Wishlist</span></a
                                >
                                <a
                                href="#"
                                class="btn-product-icon bi bi-binoculars"
                                title="Quick view"
                                ><span>Quick view</span></a
                                >
                                <a
                                href="#"
                                class="btn-product-icon bi bi-shuffle"
                                title="Compare"
                                ><span>Compare</span></a
                                >
                            </div>

                            <div class="product-action">
                                <a href="#" class="btn-product bi bi-cart btn-cart"
                                ><span>add to cart</span></a
                                >
                            </div>
                            </figure>

                            <div class="product-body">
                            <h3 class="product-title">
                                <a href="product.html"
                                >{{$product->productName}}</a
                                >
                            </h3>
                            <div class="product-price">${{$product->price}}.00</div>
  
                            <div class="ratings-container">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $product->average_rating)
                                    <i class="bi bi-star-fill" style="color: #fcb941; height: 20px;"></i>
                                    @else
                                    <i class="bi bi-star-fill" style="color: #cccccc; height: 20px;"></i>
                                    @endif
                                @endfor
                                <span class="ratings-text">( {{ $product->total_reviews ? $product->total_reviews : 0 }} )</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach 
                <!-- End .row -->
              </div>
              <!-- End .products -->
            </div>  
          </a>
        </div>
          <!-- End .col-lg-9 -->
          <aside class="col-lg-3 order-lg-first">
            <div class="sidebar sidebar-shop">
              <div class="widget widget-clean">
                <label>Filters:</label>
                <a href="#" class="sidebar-filter-clear">Clean All</a>
              </div>
              <!-- End .widget widget-clean -->

              <div class="widget widget-collapsible">
                <h3 class="widget-title">
                    Category
                  </a>
                </h3>
                <!-- End .widget-title -->

                <div class="collapse show" id="widget-1">
                  <div class="widget-body">
                    <div class="filter-items filter-items-count">
                      <div class="filter-item">
                        <div class="custom-control">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="cat-1"
                          />
                          <label class="custom-control-label" for="cat-1"
                            >Dresses</label
                          >
                        </div>
                        <!-- End . -->
                        <span class="item-count">3</span>
                      </div>
                      <!-- End .filter-item -->

                      <div class="filter-item">
                        <div class="custom-control ">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="cat-2"
                          />
                          <label class="custom-control-label" for="cat-2"
                            >T-shirts</label
                          >
                        </div>
                        <!-- End . -->
                        <span class="item-count">0</span>
                      </div>
                      <!-- End .filter-item -->

                      <div class="filter-item">
                        <div class="custom-control ">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="cat-3"
                          />
                          <label class="custom-control-label" for="cat-3"
                            >Bags</label
                          >
                        </div>
                        <!-- End . -->
                        <span class="item-count">4</span>
                      </div>
                      <!-- End .filter-item -->

                      <div class="filter-item">
                        <div class="custom-control ">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="cat-4"
                          />
                          <label class="custom-control-label" for="cat-4"
                            >Jackets</label
                          >
                        </div>
                        <!-- End . -->
                        <span class="item-count">2</span>
                      </div>
                      <!-- End .filter-item -->

                      <div class="filter-item">
                        <div class="custom-control ">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="cat-5"
                          />
                          <label class="custom-control-label" for="cat-5"
                            >Shoes</label
                          >
                        </div>
                        <!-- End . -->
                        <span class="item-count">2</span>
                      </div>
                      <!-- End .filter-item -->

                      <div class="filter-item">
                        <div class="custom-control ">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="cat-6"
                          />
                          <label class="custom-control-label" for="cat-6"
                            >Jumpers</label
                          >
                        </div>
                        <!-- End . -->
                        <span class="item-count">1</span>
                      </div>
                      <!-- End .filter-item -->

                      <div class="filter-item">
                        <div class="custom-control ">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="cat-7"
                          />
                          <label class="custom-control-label" for="cat-7"
                            >Jeans</label
                          >
                        </div>
                        <!-- End . -->
                        <span class="item-count">1</span>
                      </div>
                      <!-- End .filter-item -->

                      <div class="filter-item">
                        <div class="custom-control ">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="cat-8"
                          />
                          <label class="custom-control-label" for="cat-8"
                            >Sportwear</label
                          >
                        </div>
                        <!-- End . -->
                        <span class="item-count">0</span>
                      </div>
                      <!-- End .filter-item -->
                    </div>
                    <!-- End .filter-items -->
                  </div>
                  <!-- End .widget-body -->
                </div>
                <!-- End .collapse -->
              </div>
              <!-- End .widget -->

              <div class="widget widget-collapsible">
                <h3 class="widget-title">
                    Size
                  </a>
                </h3>
                <!-- End .widget-title -->

                <div class="collapse show" id="widget-2">
                  <div class="widget-body">
                    <div class="filter-items">
                      <div class="filter-item">
                        <div class="custom-control ">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="size-1"
                          />
                          <label class="custom-control-label" for="size-1"
                            >XS</label
                          >
                        </div>
                        <!-- End . -->
                      </div>
                      <!-- End .filter-item -->

                      <div class="filter-item">
                        <div class="custom-control ">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="size-2"
                          />
                          <label class="custom-control-label" for="size-2"
                            >S</label
                          >
                        </div>
                        <!-- End . -->
                      </div>
                      <!-- End .filter-item -->

                      <div class="filter-item">
                        <div class="custom-control ">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            checked
                            id="size-3"
                          />
                          <label class="custom-control-label" for="size-3"
                            >M</label
                          >
                        </div>
                        <!-- End . -->
                      </div>
                      <!-- End .filter-item -->

                      <div class="filter-item">
                        <div class="custom-control ">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            checked
                            id="size-4"
                          />
                          <label class="custom-control-label" for="size-4"
                            >L</label
                          >
                        </div>
                        <!-- End . -->
                      </div>
                      <!-- End .filter-item -->

                      <div class="filter-item">
                        <div class="custom-control ">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="size-5"
                          />
                          <label class="custom-control-label" for="size-5"
                            >XL</label
                          >
                        </div>
                        <!-- End . -->
                      </div>
                      <!-- End .filter-item -->

                      <div class="filter-item">
                        <div class="custom-control ">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="size-6"
                          />
                          <label class="custom-control-label" for="size-6"
                            >XXL</label
                          >
                        </div>
                        <!-- End . -->
                      </div>
                      <!-- End .filter-item -->
                    </div>
                    <!-- End .filter-items -->
                  </div>
                  <!-- End .widget-body -->
                </div>
                <!-- End .collapse -->
              </div>
              <!-- End .widget -->

              <div class="widget widget-collapsible">
                <h3 class="widget-title">
                    Colour
                  </a>
                </h3>
                <!-- End .widget-title -->

                <div class="collapse show" id="widget-3">
                  <div class="widget-body">
                    <div class="filter-colors">
                      <a href="#" style="background: #b87145"
                        ><span class="sr-only">Color Name</span></a
                      >
                      <a href="#" style="background: #f0c04a"
                        ><span class="sr-only">Color Name</span></a
                      >
                      <a href="#" style="background: #333333"
                        ><span class="sr-only">Color Name</span></a
                      >
                      <a href="#" style="background: #cc3333; border: 2px solid gray;"
                        ><span class="sr-only">Color Name</span></a
                      >
                      <a href="#" style="background: #3399cc"
                        ><span class="sr-only">Color Name</span></a
                      >
                      <a href="#" style="background: #669933"
                        ><span class="sr-only">Color Name</span></a
                      >
                      <a href="#" style="background: #f2719c"
                        ><span class="sr-only">Color Name</span></a
                      >
                      <a href="#" style="background: #ebebeb"
                        ><span class="sr-only">Color Name</span></a
                      >
                    </div>
                    <!-- End .filter-colors -->
                  </div>
                  <!-- End .widget-body -->
                </div>
                <!-- End .collapse -->
              </div>
              <!-- End .widget -->

              <div class="widget widget-collapsible">
                <h3 class="widget-title">
                    Brand
                  </a>
                </h3>
                <!-- End .widget-title -->

                <div class="collapse show" id="widget-4">
                  <div class="widget-body">
                    <div class="filter-items">
                      <div class="filter-item">
                        <div class="custom-control ">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="brand-1"
                          />
                          <label class="custom-control-label" for="brand-1"
                            >Next</label
                          >
                        </div>
                        <!-- End . -->
                      </div>
                      <!-- End .filter-item -->

                      <div class="filter-item">
                        <div class="custom-control ">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="brand-2"
                          />
                          <label class="custom-control-label" for="brand-2"
                            >River Island</label
                          >
                        </div>
                        <!-- End . -->
                      </div>
                      <!-- End .filter-item -->

                      <div class="filter-item">
                        <div class="custom-control ">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="brand-3"
                          />
                          <label class="custom-control-label" for="brand-3"
                            >Geox</label
                          >
                        </div>
                        <!-- End . -->
                      </div>
                      <!-- End .filter-item -->

                      <div class="filter-item">
                        <div class="custom-control ">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="brand-4"
                          />
                          <label class="custom-control-label" for="brand-4"
                            >New Balance</label
                          >
                        </div>
                        <!-- End . -->
                      </div>
                      <!-- End .filter-item -->

                      <div class="filter-item">
                        <div class="custom-control ">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="brand-5"
                          />
                          <label class="custom-control-label" for="brand-5"
                            >UGG</label
                          >
                        </div>
                        <!-- End . -->
                      </div>
                      <!-- End .filter-item -->

                      <div class="filter-item">
                        <div class="custom-control ">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="brand-6"
                          />
                          <label class="custom-control-label" for="brand-6"
                            >F&F</label
                          >
                        </div>
                        <!-- End . -->
                      </div>
                      <!-- End .filter-item -->

                      <div class="filter-item">
                        <div class="custom-control ">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="brand-7"
                          />
                          <label class="custom-control-label" for="brand-7"
                            >Nike</label
                          >
                        </div>
                        <!-- End . -->
                      </div>
                      <!-- End .filter-item -->
                    </div>
                    <!-- End .filter-items -->
                  </div>
                  <!-- End .widget-body -->
                </div>
                <!-- End .collapse -->
              </div>
              <!-- End .widget -->

              <div class="widget widget-collapsible">
                <h3 class="widget-title">
                    Price
                  </a>
                </h3>
                <!-- End .widget-title -->
                <input type="range" width="100px" class="form-range" id="customRange1">
              <!-- End .widget -->
            </div>
            <!-- End .sidebar sidebar-shop -->
          </aside>
          <!-- End .col-lg-3 -->
        </div>
        <!-- End .row -->
      </div>
      <!-- End .container -->
    </div>
    <!-- End .page-content -->
  </main>
  <!-- End .main -->

  <footer class="footer">
    <div class="footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <div class="widget widget-about">
              <img
                src="{{ asset('utills/logo2.png') }}"
                class="footer-logo"
                alt="Footer Logo"
                width="105"
                height="25"
              />
              <p>
                Praesent dapibus, neque id cursus ucibus, tortor neque egestas
                augue, eu vulputate magna eros eu erat.
              </p>

              <div class="social-icons">
                <a
                        href="#"
                        class="social-icon"
                        title="Facebook"
                        target="_blank"
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                      <a
                        href="#"
                        class="social-icon"
                        title="Twitter"
                        target="_blank"
                        ><i class="fab fa-twitter"></i
                      ></a>
                      <a
                        href="#"
                        class="social-icon"
                        title="Instagram"
                        target="_blank"
                        ><i class="fab fa-instagram"></i
                      ></a>
                      <a
                        href="#"
                        class="social-icon"
                        title="Youtube"
                        target="_blank"
                        ><i class="fab fa-youtube"></i
                      ></a>
                      <a
                        href="#"
                        class="social-icon"
                        title="Pinterest"
                        target="_blank"
                        ><i class="fab fa-pinterest"></i
                      ></a>
              </div>
              <!-- End .soial-icons -->
            </div>
            <!-- End .widget about-widget -->
          </div>
          <!-- End .col-sm-6 col-lg-3 -->

          <div class="col-sm-6 col-lg-3">
            <div class="widget">
              <h4 class="widget-title">Useful Links</h4>
              <!-- End .widget-title -->

              <ul class="widget-list">
                <li><a href="about.html">About Molla</a></li>
                <li><a href="#">How to shop on Molla</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="contact.html">Contact us</a></li>
                <li><a href="login.html">Log in</a></li>
              </ul>
              <!-- End .widget-list -->
            </div>
            <!-- End .widget -->
          </div>
          <!-- End .col-sm-6 col-lg-3 -->

          <div class="col-sm-6 col-lg-3">
            <div class="widget">
              <h4 class="widget-title">Customer Service</h4>
              <!-- End .widget-title -->

              <ul class="widget-list">
                <li><a href="#">Payment Methods</a></li>
                <li><a href="#">Money-back guarantee!</a></li>
                <li><a href="#">Returns</a></li>
                <li><a href="#">Shipping</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
              <!-- End .widget-list -->
            </div>
            <!-- End .widget -->
          </div>
          <!-- End .col-sm-6 col-lg-3 -->

          <div class="col-sm-6 col-lg-3">
            <div class="widget">
              <h4 class="widget-title">My Account</h4>
              <!-- End .widget-title -->

              <ul class="widget-list">
                <li><a href="#">Sign In</a></li>
                <li><a href="cart.html">View Cart</a></li>
                <li><a href="#">My Wishlist</a></li>
                <li><a href="#">Track My Order</a></li>
                <li><a href="#">Help</a></li>
              </ul>
              <!-- End .widget-list -->
            </div>
            <!-- End .widget -->
          </div>
          <!-- End .col-sm-6 col-lg-3 -->
        </div>
        <!-- End .row -->
      </div>
      <!-- End .container -->
    </div>
    <!-- End .footer-middle -->

    <div class="footer-bottom">
      <div class="container">
        <p class="footer-copyright">
          Copyright © 2019 Molla Store. All Rights Reserved.
        </p>
        <!-- End .footer-copyright -->
        <figure class="footer-payments">
          <img
            src="{{ asset('utills/payments.png') }}"
            alt="Payment methods"
            width="272"
            height="20"
          />
        </figure>
        <!-- End .footer-payments -->
      </div>
      <!-- End .container -->
    </div>
    <!-- End .footer-bottom -->
  </footer>
  <!-- End .footer -->
</div>
<!-- End .page-wrapper -->

</body>
</html>