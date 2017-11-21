jQuery(document).foundation();

jQuery(document).ready(function(){
    jQuery(".owl-carousel").owlCarousel();
});

var owl = jQuery('.owl-carousel');
owl.owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    dots: true,
    autoplayTimeout:4000,
    autoplayHoverPause:false
});

jQuery('.counter').each(function() {
    var $this = jQuery(this),
        countTo = $this.attr('data-count');

    jQuery({ countNum: $this.text()}).animate({
            countNum: countTo
        },

        {

            duration: 2000,
            easing:'swing',
            step: function() {
                $this.text(Math.floor(this.countNum));
            },
            complete: function() {
                $this.text(this.countNum);
                //alert('finished');
            }

        });
});