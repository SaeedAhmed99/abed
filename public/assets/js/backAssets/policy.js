$("#update_our_policies_en").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/policy/update-our-policies-en',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert_policy_en').empty()
            $('#alert_policy_en').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The our policy english has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert_policy_en').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert_policy_en').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert_policy_en').append(
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
                    $('#alert_policy_en').empty()
                }, 8000);
            }
        }
    });
});

$("#update_our_policies_ar").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/policy/update-our-policies-ar',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert_policy_ar').empty()
            $('#alert_policy_ar').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The our policy arabic has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert_policy_ar').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert_policy_ar').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert_policy_ar').append(
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
                    $('#alert_policy_ar').empty()
                }, 8000);
            }
        }
    });
});


$("#update_meta_title_en").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/policy/update-meta-title-en',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert_meta').empty()
            $('#alert_meta').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The meta title english has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert_meta').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert_meta').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert_meta').append(
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
                    $('#alert_meta').empty()
                }, 8000);
            }
        }
    });
});

$("#update_meta_keywords_en").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/policy/update-meta-keywords-en',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert_meta').empty()
            $('#alert_meta').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The meta keywords english arabic has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert_meta').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert_meta').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert_meta').append(
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
                    $('#alert_meta').empty()
                }, 8000);
            }
        }
    });
});

$("#update_meta_description_en").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/policy/update-meta-description-en',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert_meta').empty()
            $('#alert_meta').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The meta description english arabic has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert_meta').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert_meta').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert_meta').append(
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
                    $('#alert_meta').empty()
                }, 8000);
            }
        }
    });
});

$("#update_meta_title_ar").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/policy/update-meta-title-ar',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert_meta').empty()
            $('#alert_meta').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The meta title arabic has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert_meta').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert_meta').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert_meta').append(
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
                    $('#alert_meta').empty()
                }, 8000);
            }
        }
    });
});

$("#update_meta_keywords_ar").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/policy/update-meta-keywords-ar',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert_meta').empty()
            $('#alert_meta').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The meta keywords arabic has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert_meta').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert_meta').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert_meta').append(
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
                    $('#alert_meta').empty()
                }, 8000);
            }
        }
    });
});

$("#update_meta_description_ar").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/policy/update-meta-description-ar',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert_meta').empty()
            $('#alert_meta').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The meta description arabic has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert_meta').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert_meta').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert_meta').append(
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
                    $('#alert_meta').empty()
                }, 8000);
            }
        }
    });
});
