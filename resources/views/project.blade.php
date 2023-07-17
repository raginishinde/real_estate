<!DOCTYPE html>
<html>
<head>
    @include('layout.head')
    
    <script type="text/javascript">
        var baseurl = '<?php echo url('/'); ?>'
    </script>
</head>
<body>
<div class="wrapper ovh">
  @include('layout.head-navigation')
  


  <div class="body_content">
    <!-- Breadcumb Sections -->
    <section class="breadcumb-section bgc-f7">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcumb-style1">
              <h2 class="title">New York Homes for Sale</h2>
              <div class="breadcumb-list">
                <a href="#">Home</a>
                <a href="#">For Rent</a>
              </div>
              <a href="#" class="filter-btn-left mobile-filter-btn d-block d-lg-none"><span class="flaticon-settings"></span> Filter</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Property All Lists -->
    <section class="pt0 pb90 bgc-f7">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-4">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="{{ asset('public/images/listings/g3-1.jpg') }}" alt="">
                <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                <div class="list-price">$14,000 / <span>mo</span></div>
              </div>
              <div class="list-content">
                <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h6>
                <p class="list-text">California City, CA, USA</p>
                <div class="list-meta d-flex align-items-center">
                  <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                  <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                  <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                </div>
                <hr class="mt-2 mb-2">
                <div class="list-meta2 d-flex justify-content-between align-items-center">
                  <span class="for-what">For Rent</span>
                  <div class="icons d-flex align-items-center">
                    <a href="#"><span class="flaticon-fullscreen"></span></a>
                    <a href="#"><span class="flaticon-new-tab"></span></a>
                    <a href="#"><span class="flaticon-like"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="{{ asset('public/images/listings/g3-2.jpg') }}" alt="">
                <div class="list-price">$82,000 / <span>mo</span></div>
              </div>
              <div class="list-content">
                <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in Rego Park</a></h6>
                <p class="list-text">California City, CA, USA</p>
                <div class="list-meta d-flex align-items-center">
                  <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                  <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                  <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                </div>
                <hr class="mt-2 mb-2">
                <div class="list-meta2 d-flex justify-content-between align-items-center">
                  <span class="for-what">For Rent</span>
                  <div class="icons d-flex align-items-center">
                    <a href="#"><span class="flaticon-fullscreen"></span></a>
                    <a href="#"><span class="flaticon-new-tab"></span></a>
                    <a href="#"><span class="flaticon-like"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="{{ asset('public/images/listings/g3-3.jpg') }}" alt="">
                <div class="list-price">$63,000 / <span>mo</span></div>
              </div>
              <div class="list-content">
                <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                <p class="list-text">California City, CA, USA</p>
                <div class="list-meta d-flex align-items-center">
                  <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                  <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                  <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                </div>
                <hr class="mt-2 mb-2">
                <div class="list-meta2 d-flex justify-content-between align-items-center">
                  <span class="for-what">For Rent</span>
                  <div class="icons d-flex align-items-center">
                    <a href="#"><span class="flaticon-fullscreen"></span></a>
                    <a href="#"><span class="flaticon-new-tab"></span></a>
                    <a href="#"><span class="flaticon-like"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="{{ asset('public/images/listings/g3-4.jpg') }}" alt="">
                <div class="list-price">$63,000 / <span>mo</span></div>
              </div>
              <div class="list-content">
                <h6 class="list-title"><a href="page-property-single-v1.html">House on the Northridge</a></h6>
                <p class="list-text">California City, CA, USA</p>
                <div class="list-meta d-flex align-items-center">
                  <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                  <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                  <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                </div>
                <hr class="mt-2 mb-2">
                <div class="list-meta2 d-flex justify-content-between align-items-center">
                  <span class="for-what">For Rent</span>
                  <div class="icons d-flex align-items-center">
                    <a href="#"><span class="flaticon-fullscreen"></span></a>
                    <a href="#"><span class="flaticon-new-tab"></span></a>
                    <a href="#"><span class="flaticon-like"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="{{ asset('public/images/listings/g3-5.jpg') }}" alt="">
                <div class="list-price">$14,000 / <span>mo</span></div>
              </div>
              <div class="list-content">
                <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h6>
                <p class="list-text">California City, CA, USA</p>
                <div class="list-meta d-flex align-items-center">
                  <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                  <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                  <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                </div>
                <hr class="mt-2 mb-2">
                <div class="list-meta2 d-flex justify-content-between align-items-center">
                  <span class="for-what">For Rent</span>
                  <div class="icons d-flex align-items-center">
                    <a href="#"><span class="flaticon-fullscreen"></span></a>
                    <a href="#"><span class="flaticon-new-tab"></span></a>
                    <a href="#"><span class="flaticon-like"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="{{ asset('public/images/listings/g3-6.jpg') }}" alt="">
                <div class="list-price">$82,000 / <span>mo</span></div>
              </div>
              <div class="list-content">
                <h6 class="list-title"><a href="page-property-single-v1.html">Villa called Archangel</a></h6>
                <p class="list-text">California City, CA, USA</p>
                <div class="list-meta d-flex align-items-center">
                  <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                  <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                  <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                </div>
                <hr class="mt-2 mb-2">
                <div class="list-meta2 d-flex justify-content-between align-items-center">
                  <span class="for-what">For Rent</span>
                  <div class="icons d-flex align-items-center">
                    <a href="#"><span class="flaticon-fullscreen"></span></a>
                    <a href="#"><span class="flaticon-new-tab"></span></a>
                    <a href="#"><span class="flaticon-like"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="{{ asset('public/images/listings/g3-7.jpg') }}" alt="">
                <div class="list-price">$63,000 / <span>mo</span></div>
              </div>
              <div class="list-content">
                <h6 class="list-title"><a href="page-property-single-v1.html">House In Foxhall Ave, Kingston</a></h6>
                <p class="list-text">California City, CA, USA</p>
                <div class="list-meta d-flex align-items-center">
                  <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                  <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                  <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                </div>
                <hr class="mt-2 mb-2">
                <div class="list-meta2 d-flex justify-content-between align-items-center">
                  <span class="for-what">For Rent</span>
                  <div class="icons d-flex align-items-center">
                    <a href="#"><span class="flaticon-fullscreen"></span></a>
                    <a href="#"><span class="flaticon-new-tab"></span></a>
                    <a href="#"><span class="flaticon-like"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="{{ asset('public/images/listings/g3-8.jpg') }}" alt="">
                <div class="list-price">$63,000 / <span>mo</span></div>
              </div>
              <div class="list-content">
                <h6 class="list-title"><a href="page-property-single-v1.html">Store in Woodside, New York</a></h6>
                <p class="list-text">California City, CA, USA</p>
                <div class="list-meta d-flex align-items-center">
                  <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                  <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                  <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                </div>
                <hr class="mt-2 mb-2">
                <div class="list-meta2 d-flex justify-content-between align-items-center">
                  <span class="for-what">For Rent</span>
                  <div class="icons d-flex align-items-center">
                    <a href="#"><span class="flaticon-fullscreen"></span></a>
                    <a href="#"><span class="flaticon-new-tab"></span></a>
                    <a href="#"><span class="flaticon-like"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="{{ asset('public/images/listings/g3-9.jpg') }}" alt="">
                <div class="list-price">$82,000 / <span>mo</span></div>
              </div>
              <div class="list-content">
                <h6 class="list-title"><a href="page-property-single-v1.html">Luxury Villa In Los Angeles</a></h6>
                <p class="list-text">California City, CA, USA</p>
                <div class="list-meta d-flex align-items-center">
                  <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                  <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                  <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                </div>
                <hr class="mt-2 mb-2">
                <div class="list-meta2 d-flex justify-content-between align-items-center">
                  <span class="for-what">For Rent</span>
                  <div class="icons d-flex align-items-center">
                    <a href="#"><span class="flaticon-fullscreen"></span></a>
                    <a href="#"><span class="flaticon-new-tab"></span></a>
                    <a href="#"><span class="flaticon-like"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="mbp_pagination text-center">
            <ul class="page_navigation">
              <li class="page-item">
                <a class="page-link" href="#"> <span class="fas fa-angle-left"></span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">20</a></li>
              <li class="page-item">
                <a class="page-link" href="#"><span class="fas fa-angle-right"></span></a>
              </li>
            </ul>
            <p class="mt10 pagination_page_count text-center">1 – 20 of 300+ property available</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Footer --> 
   @include('layout.footerafter')
  </div>
</div>
<!-- Wrapper End --> 
@include('layout.footer')