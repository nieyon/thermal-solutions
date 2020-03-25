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

            // header img
            $('.animate-header').each(function() {
                var tl = new TimelineMax()
                .fromTo(this, 1,
                    { y: "-550px", opacity: "0", ease:Power0.easeIn },
                    { y: "0%", opacity: "1", ease:Power0.easeIn })

                var fadeScene = new ScrollMagic.Scene({
                    triggerElement: this,
                    triggerHook: 2,
                    reverse:true,
                    })
                    .setTween(tl)
                    .addTo(controller);
            });

            $('.animate-up').each(function() {
                var tl = new TimelineMax()
                .fromTo(this, 1,
                    { y: "40px", opacity: "0", ease:Power0.easeIn },
                    { y: "0%", opacity: "1", ease:Power0.easeIn })

                var fadeScene = new ScrollMagic.Scene({
                    triggerElement: this,
                    triggerHook: .9,
                    reverse:true,
                    })
                    .setTween(tl)
                    // .addIndicators()
                    .addTo(controller);
            });

            $('.animate-up1').each(function() {
                var tl = new TimelineMax()
                .fromTo(this, 1,
                    { y: "20px", opacity: "0", ease:Power0.easeIn },
                    { y: "0%", opacity: "1", ease:Power0.easeIn })

                var fadeScene = new ScrollMagic.Scene({
                    triggerElement: this,
                    triggerHook: 1,
                    reverse:true,
                    })
                    .setTween(tl)
                    .addTo(controller);
            });

            $('.animate-right').each(function() {
                var tl = new TimelineMax()
                .fromTo(this, 1,
                    { x: "-150px", opacity: "0", eawse:Power0.easeIn },
                    { x: "0%", opacity: "1", ease:Power0.easeIn })

                var fadeScene = new ScrollMagic.Scene({
                    triggerElement: this,
                    triggerHook: .8,
                    reverse:true,
                    })
                    .setTween(tl)
                    .addTo(controller);
            });
        },        
    },
}