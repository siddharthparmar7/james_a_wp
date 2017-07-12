/**
 * Created by Sid on 2017-05-15.
 */
(function($) {

    function fadeInLearnMoreLink(context){
        $(context).find('.learn-more').css('visibility', 'visible').hide().fadeIn();
        $(context).find("h2").css('visibility', 'hidden');
    }

    function fadeOutLearnMoreLink(context){
        $(context).find('.learn-more').css('visibility', 'hidden');
        $(context).find("h2").css('visibility', 'visible').show().fadeIn();
    }

    // home page grid

    jQuery(document).ready(function () {

        $('#grid-col1').mouseenter(function () {
            fadeInLearnMoreLink(this);
        });

        $('#grid-col1').mouseleave(function () {
            fadeOutLearnMoreLink(this);
        });

        $('#grid-col3').mouseenter(function () {
            fadeInLearnMoreLink(this);
        });

        $('#grid-col3').mouseleave(function () {
            fadeOutLearnMoreLink(this);
        });

        //  col2/middle grid

        jQuery('#speaker-thumb').mouseenter(function () {
            fadeInLearnMoreLink(this);
        });

        jQuery('#speaker-thumb').mouseleave(function () {
            fadeOutLearnMoreLink(this);
        });

        jQuery('#bio-thumb').mouseenter(function () {
            fadeInLearnMoreLink(this);
        });

        jQuery('#bio-thumb').mouseleave(function () {
            fadeOutLearnMoreLink(this);
        });

        jQuery('#testimonial-thumb').mouseenter(function () {
            fadeInLearnMoreLink(this);
        });

        jQuery('#testimonial-thumb').mouseleave(function () {
            fadeOutLearnMoreLink(this);
        });
    });

//    bio page books purchase
    $('.book-purchase').mouseenter(function () {
       fadeInLearnMoreLink(this);
       $(this).find("img").css('visibility', 'hidden').show().fadeOut();
    });

    $('.book-purchase').mouseleave(function () {
        fadeOutLearnMoreLink(this);
        $(this).find("img").css('visibility', 'visible').hide().fadeIn();
    });

//    smooth scrolling
    $(function() {
        var $window = $(window), $document = $(document),
            transitionSupported = typeof document.body.style.transitionProperty === "string", // detect CSS transition support
            scrollTime = 1; // scroll time in seconds

        $(document).on("click", "a[href*=#]:not([href=#])", function(e) {
            var target, avail, scroll, deltaScroll;

            if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
                target = $(this.hash);
                target = target.length ? target : $("[id=" + this.hash.slice(1) + "]");

                if (target.length) {
                    avail = $document.height() - $window.height();

                    if (avail > 0) {
                        scroll = target.offset().top;

                        if (scroll > avail) {
                            scroll = avail;
                        }
                    } else {
                        scroll = 0;
                    }

                    deltaScroll = $window.scrollTop() - scroll;

                    // if we don't have to scroll because we're already at the right scrolling level,
                    if (!deltaScroll) {
                        return; // do nothing
                    }

                    e.preventDefault();

                    if (transitionSupported) {
                        $("html").css({
                            "margin-top": deltaScroll + "px",
                            "transition": scrollTime + "s ease-in-out"
                        }).data("transitioning", scroll);
                    } else {
                        $("html, body").stop(true, true) // stop potential other jQuery animation (assuming we're the only one doing it)
                            .animate({
                                scrollTop: scroll + "px"
                            }, scrollTime * 1000);

                        return;
                    }
                }
            }
        });

        if (transitionSupported) {
            $("html").on("transitionend webkitTransitionEnd msTransitionEnd oTransitionEnd", function(e) {
                var $this = $(this),
                    scroll = $this.data("transitioning");

                if (e.target === e.currentTarget && scroll) {
                    $this.removeAttr("style").removeData("transitioning");

                    $("html, body").scrollTop(scroll);
                }
            });
        }
    });

})( jQuery );