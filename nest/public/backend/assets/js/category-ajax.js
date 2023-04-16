$(document).ready(function(){

    // For Adding Category
    $(document).on("click","#addCategory",function(){
        var name = $("#name").val();
        var description = $("#description").val();
        var status = $("#status").val();

        // CSRF Token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/add-category",
            type: "POST",
            // dataType: "json",
            data: {
                name: name,
                description: description,
                status: status
            },
            success: function(response) {
                jQuery("#catemsg").html(`<div class="alert alert-success border-0 bg-success alert-dismissible fade show">
                <div class="text-white">${response.msg}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>`);
                
                $('#catemsg').fadeOut(5000);
                $("#name").val("");
                $("#description").val("");
                $("#status").val("");
                $("#modalAddCate").modal('hide');
                show();
            }
        });
    });

    show();
    // For Showing Categories
    function show() {

        $.ajax({
            url: "/show-category",
            type: "GET",
            // data: {
                
            // },
            success: function(response) {
                var data = "";
                var sl = 1;
                var stat = "";

                $.each(response.allData, function(key, val) {
                    if (val.status=="1"){
                        stat = '<button class="btn btn-sm btn-outline-success" id="CateActId" value="${val.id}">Active</button>';
                    } else {
                        stat = '<button class="btn btn-sm btn-outline-warning" id="CateActId" value="${val.id}">Inactive</button>';
                    }
                    // Method 1
                    data += `<tr>
                                <td>${sl++}</td>
                                <td>${val.name}</td>
                                <td>${val.description}</td>
                                <td>${stat}</td>
                                <td>
                                    <button class="btn btn-sm btn-secondary" id="editCateId" value="${val.id}">Edit</button>
                                    <button class="btn btn-sm btn-danger" id="delCateId" value="${val.id}">Delete</i></button>
                                </td>
                            </tr>`;
                            // Method 2
                    // data += '<tr>\
                    //             <td>'+sl+'</td>\
                    //             <td>'+val.name+'</td>\
                    //             <td>'+val.description+'</td>\
                    //             <td>'+val.status+'</td>\
                    //             <td>\
                    //                 <button class="btn btn-sm btn-secondary" id="editCateId" value="'+val.id+'">Edit</button>\
                    //                 <button class="btn btn-sm btn-danger" id="delCateId" value="'+val.id+'">Delete</i></button>\
                    //             </td>\
                    //         </tr>';
                    // sl++;
                })
                $("#tbody").html(data);
            }
        })
    }

    // Delete Category Move Value
    $(document).on("click", "#delCateId", function(){
        var id = $(this).val();
        $("#delCategory").val(id);
        $("#modalDelCate").modal('show');
    })

    $(document).on("click", "#delCategory", function(){
        var id = $("#delCategory").val();

        $.ajax({
            url:"/delete-category/"+id,
            type: "GET",
            success: function(response) {
                jQuery("#catemsg").html(`<div class="alert alert-success border-0 bg-success alert-dismissible fade show">
                <div class="text-white">${response.msg}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>`);

                $('#catemsg').fadeOut(5000);
                $("#modalDelCate").modal('hide');
                show();
            }
        })
    })

    // For Edit Value pass
    $(document).on("click", "#editCateId", function(){
        var id = $(this).val();
        $("#updateCategory").val(id);
        $("#modalEditCate").modal('show');

        $.ajax({
            url: "/edit-category/"+id,
            type: "GET",
            success: function(response) {
                $("#kname").val(response.cateData.name);
                $("#kdescription").val(response.cateData.description);
                $("#kstatus").val(response.cateData.status);

            }
        })
    })

    $(document).on("click","#updateCategory",function(){
        var id = $(this).val();
        var name = $("#kname").val();
        var description = $("#kdescription").val();
        var status = $("#kstatus").val();

        // CSRF Token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "/update-category/"+id,
            type: "POST",
            // dataType: "json",
            data: {
                name: name,
                description: description,
                status: status
            },
            success: function(response) {
                jQuery("#catemsg").html(`<div class="alert alert-success border-0 bg-success alert-dismissible fade show">
                <div class="text-white">${response.msg}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>`);
                
                $('#catemsg').fadeOut(5000);
                $("#modalEditCate").modal('hide');
                show();
            }
        });
    });
});