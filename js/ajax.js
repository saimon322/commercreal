(function ($) {
    'use strict';
    
    $('.form-contact').submit(function () {

        let formData = $(this).serialize();

        if (!$('body').hasClass('loading')) {
            
            $.ajax({
                type: "POST",
                url: ajax_data.ajax_url,
                data: {
                    action: ajax_data.action,
                    message_data: formData,
                    nonce: ajax_data.nonce,
                },
                success: function (data) {

                    $('#success').modal('show');
                    $('#modal-form').modal('hide');

                    setTimeout(function tick() {
                        $('#success').modal('hide')
                    }, 2000);
                },
                error: function (jqXHR, text, error) {
                    console.log(error);
                }
            });
        }
        
        return false;

    });

})(jQuery);