$('#carouselcol').on('slide.bs.carousel', function (e) {

    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('.colab-item').length;

    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.colab-item').eq(i).appendTo('.colab-inner');
            }
            else {
                $('.colab-item').eq(0).appendTo('.colab-inner');
            }
        }
    }
});