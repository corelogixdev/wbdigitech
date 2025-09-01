
       $(document).ready(function() {
                    $("#testimonial-slider").owlCarousel({
                        items: 1,
                        responsive: {
                            1000: {
                                items: 1
                            },
                            979: {
                                items: 1
                            },
                            768: {
                                items: 1
                            }
                        },
                        dots: false,
                        nav: true,
                        navText: ["", ""],
                        autoplay: true
        })});

const interval2 = setInterval(() => {
    $(".open-popup").click(function() {
        $("#myModal").modal('show');
    });

    $(document).ready(function() {
        $('.read-more').click(function() {
            $(this).siblings('.more-content').slideDown();
            $('.more-content-custom').slideDown();
            $(this).hide();
            $(this).siblings('.read-less').show();
        });

        $('.read-less').click(function() {
            $(this).siblings('.more-content').slideUp();
            $('.more-content-custom').slideUp();
            $(this).hide();
            $(this).siblings('.read-more').show();
        });

        $('.read-more-custom').click(function() {
            $('.more-content-custom').slideDown();
            $(this).hide();
            $('.read-less-custom').show();
        });

        $('.read-less-custom').click(function() {
            $('.more-content-custom').slideUp();
            $(this).hide();
            $('.read-more-custom').show();
        });
    });

    clearInterval(interval2);
}, 5000);



