$(document).on('submit', '#add_book', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        type: 'post',
        url: "/backend/properties/store",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            $("#add_book")[0].reset();

            // $('#alert_partner').empty()
            // document.getElementById("closeModal").click();
            // $('#alert_partner').append(`
            //     <div class="alert alert-success" role="alert">
            //         <button aria-label="Close" class="close" data-dismiss="alert" type="button">
            //             <span aria-hidden="true">&times;</span>
            //         </button>
            //         Slider added successfully.
            //     </div>
            // `)
            // setTimeout(function () {
            //     $('#alert_partner').empty()
            // }, 8000);

            window.location.href = "/backend/properties/";
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
                setTimeout(function () {
                    $('#alert_model').empty()
                }, 8000);
            }
        }
    });
});

$(document).on('click', '.editbook', function () {
    var id = $(this).attr('data-id')
    var name_en = $(this).attr('data-name-en')
    var name_ar = $(this).attr('data-name-ar')
    var short_book_en = $(this).attr('data-short-book-en')
    var short_book_ar = $(this).attr('data-short-book-ar')
    var language_en = $(this).attr('data-language-en')
    var language_ar = $(this).attr('data-language-ar')
    // console.log(name_en);
    $('#edit_form_id').val(id);
    $('#name_book_en').val(name_en);
    $('#name_book_ar').val(name_ar);
    $('#short_book_en').val(short_book_en);
    $('#short_book_ar').val(short_book_ar);
    $('#language_book_en').val(language_en);
    $('#language_book_ar').val(language_ar);
});

$(document).on('submit', '#edit_book', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        type: 'post',
        url: "/backend/books/update",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            // console.log(data.short_description_en);
            $('#table_data_id' + data.id).attr('data-name-en', data.name_en)
            $('#table_data_id' + data.id).attr('data-name-ar', data.name_ar)
            $('#table_data_id' + data.id).attr('data-short-book-en', data.short_description_en)
            $('#table_data_id' + data.id).attr('data-short-book-ar', data.short_description_ar)
            $('#table_data_id' + data.id).attr('data-language-en', data.language_en)
            $('#table_data_id' + data.id).attr('data-language-ar', data.language_ar)
            $('#table_name_en' + data.id).text(data.name_en)
            $('#table_name_ar' + data.id).text(data.name_ar)
            $('#table_short_book_en' + data.id).text(data.short_description_en)
            $('#table_short_book_ar' + data.id).text(data.short_description_ar)
            $('#table_language_en' + data.id).text(data.language_en)
            $('#table_language_ar' + data.id).text(data.language_ar)

            $('#alert_book').empty()
            document.getElementById("closeEditModal").click();
            $('#alert_book').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Book updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert_book').empty()
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


$(document).on('click', '.delete-book', function (e) {
    e.preventDefault();
    var book_id = $(this).attr('book_id');
    var delsection = $(this).parent().parent();

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
                url: "/backend/books/destroy",
                data: {
                    _token: csrf,
                    id: book_id
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
