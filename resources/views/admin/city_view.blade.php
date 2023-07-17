@extends('admin.layout.webmaster')
@section('title', 'City')

  <!-- Content Wrapper. Contains page content -->
  @section('content')

        

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
       

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">City</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">City</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center gy-3">
                                        <div class="col-lg-3 col-md-6 order-last order-md-first me-auto">
                                            <!-- <div class="search-box">
                                                <input type="text" class="form-control search" placeholder="Search for agent, email, address or something...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div> -->
                                        </div>
                                        <div class="col-md-auto col-6 text-end">
                                            <div class="d-flex flex-wrap align-items-start gap-2">
                                                
                                               <a href="{{ url('/city')}}"> <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addAgent"><i class="bi bi-person-plus align-baseline me-1"></i> Add City</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    @if (session('status'))
                                      <div class="alert alert-success" role="alert">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                          {{ session('status') }}
                                      </div>
                                    @elseif(session('failed'))
                                      <div class="alert alert-danger" role="alert">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                          {{ session('failed') }}
                                      </div>
                                    @endif
                                        <table class="table table-bordered dt-responsive table-striped align-middle" id="city_list">
                                            <thead>
                                                <tr>   
                                                    <th>SR No.</th>
                                                    <th>Name</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

               
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

          
        
        <!-- end main content-->

    
@endsection