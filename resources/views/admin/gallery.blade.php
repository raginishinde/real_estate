@extends('admin.layout.webmaster')
@section('title', 'Create Gallery')

  <!-- Content Wrapper. Contains page content -->
  @section('content')
            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Create Gallery</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Create Gallery</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xxl-2"></div>
                            <div class="col-xxl-7">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Create Gallery</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                       
                                    
                                        <form method="post" action="{{ url('/create_gallery')}}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="phonenumberInput" class="form-label">Image</label>
                                                        <input type="file" class="form-control" name="image">
                                                    </div>
                                                     @if ($errors->has('image'))
                                                                <span class="text-danger" style="width:100%;">{{ $errors->first('image') }}</span>
                                                            @endif
                                                </div>
                                                <!--end col-->
                                               
                                                
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="ForminputState" class="form-label">Status</label>
                                                        <select name="status" class="form-select" data-choices data-choices-sorting="true">
                                                            <option value="1">Active</option>
                                                            <option value="0">InActive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div>
                                    
                                    
                                </div>
                            </div> <!-- end col -->

                           
                        </div>
                        <!--end row-->

                    </div>
                     <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


            </div>
            <!-- end main content-->

      

      