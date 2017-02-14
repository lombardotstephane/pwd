$(document).ready(function () {
    $('.bookingDel').click(function () {
        $.ajax({
            url: $('.bookingDel').data('path'),
            type: 'POST',
            success: function (data) {
                 $('.' + $('.bookingDel').data('id')).parent().remove();
            }
        });
    });
});