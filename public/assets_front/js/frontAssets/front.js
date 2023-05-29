$("#contactUsForm").submit(function (e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/contact-us/store',
        data: $(this).serialize(),
        success: function (data) {
            $('#contactUsForm')[0].reset();
            $('#alert_contact_us_form').empty()
            $('#alert_contact_us_form').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The message has been sent successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert_contact_us_form').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert_contact_us_form').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert_contact_us_form').append(
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
                    $('#alert_contact_us_form').empty()
                }, 8000);
            }
        }
    });
});

$("#subscribeForm").submit(function (e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/subscribe/store',
        data: $(this).serialize(),
        success: function (data) {
            $('#subscribeForm')[0].reset();
            $('#alert_subscribe_form').empty()
            $('#alert_subscribe_form').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    You have successfully subscribed to the mailing list.
                </div>
            `)
            setTimeout(function () {
                $('#alert_subscribe_form').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert_subscribe_form').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert_subscribe_form').append(
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
                    $('#alert_subscribe_form').empty()
                }, 8000);
            }
        }
    });
});