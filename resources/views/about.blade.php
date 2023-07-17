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
    <!-- UI Elements Sections -->
    <section class="breadcumb-section2 p-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcumb-style1">
              <h2 class="title">About Us</h2>
              <div class="breadcumb-list">
                <a href="#">Home</a>
                <a href="#">For Rent</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our About Area -->
    <section class="our-about pb90">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-6">
            <h2>We're on a Mission to Change <br class="d-none d-lg-block"> View of Real Estate Field.</h2>
          </div>
          <div class="col-lg-6">
            <p class="text mb25">It doesn’t matter how organized you are — a surplus of toys will always ensure your house is a mess waiting to happen. Fortunately, getting kids on board with the idea of ditching their stuff is a lot easier than it sounds.</p>
            <p class="text mb55">Maecenas quis viverra metus, et efficitur ligula. Nam congue augue et ex congue, sed luctus lectus congue. Integer convallis condimentum sem. Duis elementum tortor eget condimentum tempor. Praesent sollicitudin lectus ut pharetra pulvinar.</p>
            <div class="row">
              <div class="col-sm-6">
                <div class="why-chose-list style3">
                  <div class="list-one mb30">
                    <span class="list-icon flex-shrink-0 flaticon-garden mb20"></span>
                    <div class="list-content flex-grow-1">
                      <h6 class="mb-1">Modern Villa</h6>
                      <p class="text mb-0 fz14">Nullam sollicitudin blandit <br class="d-none d-sm-block"> Nullam maximus.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="why-chose-list style3">
                  <div class="list-one mb30">
                    <span class="list-icon flex-shrink-0 flaticon-secure-payment mb20"></span>
                    <div class="list-content flex-grow-1">
                      <h6 class="mb-1">Secure Payment</h6>
                      <p class="text mb-0 fz14">Nullam sollicitudin blandit <br class="d-none d-sm-block"> Nullam maximus.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Banner -->
    <section class="our-about pt-0">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-12">
            <div class="about-page-img">
              <img class="w-100" src="{{ asset('public/images/about/about-page-banner.jpg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Funfact -->
    <section class="pt-0">
      <div class="container">
        <div class="row justify-content-center wow fadeInUp" data-wow-delay="300ms">
          <div class="col-md-4">
            <div class="funfact_one text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">4</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Awward Winning</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="funfact_one text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">12</div></li>
                  <li><span>K</span></li>
                </ul>
                <p class="text mb-0">Property Ready</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="funfact_one text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">20</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Happy Customer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Agents -->
    <section class="pt-0 pb80 pb50-md">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-9 mx-auto text-center">
            <div class="main-title2">
              <h2 class="title">Our Exclusive Agents</h2>
              <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-auto">
            <div class="feature-style2 mb30">
              <div class="feature-img"><img class="bdrs12" src="{{ asset('public/images/team/agent-1.jpg') }}" alt=""></div>
              <div class="feature-content pt20">
                <h6 class="title mb-1">Arlene McCoy</h6>
                <p class="text fz15">Broker</p>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="feature-style2 mb30">
              <div class="feature-img"><img class="bdrs12" src="{{ asset('public/images/team/agent-2.jpg') }}" alt=""></div>
              <div class="feature-content pt20">
                <h6 class="title mb-1">Esther Howard</h6>
                <p class="text fz15">Broker</p>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="feature-style2 mb30">
              <div class="feature-img"><img class="bdrs12" src="{{ asset('public/images/team/agent-3.jpg') }}" alt=""></div>
              <div class="feature-content pt20">
                <h6 class="title mb-1">Cody Fisher</h6>
                <p class="text fz15">Broker</p>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="feature-style2 mb30">
              <div class="feature-img"><img class="bdrs12" src="{{ asset('public/images/team/agent-4.jpg') }}" alt=""></div>
              <div class="feature-content pt20">
                <h6 class="title mb-1">Bessie Cooper</h6>
                <p class="text fz15">Broker</p>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="feature-style2 mb30">
              <div class="feature-img"><img class="bdrs12" src="{{ asset('public/images/team/agent-5.jpg') }}" alt=""></div>
              <div class="feature-content pt20">
                <h6 class="title mb-1">Guy Hawkins</h6>
                <p class="text fz15">Broker</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Banner -->
    <section class="pt-0">
      <div class="cta-banner3 bgc-thm-light mx-auto maxw1600 pt100 pt60-lg pb90 pb60-lg bdrs24 position-relative overflow-hidden mx20-lg">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-5 pl30-md pl15-xs wow fadeInRight" data-wow-delay="500ms">
              <div class="mb30">
                <h2 class="title text-capitalize">Let’s find the right <br class="d-none d-md-block"> selling option for you</h2>
              </div>
              <div class="why-chose-list style2">
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-security"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h6 class="mb-1">Property Management</h6>
                    <p class="text mb-0 fz15">Nullam sollicitudin blandit eros eu pretium. Nullam maximus ultricies auctor.</p>
                  </div>
                </div>
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-keywording"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h6 class="mb-1">Mortgage Services</h6>
                    <p class="text mb-0 fz15">Nullam sollicitudin blandit eros eu pretium. Nullam maximus ultricies auctor.</p>
                  </div>
                </div>
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-investment"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h6 class="mb-1">Currency Services</h6>
                    <p class="text mb-0 fz15">Nullam sollicitudin blandit eros eu pretium. Nullam maximus ultricies auctor.</p>
                  </div>
                </div>
              </div>
              <a href="page-property-single-v1.html" class="ud-btn btn-dark">Learn More<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Partners --> 
    <section class="our-partners p-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="100ms">
            <div class="main-title text-center">
              <h6>Trusted by the world’s best</h6>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="dots_none nav_none slider-dib-sm slider-6-grid owl-carousel owl-theme wow fadeInUp" data-wow-delay="300ms">
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="{{ asset('public/images/partners/1.png') }}" alt="1.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="{{ asset('public/images/partners/2.png') }}" alt="2.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="{{ asset('public/images/partners/3.png') }}" alt="3.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="{{ asset('public/images/partners/4.png') }}" alt="4.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="{{ asset('public/images/partners/5.png') }}" alt="5.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="{{ asset('public/images/partners/6.png') }}" alt="6.png"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our CTA --> 
    <section class="our-cta">
      <div class="cta-banner bgc-f7 mx-auto maxw1600 pt120 pb120 pt60-md pb60-md bdrs12 position-relative mx20-lg">
        <div class="img-box-5">
          <img class="img-1 spin-right" src="{{ asset('public/images/about/element-1.png') }}" alt="">
        </div>
        <div class="img-box-6">
          <img class="img-1 spin-left" src="{{ asset('public/images/about/element-1.png') }}" alt="">
        </div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 col-xl-6 wow fadeInLeft">
              <div class="cta-style1">
                <h2 class="cta-title">Need help? Talk to our expert.</h2>
                <p class="cta-text mb-0">Talk to our experts or Browse through more properties.</p>
              </div>
            </div>
            <div class="col-lg-5 col-xl-6 wow fadeInRight" data-wow-delay="300ms">
              <div class="cta-btns-style1 d-block d-sm-flex align-items-center justify-content-lg-end">
                <a href="page-contact.html" class="ud-btn btn-transparent mr30 mr0-xs">Contact Us<i class="fal fa-arrow-right-long"></i></a>
                <a href="page-contact.html" class="ud-btn btn-dark"><span class="flaticon-call vam pe-2"></span>920 851 9087</a>
              </div>
            </div>
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