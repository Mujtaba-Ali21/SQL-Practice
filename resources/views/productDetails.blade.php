<!DOCTYPE html>
<html lang="en">
  @include('head')

  <body>
    @if ($message = Session::get('success'))
      <form>
        <div class="alert alert-primary alert-block text-dark alert-dismissible">
          <p style="color: black">{{ $message }}</p>
          <button type="submit" class="btn-close"></button>
        </div>
      </form>
    @endif

    <div class="page-wrapper">
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

                <a href="/" class="logo">
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

      <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
          <div class="container d-flex align-items-center">
            <ol class="breadcrumb">
              <li class="me-3">Home &nbsp; ></li>
              <li class="me-3 ms-2">Products &nbsp; ></li>
              <li class="active ms-2" style="color: #c96;" aria-current="page"><i>{{ $product->productName }}</i></li>
            </ol>
          </div>
          <!-- End .container -->
        </nav>
        <!-- End .breadcrumb-nav -->

        <div class="page-content">
          <div class="container">
            <div class="product-details-top">
              <div class="row">
                <div class="col-md-5">
                  <div class="product-gallery">
                    <div class="row">
                      <figure class="product-main-image">
                        <img
                          id="product-zoom"
                          src="/productImages/{{ $product->image }}"
                          alt="{{ $product->name }}"
                        />
                      </figure>
                      <!-- End .product-main-image -->
                    </div>
                    <!-- End .row -->
                  </div>
                  <!-- End .product-gallery -->
                </div>
                <!-- End .col-md-6 -->

                <div class="col-md-6">
                  <div class="product-details">
                    <h1 class="product-title">{{ $product->productName }}</h1>
                    <!-- End .product-title -->

                    <button class="nav-link toggle-model">
                        <div class="">
                          
                        <span class="me-2">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $product->average_rating)
                                    <i class="bi bi-star-fill" style="color: #fcb941;"></i>
                                @else
                                    <i class="bi bi-star-fill" style="color: #cccccc;"></i>
                                @endif
                            @endfor
                        </span>

                          <span>
                            ( {{ $totalReviews }} Reviews )
                          </span>
                        </div>
                      </button>

                    <form
                      class="mt-1"
                      method="POST"
                      action="{{ route('rate', ['id' => $product->ID]) }}"
                    >
                      @csrf

                      <span
                        class="btn-wishlist bi bi-star ms-2 toggle-model"
                        id="toggle-rating"
                        style="color: #fcb941"
                        role="button"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal"
                      >
                    </span>
                    <span class="toggle-model" role="button" style="color: #fcb941">Rate It</span>

                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="exampleModal"
                        style="margin-top: 150px"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1
                                class="modal-title fs-1"
                                id="exampleModalLabel"
                              >
                                Rate
                              </h1>
                              <span
                                role="button"
                                class="btn-close me-2 model-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></span>
                            </div>
                            <div class="ratings-container mt-3 ms-2">
                              <input
                                type="hidden"
                                name="rating"
                                id="rating"
                                value=""
                              />
                              <i
                                class="bi bi-star h4 ms-2"
                                title="Bad"
                                onclick="setRating(1)"
                              ></i>
                              <i
                                class="bi bi-star h4 ms-2"
                                title="Poor"
                                onclick="setRating(2)"
                              ></i>
                              <i
                                class="bi bi-star h4 ms-2"
                                title="OK"
                                onclick="setRating(3)"
                              ></i>
                              <i
                                class="bi bi-star h4 ms-2"
                                title="Good"
                                onclick="setRating(4)"
                              ></i>
                              <i
                                class="bi bi-star h4 ms-2"
                                title="Excellent"
                                onclick="setRating(5)"
                              ></i>
                            </div>
                            <h1
                              class="modal-title fs-1 ms-3"
                              id="exampleModalLabel"
                            >
                              <label for="feedback" class="h3">Feedback</label>
                            </h1>
                            <div class="ratings-container mt-3">
                              <textarea
                                class="form-control border-0"
                                name="feedback"
                                id="feedback"
                                cols="20"
                                rows="6"
                                placeholder="Express Your Thoughts Here"
                              ></textarea>
                            </div>
                            <div class="modal-footer">
                              <span
                                role="button"
                                class="text-dark h6 mt-1 pe-5 model-close"
                                data-bs-dismiss="modal"
                                >Close</span
                              >
                              <button
                                type="submit"
                                class="btn btn-primary border-0"
                                style="
                                  border-radius: 8px;
                                  background-color: #fcb941;
                                "
                              >
                                Save
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                    <!-- End .ratings -->
                    </div>
                  <!-- End .rating-container -->

                  <div class="product-price" style="font-size: 2.4rem;">${{ $product->price }}.00</div>

                  <!-- End .product-price -->

                  <div class="product-content">
                    <p>
                      Sed egestas, ante et vulputate volutpat, eros pede semper
                      est, vitae luctus metus libero eu augue. Morbi purus
                      libero, faucibus adipiscing. Sed lectus.
                    </p>
                  </div>
                  <!-- End .product-content -->

                  <div class="details-filter-row details-row-size">
                    <label for="size">Size:</label>
                    <div class="">
                      <select name="size" id="size" class="form-control">
                        <option value="#" selected="selected">
                          Select a size
                        </option>
                        <option value="s">Small</option>
                        <option value="m">Medium</option>
                        <option value="l">Large</option>
                        <option value="xl">Extra Large</option>
                      </select>
                    </div>
                    <!-- End .select-custom -->
                  </div>
                  <!-- End .details-filter-row -->

                  <div class="details-filter-row details-row-size">
                    <label for="qty">Qty:</label>
                    <div class="product-details-quantity">
                      <input
                        type="number"
                        id="qty"
                        class="form-control"
                        value="1"
                        min="1"
                        max="10"
                        step="1"
                        data-decimals="0"
                        required
                      />
                    </div>
                    <!-- End .product-details-quantity -->
                  </div>
                  <!-- End .details-filter-row -->

                  <div class="product-details-action">
                    <a href="#" class="btn-product btn-cart bi bi-cart-plus"
                      ><span>add to cart</span></a
                    >

                    <div class="details-action-wrapper">
                      <a
                        href="#"
                        class="btn-product btn-wishlist bi bi-heart"
                        title="Wishlist"
                        ><span>Add to Wishlist</span></a
                      >
                    </div>
                    <!-- End .details-action-wrapper -->
                  </div>
                  <!-- End .product-details-action -->

                  <div class="product-details-footer">
                    <div class="product-cat">
                      <span>Category:</span>
                      <a href="#">Lorem</a>, <a href="#">Ipsum</a>,
                      <a href="#">Sit</a>
                    </div>
                    <!-- End .product-cat -->

                    <div class="social-icons social-icons-sm">
                      <span class="social-label">Share:</span>
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
                        title="Pinterest"
                        target="_blank"
                        ><i class="fab fa-pinterest"></i
                      ></a>
                    </div>
                  </div>
                  <!-- End .product-details-footer -->
                </div>
                <!-- End .product-details -->
              </div>
              <!-- End .col-md-6 -->
            </div>
            <!-- End .row -->
          </div>
          <!-- End .product-details-top -->

          <div class="product-details-tab">
            <ul
              class="nav nav-pills justify-content-center"
              id="pills-tab"
              role="tablist"
            >
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link active"
                  id="product-desc-link"
                  data-toggle="tab"
                  href="#product-desc-tab"
                  role="tab"
                  aria-controls="product-desc-tab"
                  aria-selected="true"
                >
                  Description
                </button>
              </li>
              <li class="nav-item">
                <button
                  class="nav-link"
                  id="product-info-link"
                  data-toggle="tab"
                  href="#product-info-tab"
                  role="tab"
                  aria-controls="product-info-tab"
                  aria-selected="false"
                >
                  Additional information
                </button>
              </li>
              <li class="nav-item">
                <button
                  class="nav-link"
                  id="product-shipping-link"
                  data-toggle="tab"
                  href="#product-shipping-tab"
                  role="tab"
                  aria-controls="product-shipping-tab"
                  aria-selected="false"
                >
                  Questions & Answers ({{$questions->count()}})
                </button>
              </li>
              <li class="nav-item">
                <button
                  class="nav-link"
                  id="product-review-link"
                  data-toggle="tab"
                  href="#product-review-tab"
                  role="tab"
                  aria-controls="product-review-tab"
                  aria-selected="false"
                >
                  Reviews ({{$totalReviews}})
                </button>
              </li>
            </ul>
            <div class="tab-content container">
              <div
                class="tab-pane fade show active"
                id="product-desc-tab"
                role="tabpanel"
                aria-labelledby="product-desc-link"
              >
                <div class="product-desc-content">
                  <h3>Product Information</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                    erat ut turpis. Suspendisse urna viverra non, semper
                    suscipit, posuere a, pede. Donec nec justo eget felis
                    facilisis fermentum. Aliquam porttitor mauris sit amet orci.
                    Aenean dignissim pellentesque felis. Phasellus ultrices
                    nulla quis nibh. Quisque a lectus. Donec consectetuer ligula
                    vulputate sem tristique cursus.
                  </p>
                  <ul>
                    <li>
                      Nunc nec porttitor turpis. In eu risus enim. In vitae
                      mollis elit.
                    </li>
                    <li>Vivamus finibus vel mauris ut vehicula.</li>
                    <li>
                      Nullam a magna porttitor, dictum risus nec, faucibus
                      sapien.
                    </li>
                  </ul>

                  <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                    erat ut turpis. Suspendisse urna viverra non, semper
                    suscipit, posuere a, pede. Donec nec justo eget felis
                    facilisis fermentum. Aliquam porttitor mauris sit amet orci.
                    Aenean dignissim pellentesque felis. Phasellus ultrices
                    nulla quis nibh. Quisque a lectus. Donec consectetuer ligula
                    vulputate sem tristique cursus.
                  </p>
                </div>
                <!-- End .product-desc-content -->
              </div>
              <!--.End .tab-pane -->

              <div
                class="tab-pane fade"
                id="product-info-tab"
                role="tabpanel"
                aria-labelledby="product-info-link"
              >
                <div class="product-desc-content">
                  <h3>Information</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                    erat ut turpis. Suspendisse urna viverra non, semper
                    suscipit, posuere a, pede. Donec nec justo eget felis
                    facilisis fermentum. Aliquam porttitor mauris sit amet orci.
                  </p>

                  <h3>Fabric & care</h3>
                  <ul>
                    <li>Faux suede fabric</li>
                    <li>Gold tone metal hoop handles.</li>
                    <li>RI branding</li>
                    <li>Snake print trim interior</li>
                    <li>Adjustable cross body strap</li>
                    <li>
                      Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm
                    </li>
                  </ul>

                  <h3>Size</h3>
                  <p>one size</p>
                </div>
                <!-- End .product-desc-content -->
              </div>
              <!-- .End .tab-pane -->
              <div
                class="tab-pane fade"
                id="product-shipping-tab"
                role="tabpanel"
                aria-labelledby="product-shipping-link"
              >
              <div class="product-desc-content">
                <div class="d-flex justify-content-between">
                  <h3>Questions ({{$questions->count()}})</h3>
                  <a role="button" id="openModal"><span class="h6">Ask Question</span></a>
                </div>
                <div class="reviews">
                    <!-- Questions -->
                    <div class="container content">
                      <div class="row">
                        <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="review">
                              <ul class="chat-list">
                              @foreach ($questions as $question)
                                <li class="in">
                                  <div class="chat-img">
                                    <img alt="Avtar" src="data:image/png;base64,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" />
                                  </div>
                                  <span class="text-dark pt-5 fs-4">
                                    <a href="/productDetails/answer/{{$question->ID}}" class="openAnsModal" role="button" style="margin-left: 100px;">
                                      Reply
                                    </a>  
                                  </span>
                                  <div class="chat-body d-flex">
                                    <div class="chat-message">
                                      <h6 style="color: #777;">Username</h6>
                                      <p class="text-white">{{$question->question}}</p>
                                      <h6 style="color: #777; margin: 5px 10px 0 0">{{ $question->created_at->diffForHumans() }}</h6>
                                    </div>
                                  </div>
                                </li>

                                @foreach ($answers->where('question_id', $question->ID)->sortBy('created_at') as $answer) 
                                  <li class="out">
                                    <div class="chat-img">
                                      <img alt="Avtar" src="data:image/jpeg;base64,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" />
                                    </div>
                                    <div class="chat-body">
                                      <div class="chat-message">
                                        <h6 style="color: #777;">Seller</h6>
                                        <p class="text-white">{{ $answer->answer }}</p>
                                        <h6 style="color: #777; margin: 5px 0 0 0">{{ $answer->created_at->diffForHumans() }}</h6>
                                      </div>
                                    </div>
                                  </li>
                                @endforeach
                              @endforeach
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                </div>
              <!-- .End .tab-pane -->
              
              <!-- Question Modal -->
              <form method="POST" action="{{ route('askQuestion', ['id' => $product->ID]) }}">
                @csrf
                <div class="modal" id="myModal" tabindex="-1" role="dialog" style="background-color: rgba(0, 0, 0, 0.5);">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);">
                      <div class="modal-header">
                        <h5 class="modal-title">Ask Question</h5>
                        <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body" style="background: #ecf1f8;">
                        <input type="text" name="question" class="form-control border-0 mt-2" style="background: #ecf1f8;">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-light closeModal" data-dismiss="modal" style="border-radius: 8px;">Close</button>
                        <button type="submit" class="btn btn-primary" id="saveQuestionBtn" style="border-radius: 8px;">Continue</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              </div>
      
              <div
                class="tab-pane fade"
                id="product-review-tab"
                role="tabpanel"
                aria-labelledby="product-review-link"
              >
              <div id="ratings-container">
                  <div class="reviews">
                    <div class="d-flex justify-content-between">
                    <h3>Reviews ({{$totalReviews}})</h3>
                    <span class="h6">{{ $product->average_rating ? 'Average Rating: ' . $product->average_rating . ' / 5' : 'Not Rated Yet' }}</span>
                  </div>
                    <div class="reviews">
                      @foreach ($ratings as $rating)
                      <div class="review">
                        <div class="row no-gutters">
                          <div class="col-auto">
                            <h4>
                              <a href="#"
                                >{{ isset($rating->user->username) ?
                                $rating->user->username : 'Username' }}</a
                              >
                            </h4>
                             <div>
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $rating->rating)
                                        <i class="bi bi-star-fill" style="color: #fcb941;"></i>
                                        @else
                                        <i class="bi bi-star-fill" style="color: #cccccc;"></i>
                                    @endif
                                @endfor
                            </div> 
                            <span class="review-date"
                              >{{$rating->created_at->diffForHumans()}}</span
                            >
                          </div>
                          <div class="col">
                            <div class="review-content">
                              <p>{{$rating->message}}</p>
                            </div>
                            <div class="review-action">
                            <a href="/productDetails/helpful/{{$rating->ID}}" class="mark-helpful">
                              <i class="bi bi-hand-thumbs-up"></i>Helpful
                              (<span class="helpful-count">
                                  {{ isset($votes[$rating->ID]) ? $votes[$rating->ID]->sum('helpful') : 0 }}
                              </span>)
                          </a>

                          <a href="/productDetails/unhelpful/{{$rating->ID}}" class="mark-unhelpful">
                              <i class="bi bi-hand-thumbs-down"></i>Unhelpful
                              (<span class="unhelpful-count">
                                  {{ isset($votes[$rating->ID]) ? $votes[$rating->ID]->sum('unhelpful') : 0 }}
                              </span>)
                          </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>

              <!-- End .tab-content -->
            </div>
            <!-- End .product-details-tab -->
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
                    Praesent dapibus, neque id cursus ucibus, tortor neque
                    egestas augue, eu vulputate magna eros eu erat.
                  </p>

                  <div class="social-icons">
                    <a
                      href="#"
                      class="social-icon"
                      target="_blank"
                      title="Facebook"
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a
                      href="#"
                      class="social-icon"
                      target="_blank"
                      title="Twitter"
                      ><i class="fab fa-twitter"></i
                    ></a>
                    <a
                      href="#"
                      class="social-icon"
                      target="_blank"
                      title="Instagram"
                      ><i class="fab fa-instagram"></i
                    ></a>
                    <a
                      href="#"
                      class="social-icon"
                      target="_blank"
                      title="Youtube"
                      ><i class="fab fa-youtube"></i
                    ></a>
                    <a
                      href="#"
                      class="social-icon"
                      target="_blank"
                      title="Pinterest"
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

    <div class="sticky-bar shadow-lg bg-body rounded" style="box-shadow: -15px 0 43px rgba(51, 51, 51, 0.30) !important;">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <figure class="product-media">
              <a href="product.html">
                <img
                  id="product-zoom"
                  src="/productImages/{{ $product->image }}"
                  alt="{{ $product->productName }}"
                />
              </a>
            </figure>
            <!-- End .product-media -->
            <h4 class="product-title">
              <a href="product.html">{{ $product->productName }}</a>
            </h4>
            <!-- End .product-title -->
          </div>
          <!-- End .col-6 -->

          <div class="col-6 justify-content-end">
            <div class="product-price">${{ $product->price }}.00</div>
            <!-- End .product-price -->
            <div class="product-details-quantity">
              <input
                type="number"
                id="sticky-cart-qty"
                class="form-control"
                value="1"
                min="1"
                max="10"
                step="1"
                data-decimals="0"
                required
              />
            </div>
            <!-- End .product-details-quantity -->

            <div class="product-details-action">
              <a href="#" class="btn-product btn-cart bi bi-cart-plus"
                ><span>add to cart</span></a
              >
              <span
                class="btn-product btn-wishlist bi bi-star toggle-model"
                role="button"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
                title="Wishlist"
                ><span>Add to Wishlist</span></span
              >
            </div>
            <!-- End .product-details-action -->
          </div>
          <!-- End .col-6 -->
        </div>
        <!-- End .row -->
      </div>
      <!-- End .container -->
    </div>
    <!-- End .sticky-bar -->

    <div class="mobile-menu-container">
      <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
          <label for="mobile-search" class="sr-only">Search</label>
          <input
            type="search"
            class="form-control"
            name="mobile-search"
            id="mobile-search"
            placeholder="Search in..."
            required
          />
          <button class="btn btn-primary" type="submit">
            <i class="icon-search"></i>
          </button>
        </form>

        <nav class="mobile-nav">
          <ul class="mobile-menu">
            <li class="active">
              <a href="#">Home</a>

              <ul>
                <li><a href="index-1.html">01 - furniture store</a></li>
                <li><a href="index-2.html">02 - furniture store</a></li>
                <li><a href="index-3.html">03 - electronic store</a></li>
                <li><a href="index-4.html">04 - electronic store</a></li>
                <li><a href="index-5.html">05 - fashion store</a></li>
                <li><a href="index-6.html">06 - fashion store</a></li>
                <li><a href="index-7.html">07 - fashion store</a></li>
                <li><a href="index-8.html">08 - fashion store</a></li>
                <li><a href="index-9.html">09 - fashion store</a></li>
                <li><a href="index-10.html">10 - shoes store</a></li>
                <li><a href="index-11.html">11 - furniture simple store</a></li>
                <li><a href="index-12.html">12 - fashion simple store</a></li>
                <li><a href="index-13.html">13 - market</a></li>
                <li><a href="index-14.html">14 - market fullwidth</a></li>
                <li><a href="index-15.html">15 - lookbook 1</a></li>
                <li><a href="index-16.html">16 - lookbook 2</a></li>
                <li><a href="index-17.html">17 - fashion store</a></li>
                <li>
                  <a href="index-18.html">18 - fashion store (with sidebar)</a>
                </li>
                <li><a href="index-19.html">19 - games store</a></li>
                <li><a href="index-20.html">20 - book store</a></li>
                <li><a href="index-21.html">21 - sport store</a></li>
                <li><a href="index-22.html">22 - tools store</a></li>
                <li>
                  <a href="index-23.html">23 - fashion left navigation store</a>
                </li>
                <li><a href="index-24.html">24 - extreme sport store</a></li>
              </ul>
            </li>
            <li>
              <a href="category.html">Shop</a>
              <ul>
                <li><a href="category-list.html">Shop List</a></li>
                <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                <li><a href="category.html">Shop Grid 3 Columns</a></li>
                <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                <li>
                  <a href="category-boxed.html"
                    ><span
                      >Shop Boxed No Sidebar<span class="tip tip-hot"
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
                <li>
                  <a href="product-category-boxed.html"
                    >Product Category Boxed</a
                  >
                </li>
                <li>
                  <a href="product-category-fullwidth.html"
                    ><span
                      >Product Category Fullwidth<span class="tip tip-new"
                        >New</span
                      ></span
                    ></a
                  >
                </li>
                <li><a href="cart.html">Cart</a></li>
                <li><a href="checkout.html">Checkout</a></li>
                <li><a href="wishlist.html">Wishlist</a></li>
                <li><a href="#">Lookbook</a></li>
              </ul>
            </li>
            <li>
              <a href="product.html" class="">Product</a>
              <ul>
                <li><a href="product.html">Default</a></li>
                <li><a href="product-centered.html">Centered</a></li>
                <li>
                  <a href="product-extended.html"
                    ><span
                      >Extended Info<span class="tip tip-new">New</span></span
                    ></a
                  >
                </li>
                <li><a href="product-gallery.html">Gallery</a></li>
                <li><a href="product-sticky.html">Sticky Info</a></li>
                <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                <li><a href="product-fullwidth.html">Full Width</a></li>
                <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
              </ul>
            </li>
            <li>
              <a href="#">Pages</a>
              <ul>
                <li>
                  <a href="about.html">About</a>

                  <ul>
                    <li><a href="about.html">About 01</a></li>
                    <li><a href="about-2.html">About 02</a></li>
                  </ul>
                </li>
                <li>
                  <a href="contact.html">Contact</a>

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
              <a href="blog.html">Blog</a>

              <ul>
                <li><a href="blog.html">Classic</a></li>
                <li><a href="blog-listing.html">Listing</a></li>
                <li>
                  <a href="#">Grid</a>
                  <ul>
                    <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                    <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                    <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                    <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">Masonry</a>
                  <ul>
                    <li>
                      <a href="blog-masonry-2cols.html">Masonry 2 columns</a>
                    </li>
                    <li>
                      <a href="blog-masonry-3cols.html">Masonry 3 columns</a>
                    </li>
                    <li>
                      <a href="blog-masonry-4cols.html">Masonry 4 columns</a>
                    </li>
                    <li>
                      <a href="blog-masonry-sidebar.html">Masonry sidebar</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">Mask</a>
                  <ul>
                    <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                    <li>
                      <a href="blog-mask-masonry.html">Blog mask masonry</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">Single Post</a>
                  <ul>
                    <li><a href="single.html">Default with sidebar</a></li>
                    <li>
                      <a href="single-fullwidth.html">Fullwidth no sidebar</a>
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
              <a href="elements-list.html" class="custom-anchor">Elements</a>
              <ul>
                <li><a href="elements-products.html">Products</a></li>
                <li><a href="elements-typography.html">Typography</a></li>
                <li><a href="elements-titles.html">Titles</a></li>
                <li><a href="elements-banners.html">Banners</a></li>
                <li>
                  <a href="elements-product-category.html">Product Category</a>
                </li>
                <li><a href="elements-video-banners.html">Video Banners</a></li>
                <li><a href="elements-buttons.html">Buttons</a></li>
                <li><a href="elements-accordions.html">Accordions</a></li>
                <li><a href="elements-tabs.html">Tabs</a></li>
                <li><a href="elements-testimonials.html">Testimonials</a></li>
                <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                <li><a href="elements-portfolio.html">Portfolio</a></li>
                <li><a href="elements-cta.html">Call to Action</a></li>
                <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- End .mobile-nav -->

        <div class="social-icons">
          <a href="#" class="social-icon" target="_blank" title="Facebook"
            ><i class="icon-facebook-f"></i
          ></a>
          <a href="#" class="social-icon" target="_blank" title="Twitter"
            ><i class="icon-twitter"></i
          ></a>
          <a href="#" class="social-icon" target="_blank" title="Instagram"
            ><i class="icon-instagram"></i
          ></a>
          <a href="#" class="social-icon" target="_blank" title="Youtube"
            ><i class="icon-youtube"></i
          ></a>
        </div>
        <!-- End .social-icons -->
      </div>
      <!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->

  <script>
    const stars = document.querySelectorAll(".ratings-container i");

    stars.forEach((star, index1) => {
      star.addEventListener("click", () => {
        stars.forEach((star, index2) => {
          index1 >= index2
            ? star.classList.add("active")
            : star.classList.remove("active");
        });
      });
    });

    $("#exampleModal").on("hidden.bs.modal", function () {
      stars.forEach((star) => {
        star.classList.remove("active");
      });
    });

    function setRating(rating) {
      document.getElementById("rating").value = rating;
    }

    $(document).ready(function () {
      $(".toggle-model").click(function () {
        $("#exampleModal").modal("show");
      });
      $(".model-close").click(function () {
        $("#exampleModal").modal("hide");
      });

      var modal = $("#myModal");
      var openModalBtn = $("#openModal");
      var closeModalBtn = $(".closeModal");

      function openModal() {
        modal.fadeIn("show");
      }

      function closeModal() {
        modal.fadeOut("show");
      }

      openModalBtn.on("click", openModal);
      closeModalBtn.on("click", closeModal);

      $(".mark-helpful").on("click", function (event) {
        event.preventDefault();

        var ratingId = $(this).attr("href").split("/").pop();
        var countElement = $(this).find(".helpful-count");

        $.ajax({
          url: "/productDetails/helpful/" + ratingId,
          type: "POST",
          data: {
            _token: "{{ csrf_token() }}",
          },
          success: function (response) {
            if (response.success) {
              var newCount = parseInt(countElement.text());

              if (response.action === "added") {
                newCount++;
              } else if (response.action === "removed") {
                newCount--;
              }

              countElement.text(newCount);
            } else {
              console.error(response.error);
            }
          },
          error: function (xhr, status, error) {
            console.error(error);
          },
        });
      });

      $(".mark-unhelpful").click(function (event) {
        event.preventDefault();

        var ratingId = $(this).attr("href").split("/").pop();

        $.ajax({
          url: "/productDetails/unhelpful/" + ratingId,
          type: "POST",
          data: {
            _token: "{{ csrf_token() }}",
          },
          success: function (response) {
            if (response.success) {
              var countElement = $(
                '.mark-unhelpful[href="/productDetails/unhelpful/' +
                  ratingId +
                  '"]'
              ).find(".unhelpful-count");
              var newCount = parseInt(countElement.text());

              if (response.action === "added") {
                newCount++;
              } else if (response.action === "removed") {
                newCount--;
              }

              countElement.text(newCount);
            } else {
              console.error(response.error);
            }
          },
          error: function (xhr, status, error) {
            console.error(error);
          },
        });
      });
    });
  </script>
  </body>
</html>
