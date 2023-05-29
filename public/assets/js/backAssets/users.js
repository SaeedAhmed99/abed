$(document).on('submit', '#create_user', function (e) {
    e.preventDefault();
    $.ajax({
        type: 'post',
        url: "/backend/users/store",
        data: $(this).serialize(),
        success: function (data) {
            $("#create_user")[0].reset();
            // $(".users-table").append(`
            // <tr>
            //     <td>#</td>
            //     <td>${data.first_name} ${data.last_name}</td>
            //     <td>${data.email}</td>
            //     <td>
            //         <span class="label text-success">active</span>
            //     </td>
            //     <td>role</td>
            //     <td>
            //         <a href="" class="btn btn-sm btn-info"
            //             title="edit"><i class="las la-pen"></i></a>
            //         <a class="btn btn-danger btn-sm delete-user" user_id="${data.id}">
            //             <i class="las la-trash"></i>
            //         </a>
            //     </td>
            // </tr>
            // `)
            $('#alert_user').empty()
            window.location.href = "/backend/users/";
            // document.getElementById("closeModal").click();
            // $('#alert_user').append(`
            //     <div class="alert alert-success" role="alert">
            //         <button aria-label="Close" class="close" data-dismiss="alert" type="button">
            //             <span aria-hidden="true">&times;</span>
            //         </button>
            //         Create new user successfully.
            //     </div>
            // `)
            // setTimeout(function () {
            //     $('#alert_user').empty()
            // }, 8000);
        }
        , error: function (data) {
            $('#alert_model').empty();
            for (const key in data.responseJSON.errors) {
                $('#alert_model').append(
                    `
                        <div class="alert alert-danger" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <li>${data.responseJSON.errors[key]}</li>
                        </div>
                    `
                )
            }
        }
    });
});


$(document).on('click', '.delete-user', function (e) {
    e.preventDefault();
    var user_id = $(this).attr('user_id');
    var deluser = $(this).parent().parent();

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'post',
                url: "/backend/users/destroy",
                data: {
                    _token: csrf,
                    id: user_id
                },
                success: function (data) {
                    deluser.remove();
                    Swal.fire(
                        'Deleted!',
                        'Record has been deleted.',
                        'success'
                    )
                },
                error: function (data) {
                    Swal.fire(
                        'Not Deleted!',
                        data.responseJSON.message,
                        'error'
                    )
                }
            });

        }
    })
});


$(document).on('submit', '#formEditUser', function (e) {
    e.preventDefault();
    $.ajax({
        type: 'post',
        url: "/backend/users/update",
        data: $(this).serialize(),
        success: function (data) {
            $('#alert_edit_user').empty()
            $('#alert_edit_user').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The user has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert_edit_user').empty()
            }, 8000);
        }
        , error: function (data) {
            $('#alert_edit_user').empty();
            for (const key in data.responseJSON.errors) {
                $('#alert_edit_user').append(
                    `
                        <div class="alert alert-danger" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <li>${data.responseJSON.errors[key]}</li>
                        </div>
                    `
                )
            }
        }
    });
});


$(document).on('submit', '#formChangePassord', function (e) {
    e.preventDefault();
    $.ajax({
        type: 'post',
        url: "/backend/users/change-password",
        data: $(this).serialize(),
        success: function (data) {
            $('#alert_change_password').empty()
            $('#alert_change_password').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Password changed successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert_change_password').empty()
            }, 8000);
        }
        , error: function (data) {
            $('#alert_change_password').empty();
            for (const key in data.responseJSON.errors) {
                $('#alert_change_password').append(
                    `
                        <div class="alert alert-danger" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <li>${data.responseJSON.errors[key]}</li>
                        </div>
                    `
                )
            }
        }
    });
});


$(document).on('submit', '#update_image', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    // var image = document.getElementById('user_image');
    $.ajax({
        type: 'post',
        url: "/backend/users/change-image",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            $('#user_image').attr('src', data.image)
            $('#alert_change_image').empty()
            $('#alert_change_image').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Image changed successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert_change_image').empty()
            }, 5000);
        }
        , error: function (data) {
            $('#alert_change_image').empty();
            for (const key in data.responseJSON.errors) {
                $('#alert_change_image').append(
                    `
                        <div class="alert alert-danger" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <li>${data.responseJSON.errors[key]}</li>
                        </div>
                    `
                )
                setTimeout(function () {
                    $('#alert_change_image').empty()
                }, 8000);
            }
        }
    });
});