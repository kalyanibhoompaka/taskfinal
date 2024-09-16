(function ($) {
    $(document).ready(function () {
        $('.scroll-left').click(function () {
            $('.view-horizontal-cards .view-content').scrollLeft($('.view-horizontal-cards .view-content').scrollLeft() - 200);
        });

        $('.scroll-right').click(function () {
            $('.view-horizontal-cards .view-content').scrollLeft($('.view-horizontal-cards .view-content').scrollLeft() + 200);
        });
    });
})(jQuery);
