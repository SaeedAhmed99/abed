
$(document).on('submit', '#add_slider', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        type: 'post',
        url: "/backend/home-slider/store",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            $("#add_slider")[0].reset();
            $("#slider-table").append(`
            <tr>
                <td>
                    <img width="300" style="border-radius: 10px" src="${data.image}">
                </td>
                <td>
                    <div class="row row-xs wd-xl-80p">
                        <div class="col-sm-6 col-md-8 mg-t-10">
                            <a style="cursor: pointer;" class="btn btn-danger btn-block delete-slider" slider_id="${data.id}">Delete</a>
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
                    Slider added successfully.
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
                setTimeout(function () {
                    $('#alert_edit_model').empty()
                }, 8000);
            }
        }
    });
});

$(document).on('click', '.delete-slider', function (e) {
    e.preventDefault();
    var slider_id = $(this).attr('slider_id');
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
                url: "/backend/home-slider/destroy",
                data: {
                    _token: csrf,
                    id: slider_id
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
