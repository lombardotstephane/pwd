$(document).ready(function () {
    $('.bookingConfirm').click(function () {
        $.ajax({
            url: $('.bookingConfirm').data('path'),
            type: 'POST',
            success: function (data) {
                $('#' + $('.bookingConfirm').data('id')).html('Confirmé');
            }
        });
    });
});