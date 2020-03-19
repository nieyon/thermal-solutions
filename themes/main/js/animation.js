$(document).ready(function() {
    animate.init();
});

var animate = {

    init: function() {
        var setup = this.setup;
        setup.animateEvents();
    },

    setup: {

        animateEvents: function() {

            // Init ScrollMagic
            var controller = new ScrollMagic.Controller();

            $('.animate-up').each(function() {
                var tl = new TimelineMax()
                .fromTo(this, 1,
                    { y: "40px", opacity: "0", ease:Power0.easeIn },
                    { y: "0%", opacity: "1", ease:Power0.easeIn })

                var fadeScene = new ScrollMagic.Scene({
                    triggerElement: this,
                    triggerHook: .7,
                    reverse:true,
                    })
                    .setTween(tl)
                    .addTo(controller);
            });
        },        
    },
}