@extends('admin.layout.webmaster')
@section('title', 'table')

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
                                <h4 class="mb-sm-0">Datatables</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Datatables</li>
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
                                                <button class="btn btn-subtle-danger d-none" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                                <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addAgent"><i class="bi bi-person-plus align-baseline me-1"></i> Add Agent</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    
                                        <table class="table table-bordered dt-responsive table-striped align-middle datatable-custom" style="width:100%">
                                            <thead class="text-muted table-light">
                                                <tr>   
                                                    <th>SR No.</th>
                                                    <th>ID</th>
                                                    <th>Purchase ID</th>
                                                    <th>Title</th>
                                                    <th>User</th>
                                                    <th>Assigned To</th>
                                                    <th>Created By</th>
                                                   
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>SR No.</td>
                                                    <td>ID</td>
                                                    <td>Purchase ID</td>
                                                    <td>Title</td>
                                                    <td>User</td>
                                                    <td>Assigned To</td>
                                                    <td>Created By</td>
                                                   
                                                    <td>Action</td>
                                                </tr>
                                                <tr>
                                                    <td>SR No.</td>
                                                    <td>ID</td>
                                                    <td>Purchase ID</td>
                                                    <td>Title</td>
                                                    <td>User</td>
                                                    <td>Assigned To</td>
                                                    <td>Created By</td>
                                                   
                                                    <td>Action</td>
                                                </tr>
                                            </tbody>
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