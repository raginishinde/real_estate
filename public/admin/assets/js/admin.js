$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function() {
    $("#profile_img").change(function() {
        const file = this.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function(event) {
                $("#imgPreview")
                    .attr("src", event.target.result);
            };
            reader.readAsDataURL(file);
        }
    });
});
$(document).ready(function() {
    var table = $('#testimonial_list').dataTable({
        processing: true,
        serverSide: true,
        url: baseurl + '/testimonial_view',
        //  url: baseurl + "/userlogin",
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            { data: 'fname', name: 'fname' },
            { data: 'lname', name: 'lname' },
            { data: 'image', name: 'image' },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ]
    });
});

$(document).on('click', '.cust_delete', function() {
    var id = $(this).attr('data-id');
    // alert(id);
    bootbox.confirm({
        message: "Do you want to delete this users?",
        buttons: {
            confirm: {
                label: 'Ok',
                className: 'btn btn-info'
            },
            cancel: {
                label: 'Cancel',
                className: 'btn-secondary'
            }
        },
        callback: function(result) {
            if (result) {
                $.ajax({
                    type: 'get',
                    url: baseurl + '/delete_testimonial/'+id,
                    data: {
                        id: id,
                        _token: $('meta[name="csrf-token"]').attr('content'),
                    },
                    dataType: 'json',
                    success: function(data) {
                        window.location.reload();
                    },
                });
            }
        }
    });
});
$(document).ready(function() {
    var table = $('#gallery_list').dataTable({
        processing: true,
        serverSide: true,
        url: baseurl + '/gallery_view',
        //  url: baseurl + "/userlogin",
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            { data: 'image', name: 'image' },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ]
    });
});

$(document).on('click', '.gallery_delete', function() {
    var id = $(this).attr('data-id');
    // alert(id);
    bootbox.confirm({
        message: "Do you want to delete this Gallery Image?",
        buttons: {
            confirm: {
                label: 'Ok',
                className: 'btn btn-info'
            },
            cancel: {
                label: 'Cancel',
                className: 'btn-secondary'
            }
        },
        callback: function(result) {
            if (result) {
                $.ajax({
                    type: 'get',
                    url: baseurl + '/delete_gallery/'+id,
                    data: {
                        id: id,
                        _token: $('meta[name="csrf-token"]').attr('content'),
                    },
                    dataType: 'json',
                    success: function(data) {
                        window.location.reload();
                    },
                });
            }
        }
    });
});

$(document).ready(function() {
    var table = $('#slider_list').dataTable({
        processing: true,
        serverSide: true,
        url: baseurl + '/slider_view',
        //  url: baseurl + "/userlogin",
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            { data: 'image', name: 'image' },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ]
    });
});

$(document).on('click', '.slider_delete', function() {
    var id = $(this).attr('data-id');
    // alert(id);
    bootbox.confirm({
        message: "Do you want to delete this Slider Image?",
        buttons: {
            confirm: {
                label: 'Ok',
                className: 'btn btn-info'
            },
            cancel: {
                label: 'Cancel',
                className: 'btn-secondary'
            }
        },
        callback: function(result) {
            if (result) {
                $.ajax({
                    type: 'get',
                    url: baseurl + '/delete_slider/'+id,
                    data: {
                        id: id,
                        _token: $('meta[name="csrf-token"]').attr('content'),
                    },
                    dataType: 'json',
                    success: function(data) {
                        window.location.reload();
                    },
                });
            }
        }
    });
});
$(document).ready(function() {
    var table = $('#city_list').dataTable({
        processing: true,
        serverSide: true,
        url: baseurl + '/city_view',
        //  url: baseurl + "/userlogin",
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            { data: 'name', name: 'name' },
            { data: 'image', name: 'image' },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ]
    });
});

$(document).on('click', '.city_delete', function() {
    var id = $(this).attr('data-id');
    // alert(id);
    bootbox.confirm({
        message: "Do you want to delete this City?",
        buttons: {
            confirm: {
                label: 'Ok',
                className: 'btn btn-info'
            },
            cancel: {
                label: 'Cancel',
                className: 'btn-secondary'
            }
        },
        callback: function(result) {
            if (result) {
                $.ajax({
                    type: 'get',
                    url: baseurl + '/delete_city/'+id,
                    data: {
                        id: id,
                        _token: $('meta[name="csrf-token"]').attr('content'),
                    },
                    dataType: 'json',
                    success: function(data) {
                        window.location.reload();
                    },
                });
            }
        }
    });
});

$(document).ready(function() {
    var table = $('#ammi_list').dataTable({
        processing: true,
        serverSide: true,
        url: baseurl + '/ammenities_view',
        //  url: baseurl + "/userlogin",
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            { data: 'name', name: 'name' },
           
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ]
    });
});

$(document).on('click', '.ammenities_delete', function() {
    var id = $(this).attr('data-id');
    // alert(id);
    bootbox.confirm({
        message: "Do you want to delete this Name?",
        buttons: {
            confirm: {
                label: 'Ok',
                className: 'btn btn-info'
            },
            cancel: {
                label: 'Cancel',
                className: 'btn-secondary'
            }
        },
        callback: function(result) {
            if (result) {
                $.ajax({
                    type: 'get',
                    url: baseurl + '/delete_ammenities/'+id,
                    data: {
                        id: id,
                        _token: $('meta[name="csrf-token"]').attr('content'),
                    },
                    dataType: 'json',
                    success: function(data) {
                        window.location.reload();
                    },
                });
            }
        }
    });
});