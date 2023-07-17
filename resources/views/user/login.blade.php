<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light" data-bs-theme="light">

<head>

        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Minimal Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('public/admin/assets/images/favicon.ico') }}">

        <!-- Fonts css load -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link id="fontsLink" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

        <!-- Layout config Js -->
        <script src="{{ asset('public/admin/assets/js/layout.js') }}"></script>
        <!-- Bootstrap Css -->
        <link href="{{ asset('public/admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{ asset('public/admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{ asset('public/admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
        <!-- custom Css-->
        <link href="{{ asset('public/admin/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css">

    </head>

    <body>


        <section class="auth-page-wrapper py-5 position-relative d-flex align-items-center justify-content-center min-vh-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="card mb-0">
                            <div class="row g-0 align-items-center">
                                <div class="col-xxl-5">
                                    <div class="card auth-card bg-secondary h-100 border-0 shadow-none d-none d-sm-block mb-0">
                                        <div class="card-body py-5 d-flex justify-content-between flex-column">
                                            <div class="text-center">
                                                <h3 class="text-white">Start your journey with us.</h3>
                                                <p class="text-white opacity-75 fs-base">It brings together your tasks, projects, timelines, files and more</p>
                                            </div>
                            
                                            <div class="auth-effect-main my-5 position-relative rounded-circle d-flex align-items-center justify-content-center mx-auto">
                                                <div class="effect-circle-1 position-relative mx-auto rounded-circle d-flex align-items-center justify-content-center">
                                                    <div class="effect-circle-2 position-relative mx-auto rounded-circle d-flex align-items-center justify-content-center">
                                                        <div class="effect-circle-3 mx-auto rounded-circle position-relative text-white fs-4xl d-flex align-items-center justify-content-center">
                                                            Welcome to <span class="text-primary ms-1">Steex</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="auth-user-list list-unstyled">
                                                    <li>
                                                        <div class="avatar-sm d-inline-block">
                                                            <div class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                                <img src="{{ asset('public/admin/assets/images/users/avatar-1.jpg') }}" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="avatar-sm d-inline-block">
                                                            <div class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                                <img src="{{ asset('public/admin/assets/images/users/avatar-2.jpg') }}" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="avatar-sm d-inline-block">
                                                            <div class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                                <img src="{{ asset('public/admin/assets/images/users/avatar-3.jpg') }}" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="avatar-sm d-inline-block">
                                                            <div class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                                <img src="{{ asset('public/admin/assets/images/users/avatar-4.jpg') }}" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="avatar-sm d-inline-block">
                                                            <div class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                                <img src="{{ asset('public/admin/assets/images/users/avatar-5.jpg') }}" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                            
                                            <div class="text-center">
                                                <p class="text-white opacity-75 mb-0 mt-3">
                                                    &copy; <script>document.write(new Date().getFullYear())</script> Steex. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-xxl-6 mx-auto">
                                    <div class="card mb-0 border-0 shadow-none mb-0">
                                        <div class="card-body p-sm-5 m-lg-4">
                                            <div class="text-center mt-5">
                                                <h5 class="fs-3xl">Welcome Back</h5>
                                                <p class="text-muted">Sign in to continue to Steex.</p>
                                            </div>
                                            <div class="p-2 mt-5">
                                                <form action="{{ url('/user_checklogin')}}" method="post">
                            {{ csrf_field() }}
                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Email <span class="text-danger">*</span></label>
                                                        <div class="position-relative ">
                                                            <input type="email" class="form-control" name="email"  password-input"  placeholder="Enter Email" >
                                                            <input type="hidden" name="role" value="1">
                                                            @if ($errors->has('email'))
                                                                <span class="text-danger" style="width:100%;">{{ $errors->first('email') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                            
                                                    <div class="mb-3">
                                                        <div class="float-end">
                                                            <a href="auth-pass-reset.html" class="text-muted">Forgot password?</a>
                                                        </div>
                                                        <label class="form-label" for="password-input">Password <span class="text-danger">*</span></label>
                                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                                            <input type="password" class="form-control pe-5 password-input " placeholder="Enter password" name="password" >
                                                            @if ($errors->has('password'))
            <span class="text-danger" style="width:100%;">{{ $errors->first('password') }}</span>
        @endif
                                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                        </div>
                                                    </div>
                            
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                        <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                                    </div>
                            
                                                    <div class="mt-4">
                                                        <button class="btn btn-primary w-100" type="submit">Sign In</button>
                                                    </div>
                            
                                                    <div class="mt-4 pt-2 text-center">
                                                        <div class="signin-other-title position-relative">
                                                            <h5 class="fs-sm mb-4 title">Sign In with</h5>
                                                        </div>
                                                        <div class="pt-2 hstack gap-2 justify-content-center">
                                                            <button type="button" class="btn btn-subtle-primary btn-icon"><i class="ri-facebook-fill fs-lg"></i></button>
                                                            <button type="button" class="btn btn-subtle-danger btn-icon"><i class="ri-google-fill fs-lg"></i></button>
                                                            <button type="button" class="btn btn-subtle-dark btn-icon"><i class="ri-github-fill fs-lg"></i></button>
                                                            <button type="button" class="btn btn-subtle-info btn-icon"><i class="ri-twitter-fill fs-lg"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                            
                                                <div class="text-center mt-5">
                                                    <p class="mb-0">Don't have an account ? <a href="auth-signup.html" class="fw-semibold text-secondary text-decoration-underline"> SignUp</a> </p>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        
        <!-- JAVASCRIPT -->
        <script src="{{ asset('public/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('public/admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('public/admin/assets/js/plugins.js') }}"></script>
        

        
        <script src="{{ asset('public/admin/assets/js/pages/password-addon.init.js') }}"></script>
        
        <!--Swiper slider js-->
        <script src="{{ asset('public/admin/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
        
        <!-- swiper.init js -->
        <script src="{{ asset('public/admin/assets/js/pages/swiper.init.js') }}"></script>

    </body>

</html>