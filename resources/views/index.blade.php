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
         <!-- Main Header Nav -->
        @include('layout.head-nav')
  
         <div class="body_content">
            <!-- Home Banner Style V1 -->
            <div class="banner-wrapper position-relative">
               <section class="thumbimg-countnumber-carousel owl-theme owl-carousel p-0">
                  <div class="item" >
                     <div class="slider-slide-item" style="background-image: url({{ asset('public/images/home/image1.jpg') }});">
                        <div class="container">
                           <div class="row">
                              <div class="col-lg-12 text-left">
                                 <h4 class="h1 slider-subtitle text-white">$986,00</h4>
                                 <h3 class="h6 slider-title text-white">Studio on Grand Avenue</h3>
                                 <p class="mb30 slider-text text-white">32 Beds  -  91 Baths  -  1500 sq ft</p>
                                 <div class="slider-btn-block"><a href="#" class="ud-btn btn-white slider-btn">Site Visit <i class="fal fa-arrow-right-long"></i></a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item" >
                     <div class="slider-slide-item" style="background-image: url({{ asset('public/images/home/home-5-4.jpg') }});">
                        <div class="container">
                           <div class="row">
                              <div class="col-lg-12 text-left">
                                 <h4 class="h1 slider-subtitle text-white">$986,00</h4>
                                 <h3 class="h6 slider-title text-white">Studio on Grand Avenue</h3>
                                 <p class="mb30 slider-text text-white">32 Beds  -  91 Baths  -  1500 sq ft</p>
                                 <div class="slider-btn-block"><a href="#" class="ud-btn btn-white slider-btn">Site Visit <i class="fal fa-arrow-right-long"></i></a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <div class="carousel-control-block d-flex d-md-none">
                  <div class="carousel-btn-block slider-navigation-btn"> <span class="carousel-btn left-btn"><i class="fa fa-angle-up"></i></span> <span class="carousel-btn right-btn"><i class="fa fa-angle-down"></i></span> </div>
                  <div class="slider-number-count"></div>
               </div>
            </div>
           
            <section class="">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 col-md-6">
                        <div class="about-image">
                           <div class="row justify-content-center">
                              <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                                 <div class="image">
                                    <img src="images/about-1.jpg" class="img-fluid" alt="image" style="border-radius: 10px;margin-bottom: 25px;">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                                 <div class="image">
                                    <img src="images/about-2.jpg" class="img-fluid" alt="image" style="border-radius: 10px;margin-bottom: 25px;">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                                 <div class="image">
                                    <img src="images/about-3.jpg" class="img-fluid" alt="image" style="border-radius: 10px;">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-sm-6 col-md-6 col-6">
                                 <div class="image">
                                    <img src="images/about-4.jpg" class="img-fluid" alt="image" style="border-radius: 10px;">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="about-content" style="margin-left: 30px;margin-right: 30px;">
                           <h1>Who We Are</h1>
                           <p style="font-size: 15px;text-align: justify;">
                              Welcome to our Plot Sale in Nagpur! We offer an exclusive opportunity to own your dream plot in one of Nagpur's prime locations. Located amidst lush greenery and serene surroundings, our plots are ideal for residential or investment purposes. With various plot sizes available, you can choose the perfect space to build your dream home or develop a lucrative project.
                           </p>
                           <p style="font-size: 15px;text-align: justify;">
                              Our plots are strategically situated in well-developed areas with easy access to schools, hospitals, shopping centers, and other essential amenities. We prioritize customer satisfaction and ensure that all necessary legal documentation is in place for a hassle-free transaction.
                           </p>
                           <p style="font-size: 15px;text-align: justify;">
                              Don't miss this chance to secure your future! Contact us now and explore the possibilities that await you in Nagpur. Invest in a plot and make your dreams come true!
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Popular Property -->
            <section class="bgc-thm-light pb90 pb40-md">
               <div class="container">
                  <div class="row wow fadeInUp" data-wow-delay="00ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp;">
                     <div class="col-lg-9">
                        <div class="main-title2">
                           <h2 class="title text-black">Discover Our Best Deals</h2>
                           <p class="paragraph text-black">Aliquam lacinia diam quis lacus euismod</p>
                        </div>
                     </div>
                     
                  </div>
                  <div class="row">
                     <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="tab-content" id="pills-tabContent">
                           <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="dots_none nav_none slider-dib-sm slider-4-grid3 vam_nav_style owl-theme owl-carousel owl-loaded owl-drag">
                                       <div class="owl-stage-outer">
                                          <div class="owl-stage" style="transform: translate3d(-1146px, 0px, 0px); transition: all 0s ease 0s; width: 3438px;">
                                             <div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-1.jpg" alt="">
                                                         <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Equestrian Family Home</a></h6>
                                                         <div class="list-price">$84,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-2.jpg" alt="">
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Luxury villa in Rego Park</a></h6>
                                                         <div class="list-price">$12,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-3.jpg" alt="">
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Villa on Hollywood Boulevard</a></h6>
                                                         <div class="list-price">$19,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-4.jpg" alt="">
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Villa on Hollywood Boulevard</a></h6>
                                                         <div class="list-price">$17,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item active" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-1.jpg" alt="">
                                                         <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Equestrian Family Home</a></h6>
                                                         <div class="list-price">$84,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item active" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-2.jpg" alt="">
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Luxury villa in Rego Park</a></h6>
                                                         <div class="list-price">$12,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item active" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-3.jpg" alt="">
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Villa on Hollywood Boulevard</a></h6>
                                                         <div class="list-price">$19,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item active" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-4.jpg" alt="">
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Villa on Hollywood Boulevard</a></h6>
                                                         <div class="list-price">$17,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-1.jpg" alt="">
                                                         <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Equestrian Family Home</a></h6>
                                                         <div class="list-price">$84,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-2.jpg" alt="">
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Luxury villa in Rego Park</a></h6>
                                                         <div class="list-price">$12,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-3.jpg" alt="">
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Villa on Hollywood Boulevard</a></h6>
                                                         <div class="list-price">$19,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-4.jpg" alt="">
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Villa on Hollywood Boulevard</a></h6>
                                                         <div class="list-price">$17,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="far fa-arrow-left-long"></i></button><button type="button" role="presentation" class="owl-next"><i class="far fa-arrow-right-long"></i></button></div>
                                       <div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="dots_none nav_none slider-dib-sm slider-4-grid3 vam_nav_style owl-theme owl-carousel owl-loaded owl-drag">
                                       <div class="owl-stage-outer">
                                          <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                                             <div class="owl-item">
                                                <div class="item">
                                                   <div class="listing-style1">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-1.jpg" alt="">
                                                         <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                                                         <div class="list-price">$84,000 / <span>mo</span></div>
                                                      </div>
                                                      <div class="list-content pb-2">
                                                         <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h6>
                                                         <p class="list-text">California City, CA, USA</p>
                                                         <div class="list-meta d-flex align-items-center">
                                                            <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                            <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                            <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                                             <div class="owl-item">
                                                <div class="item">
                                                   <div class="listing-style1">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-2.jpg" alt="">
                                                         <div class="list-price">$12,000 / <span>mo</span></div>
                                                      </div>
                                                      <div class="list-content pb-2">
                                                         <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in Rego Park</a></h6>
                                                         <p class="list-text">California City, CA, USA</p>
                                                         <div class="list-meta d-flex align-items-center">
                                                            <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                            <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                            <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                                             <div class="owl-item">
                                                <div class="item">
                                                   <div class="listing-style1">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-3.jpg" alt="">
                                                         <div class="list-price">$19,000 / <span>mo</span></div>
                                                      </div>
                                                      <div class="list-content pb-2">
                                                         <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                                                         <p class="list-text">California City, CA, USA</p>
                                                         <div class="list-meta d-flex align-items-center">
                                                            <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                            <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                            <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                                             <div class="owl-item">
                                                <div class="item">
                                                   <div class="listing-style1">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-4.jpg" alt="">
                                                         <div class="list-price">$17,000 / <span>mo</span></div>
                                                      </div>
                                                      <div class="list-content pb-2">
                                                         <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                                                         <p class="list-text">California City, CA, USA</p>
                                                         <div class="list-meta d-flex align-items-center">
                                                            <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                            <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                            <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                                          </div>
                                       </div>
                                       <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="far fa-arrow-left-long"></i></button><button type="button" role="presentation" class="owl-next"><i class="far fa-arrow-right-long"></i></button></div>
                                       <div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="tab-content" id="pills-tabContent">
                           <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="dots_none nav_none slider-dib-sm slider-4-grid3 vam_nav_style owl-theme owl-carousel owl-loaded owl-drag">
                                       <div class="owl-stage-outer">
                                          <div class="owl-stage" style="transform: translate3d(-1146px, 0px, 0px); transition: all 0s ease 0s; width: 3438px;">
                                             <div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-1.jpg" alt="">
                                                         <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Equestrian Family Home</a></h6>
                                                         <div class="list-price">$84,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-2.jpg" alt="">
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Luxury villa in Rego Park</a></h6>
                                                         <div class="list-price">$12,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-3.jpg" alt="">
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Villa on Hollywood Boulevard</a></h6>
                                                         <div class="list-price">$19,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-4.jpg" alt="">
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Villa on Hollywood Boulevard</a></h6>
                                                         <div class="list-price">$17,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item active" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-1.jpg" alt="">
                                                         <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Equestrian Family Home</a></h6>
                                                         <div class="list-price">$84,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item active" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-2.jpg" alt="">
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Luxury villa in Rego Park</a></h6>
                                                         <div class="list-price">$12,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item active" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-3.jpg" alt="">
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Villa on Hollywood Boulevard</a></h6>
                                                         <div class="list-price">$19,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item active" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-4.jpg" alt="">
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Villa on Hollywood Boulevard</a></h6>
                                                         <div class="list-price">$17,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-1.jpg" alt="">
                                                         <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Equestrian Family Home</a></h6>
                                                         <div class="list-price">$84,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-2.jpg" alt="">
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Luxury villa in Rego Park</a></h6>
                                                         <div class="list-price">$12,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-3.jpg" alt="">
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Villa on Hollywood Boulevard</a></h6>
                                                         <div class="list-price">$19,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="owl-item cloned" style="width: 256.5px; margin-right: 30px;">
                                                <div class="item">
                                                   <div class="listing-style7">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-4.jpg" alt="">
                                                      </div>
                                                      <div class="list-content">
                                                         <div class="list-meta2 d-flex align-items-center">
                                                            <a class="mr10" href="#"><span class="flaticon-bed mr5"></span>3</a>
                                                            <a class="mr10" href="#"><span class="flaticon-shower mr5"></span>4</a>
                                                            <a href="#"><span class="flaticon-expand mr5"></span>1200</a>
                                                         </div>
                                                         <h6 class="list-title text-decoration-underline mb5"><a href="#">Villa on Hollywood Boulevard</a></h6>
                                                         <div class="list-price">$17,000 / <span>mo</span> </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="far fa-arrow-left-long"></i></button><button type="button" role="presentation" class="owl-next"><i class="far fa-arrow-right-long"></i></button></div>
                                       <div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="dots_none nav_none slider-dib-sm slider-4-grid3 vam_nav_style owl-theme owl-carousel owl-loaded owl-drag">
                                       <div class="owl-stage-outer">
                                          <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                                             <div class="owl-item">
                                                <div class="item">
                                                   <div class="listing-style1">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-1.jpg" alt="">
                                                         <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                                                         <div class="list-price">$84,000 / <span>mo</span></div>
                                                      </div>
                                                      <div class="list-content pb-2">
                                                         <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h6>
                                                         <p class="list-text">California City, CA, USA</p>
                                                         <div class="list-meta d-flex align-items-center">
                                                            <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                            <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                            <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                                             <div class="owl-item">
                                                <div class="item">
                                                   <div class="listing-style1">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-2.jpg" alt="">
                                                         <div class="list-price">$12,000 / <span>mo</span></div>
                                                      </div>
                                                      <div class="list-content pb-2">
                                                         <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in Rego Park</a></h6>
                                                         <p class="list-text">California City, CA, USA</p>
                                                         <div class="list-meta d-flex align-items-center">
                                                            <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                            <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                            <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                                             <div class="owl-item">
                                                <div class="item">
                                                   <div class="listing-style1">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-3.jpg" alt="">
                                                         <div class="list-price">$19,000 / <span>mo</span></div>
                                                      </div>
                                                      <div class="list-content pb-2">
                                                         <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                                                         <p class="list-text">California City, CA, USA</p>
                                                         <div class="list-meta d-flex align-items-center">
                                                            <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                            <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                            <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                                             <div class="owl-item">
                                                <div class="item">
                                                   <div class="listing-style1">
                                                      <div class="list-thumb">
                                                         <img class="w-100" src="images/listings/g1-4.jpg" alt="">
                                                         <div class="list-price">$17,000 / <span>mo</span></div>
                                                      </div>
                                                      <div class="list-content pb-2">
                                                         <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                                                         <p class="list-text">California City, CA, USA</p>
                                                         <div class="list-meta d-flex align-items-center">
                                                            <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                                                            <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                                                            <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
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
                                          </div>
                                       </div>
                                       <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="far fa-arrow-left-long"></i></button><button type="button" role="presentation" class="owl-next"><i class="far fa-arrow-right-long"></i></button></div>
                                       <div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Explore Apartment -->
            <section class="pb90 pb30-md">
               <div class="container">
                  <div class="row wow fadeInUp" data-wow-delay="300ms">
                     <div class="col-lg-6 mx-auto">
                        <div class="main-title2 text-center">
                           <h2 class="title">Plots For Sale In</h2>
                           <p class="paragraph">Get some Inspirations from 1800+ skills</p>
                        </div>
                     </div>
                  </div>
                  <div class="row wow fadeInUp" data-wow-delay="300ms">
                     <div class="col-lg-6">
                        <div class="feature-style1 mb30">
                           <div class="feature-img"><img class="w-100" src="images/listings/city-listing-5.png" alt=""></div>
                           <div class="feature-content">
                              <div class="top-area">
                                 <h6 class="title mb-1">Los Angeles</h6>
                                 <p class="text">12 Properties</p>
                              </div>
                              <div class="bottom-area">
                                 <a class="ud-btn2" href="page-property-single-v1.html">See All Cities<i class="fal fa-arrow-right-long"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-6 col-lg-3">
                        <div class="feature-style1 mb30">
                           <div class="feature-img"><img class="w-100" src="images/listings/city-listing-6.png" alt=""></div>
                           <div class="feature-content">
                              <div class="top-area">
                                 <h6 class="title mb-1">Miami</h6>
                                 <p class="text">12 Properties</p>
                              </div>
                              <div class="bottom-area">
                                 <a class="ud-btn2" href="page-property-single-v1.html">See All Cities<i class="fal fa-arrow-right-long"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-6 col-lg-3">
                        <div class="feature-style1 mb30">
                           <div class="feature-img"><img class="w-100" src="images/listings/city-listing-7.png" alt=""></div>
                           <div class="feature-content">
                              <div class="top-area">
                                 <h6 class="title mb-1">New York</h6>
                                 <p class="text">12 Properties</p>
                              </div>
                              <div class="bottom-area">
                                 <a class="ud-btn2" href="page-property-single-v1.html">See All Cities<i class="fal fa-arrow-right-long"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-6 col-lg-3">
                        <div class="feature-style1 mb30">
                           <div class="feature-img"><img class="w-100" src="images/listings/city-listing-8.png" alt=""></div>
                           <div class="feature-content">
                              <div class="top-area">
                                 <h6 class="title mb-1">Chicago</h6>
                                 <p class="text">12 Properties</p>
                              </div>
                              <div class="bottom-area">
                                 <a class="ud-btn2" href="page-property-single-v1.html">See All Cities<i class="fal fa-arrow-right-long"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-6 col-lg-3">
                        <div class="feature-style1 mb30">
                           <div class="feature-img"><img class="w-100" src="images/listings/city-listing-9.png" alt=""></div>
                           <div class="feature-content">
                              <div class="top-area">
                                 <h6 class="title mb-1">Chicago</h6>
                                 <p class="text">12 Properties</p>
                              </div>
                              <div class="bottom-area">
                                 <a class="ud-btn2" href="page-property-single-v1.html">See All Cities<i class="fal fa-arrow-right-long"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="feature-style1 mb30">
                           <div class="feature-img"><img class="w-100" src="images/listings/city-listing-10.png" alt=""></div>
                           <div class="feature-content">
                              <div class="top-area">
                                 <h6 class="title mb-1">Chicago</h6>
                                 <p class="text">12 Properties</p>
                              </div>
                              <div class="bottom-area">
                                 <a class="ud-btn2" href="page-property-single-v1.html">See All Cities<i class="fal fa-arrow-right-long"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Explore Apartment -->
            <section class="pb50-md bgc-thm-light">
               <div class="container maxw1600">
                  <div class="row">
                     <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="00ms">
                        <div class="main-title text-center">
                           <h2 class="title">People Love Living with Realton</h2>
                           <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="navi_pagi_bottom_center slider-dib-sm slider-3-grid owl-carousel owl-theme wow fadeInUp" data-wow-delay="300ms">
                           <div class="item">
                              <div class="testimonial-style3 mt-1 mx-1 position-relative mb60">
                                 <div class="testimonial-content">
                                    <span class="icon">“</span>
                                    <div class="thumb d-flex align-items-center mb40">
                                       <div class="flex-shrink-0">
                                          <img class="wa" src="images/testimonials/testimonial-4.png" alt="">
                                       </div>
                                       <div class="flex-grow-1 ml20">
                                          <h6 class="mb-0 fz14">Theresa Webb</h6>
                                          <p class="mb-0 fz13 body-light-color">Marketing Coordinator</p>
                                       </div>
                                    </div>
                                    <p class="text mb-0">The template is really nice and offers quite a large set of options. It’s beautiful and the coding is done quickly and seamlessly. Thank you!</p>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="testimonial-style3 mt-1 mx-1 position-relative mb60">
                                 <div class="testimonial-content">
                                    <span class="icon">“</span>
                                    <div class="thumb d-flex align-items-center mb40">
                                       <div class="flex-shrink-0">
                                          <img class="wa" src="images/testimonials/testimonial-5.png" alt="">
                                       </div>
                                       <div class="flex-grow-1 ml20">
                                          <h6 class="mb-0 fz14">Cameron Williamson</h6>
                                          <p class="mb-0 fz13 body-light-color">Web Designer</p>
                                       </div>
                                    </div>
                                    <p class="text mb-0">The template is really nice and offers quite a large set of options. It’s beautiful and the coding is done quickly and seamlessly. Thank you!</p>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="testimonial-style3 mt-1 mx-1 position-relative mb60">
                                 <div class="testimonial-content">
                                    <span class="icon">“</span>
                                    <div class="thumb d-flex align-items-center mb40">
                                       <div class="flex-shrink-0">
                                          <img class="wa" src="images/testimonials/testimonial-6.png" alt="">
                                       </div>
                                       <div class="flex-grow-1 ml20">
                                          <h6 class="mb-0 fz14">Marvin McKinney</h6>
                                          <p class="mb-0 fz13 body-light-color">Nursing Assistant</p>
                                       </div>
                                    </div>
                                    <p class="text mb-0">The template is really nice and offers quite a large set of options. It’s beautiful and the coding is done quickly and seamlessly. Thank you!</p>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="testimonial-style3 mt-1 mx-1 position-relative mb60">
                                 <div class="testimonial-content">
                                    <span class="icon">“</span>
                                    <div class="thumb d-flex align-items-center mb40">
                                       <div class="flex-shrink-0">
                                          <img class="wa" src="images/testimonials/testimonial-1.png" alt="">
                                       </div>
                                       <div class="flex-grow-1 ml20">
                                          <h6 class="mb-0 fz14">Theresa Webb</h6>
                                          <p class="mb-0 fz13 body-light-color">Marketing Coordinator</p>
                                       </div>
                                    </div>
                                    <p class="text mb-0">The template is really nice and offers quite a large set of options. It’s beautiful and the coding is done quickly and seamlessly. Thank you!</p>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="testimonial-style3 mt-1 mx-1 position-relative mb60">
                                 <div class="testimonial-content">
                                    <span class="icon">“</span>
                                    <div class="thumb d-flex align-items-center mb40">
                                       <div class="flex-shrink-0">
                                          <img class="wa" src="images/testimonials/testimonial-2.png" alt="">
                                       </div>
                                       <div class="flex-grow-1 ml20">
                                          <h6 class="mb-0 fz14">Cameron Williamson</h6>
                                          <p class="mb-0 fz13 body-light-color">Web Designer</p>
                                       </div>
                                    </div>
                                    <p class="text mb-0">The template is really nice and offers quite a large set of options. It’s beautiful and the coding is done quickly and seamlessly. Thank you!</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Popular Property -->
            <!-- Explore Apartment -->
            <section class="pb90 pb30-md">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="00ms">
                        <div class="main-title text-start text-md-center">
                           <h2 class="title">From Our Blog</h2>
                           <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
                        </div>
                     </div>
                  </div>
                  <div class="row wow fadeInUp" data-wow-delay="300ms">
                     <div class="col-sm-6 col-xl-4">
                        <div class="blog-style1">
                           <div class="blog-img"><img class="w-100" src="images/blog/blog-1.jpg" alt=""></div>
                           <div class="blog-content">
                              <div class="date">
                                 <span class="month">July</span>
                                 <span class="day">28</span>
                              </div>
                              <a class="tag" href="#">Living Room</a>
                              <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-xl-4">
                        <div class="blog-style1">
                           <div class="blog-img"><img class="w-100" src="images/blog/blog-2.jpg" alt=""></div>
                           <div class="blog-content">
                              <div class="date">
                                 <span class="month">July</span>
                                 <span class="day">28</span>
                              </div>
                              <a class="tag" href="#">Living Room</a>
                              <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-xl-4">
                        <div class="blog-style1 d-block d-sm-flex align-items-center">
                           <div class="blog-img flex-shrink-0"><img class="w-100" src="images/blog/blog-s-1.jpg" alt=""></div>
                           <div class="blog-content flex-grow-1 ms-3 pe-0 pt-0 pt15-xs">
                              <a class="tag" href="#">Living Room</a>
                              <h6 class="title fz14 mt-1 mb5"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                              <a class="tag" href="#">June 15, 2022</a>
                           </div>
                        </div>
                        <div class="blog-style1 d-block d-sm-flex align-items-center">
                           <div class="blog-img flex-shrink-0"><img class="w-100" src="images/blog/blog-s-2.jpg" alt=""></div>
                           <div class="blog-content flex-grow-1 ms-3 pe-0 pt-0 pt15-xs">
                              <a class="tag" href="#">Living Room</a>
                              <h6 class="title fz14 mt-1 mb5"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                              <a class="tag" href="#">June 15, 2022</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Our Partners --> 
            <section class="our-partners pt0">
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
                              <div class="partner_item"><img class="wa m-auto" src="{{ asset('public/images/partners/4.png' ) }}" alt="4.png"></div>
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
            <!-- Our Footer --> 
    @include('layout.footerafter')
  </div>
</div>
<!-- Wrapper End --> 
@include('layout.footer')