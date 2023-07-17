@extends('admin.layout.webmaster')
@section('title', 'Edit Gallery')

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
                                    <h4 class="mb-sm-0">Edit Gallery</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Edit Gallery</li>
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
                                        <h4 class="card-title mb-0">Edit Gallery</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                       
                                    
                                        <form method="post" action="{{ url('/update_gallery')}}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="row">
                                               
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="phonenumberInput" class="form-label">Image</label>
                                                        <input type="file" class="form-control" name="image" id="profile_img">
                                                        <input type="hidden" name="id" id="id" value="<?= @$view_gallery[0]->id ?>">
                                                        <input type="hidden" name="oldimage" value="<?=@$view_gallery[0]->image?>">
                                                    </div>
                                                    <div class="upload-image">
                                @if(@$view_gallery[0]->image !='')                                
                                    <div class="upload-image">
                                    <img id="imgPreview" name="imgPreview" class="img-fluid" src="{{ url('public/admin/assets/storeImages/gallery/' . @$view_gallery[0]->image) }}" value="{{@$view_gallery[0]->image}}" style="width:150px;height:150px;">
                                    </div> 
                                @endif  
                                </div>
                                                </div>
                                                <!--end col-->
                                                
                                                
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="ForminputState" class="form-label">Status</label>
                                                        <select class="form-control" name="status">
                                                            <option {{(@$view_gallery[0]->status == '1'?'selected':'')}} value="1">Active</option>
                                                            <option {{(@$view_gallery[0]->status == '0'?'selected':'')}} value="0">Inactive</option>
                                                        </select>
                                                        @if ($errors->has('status'))
                                <span class="text-danger" style="width:100%;">{{ $errors->first('status') }}</span>
                            @endif 
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

      

      