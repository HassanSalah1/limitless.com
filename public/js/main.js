$(function () {
    var origin = window.location.href;

    var main_url;

    if (window.location.href.indexOf("#") > 0) {
        main_url = (origin.split('#')[0]);
    } else {
        main_url = origin;
    }

    $("form[name='registration_form']").validate({
        rules: {
            first_name: {
                required: true,
                minlength: 3,
            },
            last_name: {
                required: true,
                minlength: 3,
            },
            email: {
                required: true,
                email: true,
            },
            phone: {
                required: true,
            },
            venue: {
                required: true
            },
            // governorate: {
            //     required: true
            // },
            register_as: {
                required: true
            },
            invited_by: {
                required: true
            },
        },
        submitHandler: function (form) {
             $('#registration_form').attr('disabled','disabled')

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: form.action,
                type: form.method,
                data: $(form).serialize(),
                success: function (response) {
                    console.log(response)
                    toastr.success('Your registration has been successfully completed.');

                    setTimeout(function () {
                        window.location.href = main_url + 'agenda'
                    }, 1000);

                },
                error: function (data) {

                    $('#registration_form').removeAttr('disabled');

                    if (data) {
                        if (data.responseJSON.errors.first_name) {
                            toastr.info(data.responseJSON.errors.first_name);
                        }
                        if (data.responseJSON.errors.last_name) {
                            toastr.info(data.responseJSON.errors.last_name);
                        }
                        if (data.responseJSON.errors.email) {
                            toastr.info(data.responseJSON.errors.email);
                        }
                        if (data.responseJSON.errors.phone) {
                            toastr.info(data.responseJSON.errors.phone);
                        }
                        if (data.responseJSON.errors.venue) {
                            toastr.info(data.responseJSON.errors.venue);
                        }
                        if (data.responseJSON.errors.invited_by) {
                            toastr.info(data.responseJSON.errors.invited_by);
                        }
                        // if (data.responseJSON.errors.governorate) {
                        //     toastr.info(data.responseJSON.errors.governorate);
                        // }
                        if (data.responseJSON.errors.register_as) {
                            toastr.info(data.responseJSON.errors.register_as);
                        }
                    } else {
                        toastr.info('Please try again');
                    }
                }
            });
        }
    });

    $("form[name='login_form']").validate({
        rules: {
            phone: {
                required: true,
            }
        },
        submitHandler: function (form) {
            $('#login_form').attr('disabled','disabled')
            $.ajax({
                url: form.action,
                type: form.method,
                data: $(form).serialize(),
                success: function (response) {

                    toastr.success('You are successfully logged in.');

                    setTimeout(function () {
                        window.location.href = main_url + 'agenda'
                    }, 1000);

                },
                error: function (data) {
                    $('#login_form').removeAttr('disabled');
                    if (data) {
                        if (data.responseJSON.errors.number_phone) {
                            toastr.info(data.responseJSON.errors.number_phone[0])
                        } else {
                            toastr.info(data.responseJSON.errors)
                        }
                    } else {
                        toastr.info('Please try again');
                    }
                }
            });
        }
    });

});

