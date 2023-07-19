
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function(){
    $('#filediv').hide();
    
    $('input[type=file]').change(function(e){
      //$in=$(this);
      var $in = e.target.files[0].name;
       $('#selected_file').html($in);
       $('.write_msg').val(''); 
       $('.write_msg').attr('readonly','true'); 
       $('#filediv').show();
    });

    $('#remove').click(function(e){
        $('input[type=file]').val("");
        $('#selected_file').html("");
        $('.write_msg').removeAttr('readonly');                
        $('#filediv').hide();
    });

    $(".type_msg").hide();

    $('#search-bar').keyup(function(){ 
        var query = $(this).val();
        var url = baseurl + "/getmsgUsers";
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url: url,
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
                $('#userList').fadeIn();  
                $('#userList').html(data);
          }
         });
        }
    });

    $(document).on('click', '.search_li', function(){  
        $('#search-bar').val($(this).text());  
        $('#userList').fadeOut();  
        
        $('.chat_list').removeClass("activediv");
        $('.name').removeClass("activename");
        
        $(".mesgs").show();
        event.preventDefault();
        var id = $(this).attr('data-id');
        $("div[data-id="+id+"]").addClass("activediv");
        $("div[data-id="+id+"]").find('h5').addClass("activename");
        $(".msg_send_btn").attr("data-id",id);
        $(".type_msg").show();
        load_msgs(id);
        $('#search-bar').val("");
    });  

    /*$(document).on('click','.chat_list', function(event){
        var id = $(this).attr('data-id');
        $('#msg_send_btn').attr('data-id', id);   
    }); */

    $(document).on('click','.chat_list', function(event){
        $('.chat_list').removeClass("activediv");
        $('.name').removeClass("activename");
        $(".mesgs").show();
        $("#userList").hide();
        $('#search-bar').val('');         
        
        event.preventDefault();
        $(this).addClass("activediv");
        $(this).find('h5').addClass("activename");
        var id = $(this).attr('data-id');
        var type = $(this).attr('data-type');
        var userid = $(this).attr('data-userid');
        $(".msg_send_btn").attr("data-id",id).attr("data-type", type).attr("data-userid", userid);
        $(".type_msg").show();
        $('#dot_'+id).css({'display':'none'});
        
        load_msgs(id, type, userid);            
    });

    //function load_msgs(id,page)
    function load_msgs(id, type, userid)
    {
        //alert(userid);
        $('.write_msg').removeAttr('readonly');                
        $.ajax({
            method: "POST",
            dataType: "json",
            url: baseurl + "/api/customer/get-messages",
           // data: {'id': id,'page':page},
           data: {'id': id,'type': type,'userid': userid},
            success: function(data){
                // console.log(data);
                $('.msg_history').empty();
                $('.msg_history').append(data); 
                $('.msg_history').scrollTop($('.msg_history')[0].scrollHeight);     
            }
        });
    }

    $(document).on('click','.msg_send_btn', function(event){
    // $('#msg-form').submit(function(event) {
        //alert();
        event.preventDefault();
        var text = $(".write_msg").val();
        let trimStr = text.trim();
        var file = $('input[type=file]').val();
        if(trimStr == "" && file == ""){
            bootbox.alert("Please type message or select attachment.");
            return false;
        }     
        else{
            let form_data = new FormData();
            //$('div').find('.active_chat').removeClass("active_chat");
            $('.mask').show();
            if(file != ""){
                var name = document.getElementById("file-input").files[0].name;          
                var ext = name.split('.').pop().toLowerCase();
                form_data.append("file", document.getElementById('file-input').files[0]);
            }
            else{
                form_data.append("file", "");
            }
            
            var id = $(this).attr('data-id');
            var userid = $(this).attr('data-userid');
            var type = $(this).attr('data-type');
                             
            form_data.append("id", id);
            form_data.append("userid", userid);
            form_data.append("type", type);
            form_data.append("text", text);
            // let formData = new FormData(this);
            // console.log(formData);exit;
            //$(this).addClass('active_chat');
                
            $.ajax({

                method: "POST",

                dataType: "json",

                url: baseurl + "/api/customer/send-messages",

                contentType: false,

                cache: false,

                processData: false,

                data: form_data,

                success: function(data){
                    $('.mask').hide();

                    $(".write_msg").val("");
                    $('input[type=file]').val("");
                    $('#selected_file').html("");
                    $('.write_msg').removeAttr('readonly');                
                    $('#filediv').hide();
                    //$('.msg_history').empty();
                    // $('.msg_history').append(data);    
                    load_msgs(id, type, userid);
                }
            });
        }                           
    });
});

