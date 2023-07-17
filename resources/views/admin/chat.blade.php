@extends('admin.layout.chatmaster')
@section('title', 'dasboard')

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
                                    <h4 class="mb-sm-0">Form Layout</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Layout</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                       <section class="content">
    <div class="container">
 <div class="mask"></div>
<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>{{__('Recent')}}</h4>
            </div>
            
          </div>
          <div class="inbox_chat">
            @foreach($chat_list as $chat)
                <div class="chat_list active_chat" data-id = {{$chat['id']}} data-type = {{$chat['type']}} >
                <div class="chat_people">
                  <div class="chat_ib">  
                  
                   <h5 class="name">{{$chat['name'] }}<span class="dot" id="dot_{{$chat['id']}}"></span> <span class="chat_date"> </span></h5>
                        
                      <?php //echo $session_id = Session::get('id'); ?>
                    
                    <p></p>
                  </div>
                </div>
              </div>                  
            @endforeach 
          </div>
        </div>
        <div class="mesgs">
          <div class="container msg_history">
            <div class="row g-3 justify-content-center align-items-center text-center mt-5">
              <div>
                <h3>  {{__('Welcome to')}} <strong> Project Name </strong></h3>
                <h4>  {{__('Chat with us')}} </h4>
              </div>
              <!--<div class="col-md-6">-->
              <!--  <img src="../public/web/assets/img/chat.png" alt="chat" class="img-fluid opacity-25">-->
              <!--</div>-->
            </div>
             @csrf
          </div>
          <div class="type_msg bg-white">
            <div class="input_msg_write">
              <!-- <input type="text" class="write_msg" placeholder="Type a message" /> -->
              <!-- <form method="post" style="width: 100%;" id="msg-form" enctype="multipart/form-data"> -->
                <textarea class="write_msg" placeholder="{{__('Type a message')}}" ></textarea>
                <input type="hidden" value="1" class="get-id">
                      <div class="image-upload" style="display: inline-block;">
                    <label for="file-input">
                      <i class="mdi mdi-paperclip" aria-hidden="true"></i>
                    </label>
                    <input id="file-input" name="file" type="file"/>
                  </div>
                
                      <button class="msg_send_btn" id="msg_send_btn" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
              <!-- </form>  -->
            </div>
          </div>
          
        </div>
      </div>
      
    </div>
  </div>
      <!-- /.container-fluid -->
    </section>
                        <!--end row-->

                    </div>
                     <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


            </div>
            <!-- end main content-->

      

      