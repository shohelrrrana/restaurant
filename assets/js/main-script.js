; (function ($) {
    $(document).ready(function () {
        $('#full-menu .nav-item').on('click', function (e) {
            $('#full-menu .nav-item').removeClass('active');
            $(this).addClass('active');
        });
        $('.tp-leftarrow').html('<i class="fa fa-arrow-left"></i>');
    });
})(jQuery)