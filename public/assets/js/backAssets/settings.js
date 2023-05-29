$("#update_logo").submit(function (e) {
    e.preventDefault();
    var formData = new FormData($('#update_logo')[0]);
    var logo = document.getElementById('user_image')
    $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url: '/backend/settings/update-logo',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            $('#alert_logo').empty()
            $('#alert_logo').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The logo has been updated successfully.
                </div>
            `)
            logo.setAttribute('src', data.logo)
            setTimeout(function () {
                $('#alert_logo').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert_logo').empty()
            console.log(data);
            for (const key in data.responseJSON.errors) {
                $('#alert_logo').append(
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
                    $('#alert_logo').empty()
                }, 8000);
            }
        }
    });
});

$("#update_name_en").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/settings/update-name-en',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert_name').empty()
            $('#alert_name').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The name english has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert_name').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert_name').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert_name').append(
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
                    $('#alert_name').empty()
                }, 8000);
            }
        }
    });
});

$("#update_name_ar").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/settings/update-name-ar',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert_name').empty()
            $('#alert_name').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The name english has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert_name').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert_name').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert_name').append(
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
                    $('#alert_name').empty()
                }, 8000);
            }
        }
    });
});

$("#update_meta_title_en").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/settings/meta-title-en',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert-meta-en').empty()
            $('#alert-meta-en').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The meta title english has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert-meta-en').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert-meta-en').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert-meta-en').append(
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
                    $('#alert-meta-en').empty()
                }, 8000);
            }
        }
    });
});

$("#update_meta_title_ar").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/settings/meta-title-ar',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert-meta-ar').empty()
            $('#alert-meta-ar').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The meta title arabic has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert-meta-ar').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert-meta-ar').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert-meta-ar').append(
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
                    $('#alert-meta-ar').empty()
                }, 8000);
            }
        }
    });
});

$("#update_meta_keywords_en").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/settings/meta-keywords-en',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert-meta-en').empty()
            $('#alert-meta-en').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The meta keywords english has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert-meta-en').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert-meta-en').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert-meta-en').append(
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
                    $('#alert-meta-en').empty()
                }, 8000);
            }
        }
    });
});

$("#update_meta_keywords_ar").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/settings/meta-keywords-ar',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert-meta-ar').empty()
            $('#alert-meta-ar').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The meta keywords arabic has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert-meta-ar').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert-meta-ar').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert-meta-ar').append(
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
                    $('#alert-meta-ar').empty()
                }, 8000);
            }
        }
    });
});

$("#update_meta_description_en").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/settings/meta-description-en',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert-meta-en').empty()
            $('#alert-meta-en').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The meta description english has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert-meta-en').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert-meta-en').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert-meta-en').append(
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
                    $('#alert-meta-en').empty()
                }, 8000);
            }
        }
    });
});

$("#update_meta_description_ar").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/settings/meta-description-ar',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert-meta-ar').empty()
            $('#alert-meta-ar').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The meta description arabic has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert-meta-ar').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert-meta-ar').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert-meta-ar').append(
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
                    $('#alert-meta-ar').empty()
                }, 8000);
            }
        }
    });
});

$("#update_facebook_link").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/settings/facebook-link',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert-social').empty()
            $('#alert-social').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The facebook link has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert-social').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert-social').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert-social').append(
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
                    $('#alert-social').empty()
                }, 8000);
            }
        }
    });
});

$("#update_twitter_link").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/settings/twitter-link',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert-social').empty()
            $('#alert-social').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The twitter link has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert-social').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert-social').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert-social').append(
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
                    $('#alert-social').empty()
                }, 8000);
            }
        }
    });
});

$("#update_linkedin_link").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/settings/linkedin-link',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert-social').empty()
            $('#alert-social').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The linkedin link has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert-social').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert-social').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert-social').append(
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
                    $('#alert-social').empty()
                }, 8000);
            }
        }
    });
});

$("#update_instagram_link").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/settings/instagram-link',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert-social').empty()
            $('#alert-social').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The instagram link has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert-social').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert-social').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert-social').append(
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
                    $('#alert-social').empty()
                }, 8000);
            }
        }
    });
});

$("#update_snapchat_link").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/settings/snapchat-link',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert-social').empty()
            $('#alert-social').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The snapchat link has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert-social').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert-social').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert-social').append(
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
                    $('#alert-social').empty()
                }, 8000);
            }
        }
    });
});

$("#update_tiktok_link").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/settings/tiktok-link',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert-social').empty()
            $('#alert-social').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The tiktok link has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert-social').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert-social').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert-social').append(
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
                    $('#alert-social').empty()
                }, 8000);
            }
        }
    });
});

$("#update_email").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/settings/email',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert-main-info').empty()
            $('#alert-main-info').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The email has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert-main-info').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert-main-info').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert-main-info').append(
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
                    $('#alert-main-info').empty()
                }, 8000);
            }
        }
    });
});

$("#update_phone").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/settings/phone',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert-main-info').empty()
            $('#alert-main-info').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The phone has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert-main-info').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert-main-info').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert-main-info').append(
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
                    $('#alert-main-info').empty()
                }, 8000);
            }
        }
    });
});

$("#update_fax").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/settings/fax',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert-main-info').empty()
            $('#alert-main-info').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The fax has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert-main-info').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert-main-info').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert-main-info').append(
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
                    $('#alert-main-info').empty()
                }, 8000);
            }
        }
    });
});

$("#update_address_en").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/settings/update-address-en',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert-address').empty()
            $('#alert-address').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The english address has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert-address').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert-address').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert-address').append(
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
                    $('#alert-address').empty()
                }, 8000);
            }
        }
    });
});

$("#update_address_ar").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/settings/update-address-ar',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert-address').empty()
            $('#alert-address').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The arabic address has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert-address').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert-address').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert-address').append(
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
                    $('#alert-address').empty()
                }, 8000);
            }
        }
    });
});

$("#update_map_iframe").submit(function (e) {

    e.preventDefault();
    $.ajax({
        type: "POST",
        url: '/backend/settings/update-map-iframe',
        data: $(this).serialize(),
        success: function (data) {
            $('#alert-map-iframes').empty()
            $('#alert-map-iframes').append(`
                <div class="alert alert-success" role="alert">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The map iframe has been updated successfully.
                </div>
            `)
            setTimeout(function () {
                $('#alert-map-iframes').empty()
            }, 8000);
        },
        error: function (data) {
            $('#alert-map-iframes').empty()
            for (const key in data.responseJSON.errors) {
                $('#alert-map-iframes').append(
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
                    $('#alert-map-iframes').empty()
                }, 8000);
            }
        }
    });
});

