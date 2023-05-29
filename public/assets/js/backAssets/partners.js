$(document).on('submit', '#add_partner', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        type: 'post',
        url: "/backend/partners/store",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            $("#add_partner")[0].reset();
            $(".partners-table").append(`
            <tr>
                <td>
                    <a id="table_link{{ $partner->id }}" href="${data.link}" target="_blank">
                        <img id="table_logo{{ $partner->id }}" alt="${data.name_en}" class="avatar avatar-xl brround" src="${data.logo}">
                    </a>
                </td>
                <td id="table_name_en${data.id}">${data.name_en}</td>
                <td id="table_name_ar${data.id}">${data.name_ar}</td>
                <td>
                    <div class="row row-xs wd-xl-80p">
                        <div class="col-sm-6 col-md-6 mg-t-10">
                            <a style="cursor: pointer;" class="btn btn-danger btn-block delete-partner" partner_id="${data.id}">Delete</a>
                        </div>
                        <div class="col-sm-6 col-md-6 mg-t-10">
                            <a style="cursor: pointer;" class="btn btn-info btn-block"
                            data-effect="effect-fall" data-toggle="modal" href="#modaldemo9"
                            id="table_data_id${data.id}"
                            data-id="${data.id}"
                            data-name-en="${data.name_en}"
                            data-name-ar="${data.name_ar}"
                            data-link="${data.link}"
                            data-logo="${data.logo}"
                            >Edit</a>
                        </div>
                    </div>
                </td>
            </tr>
            `)

            $('#alert_partner').empty()
            document.getElementById("closeModal").click();
            $('#alert_partner').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Partner added successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert_partner').empty()
            }, 8000);
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


$(document).on('click', '.delete-partner', function (e) {
    e.preventDefault();
    var partner_id = $(this).attr('partner_id');
    var delsection = $(this).parent().parent().parent().parent();

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
                url: "/backend/partners/destroy",
                data: {
                    _token: csrf,
                    id: partner_id
                },
                success: function (data) {
                    delsection.remove();
                    Swal.fire(
                        'Deleted!',
                        'Record has been deleted.',
                        'success'
                    )
                },
                error: function () {
                    Swal.fire(
                        'Not Deleted!',
                        'Please reload your page and try again.',
                        'error'
                    )
                }
            });

        }
    })
});

$(document).on('click', '.editpartner', function () {
    var id = $(this).attr('data-id')
    var name_en = $(this).attr('data-name-en')
    var name_ar = $(this).attr('data-name-ar')
    var link = $(this).attr('data-link')
    var logo = $(this).attr('data-logo')
    console.log(logo);
    $('#edit_form_id').val(id);
    $('#edit_form_name_en').val(name_en);
    $('#edit_form_name_ar').val(name_ar);
    $('#edit_form_link').val(link);
    $('#edit_form_logo').attr('src', logo);
});

$(document).on('submit', '#edit_partner', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        type: 'post',
        url: "/backend/partners/update",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            $('#table_data_id' + data.id).attr('data-name-en', data.name_en)
            $('#table_data_id' + data.id).attr('data-name-ar', data.name_ar)
            $('#table_data_id' + data.id).attr('data-link', data.link)
            $('#table_data_id' + data.id).attr('data-logo', data.logo)
            $('#table_name_en' + data.id).text(data.name_en)
            $('#table_name_ar' + data.id).text(data.name_ar)
            $('#table_logo' + data.id).attr('src', data.logo)
            $('#table_link' + data.id).attr('href', data.link)

            $('#alert_partner').empty()
            document.getElementById("closeEditModal").click();
            $('#alert_partner').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Partner updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert_partner').empty()
            }, 8000);
        }
        , error: function (data) {
            $('#alert_edit_model').empty();
            for (const key in data.responseJSON.errors) {
                $('#alert_edit_model').append(
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
