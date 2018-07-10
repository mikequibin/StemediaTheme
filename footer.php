<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */

?>

</div><!-- #main -->
</section><!-- section -->

<footer>
    <div class="flex-container flex-container__footer">
        <div class="row__68">
            <ul class="top-30 no-margin">
                <li class="checklist__item float">
                    <a class="font-700 decoration-none text-blue txt-2" href="http://stemedia.org/about">ABOUT</a>
                </li>
                <li class="checklist__item float">
                    <a class="font-700 decoration-none text-blue txt-2" href="http://stemedia.org/bloglist">BLOG</a>
                </li>
                <li class="checklist__item float">
                    <a class="font-700 decoration-none text-blue txt-2" href="http://stemedia.org/work">WORK</a>
                </li>
                <li class="checklist__item float">
                    <a class="font-700 decoration-none text-blue txt-2" href="http://stemedia.org/resources">RESOURCE</a>
                </li>
                <li class="checklist__item float">
                    <a class="font-700 decoration-none text-blue txt-2" href="https://www.ideationproducts.com/" target=_blank>SHOP</a>
                </li>
                <li class="checklist__item float">
                    <a class="font-700 decoration-none text-blue txt-2" href="http://stemedia.org/submit-content">SUBMIT CONTENT</a>
                </li>
            </ul>
        </div>

        <div class="row__32">
            <div class="footer-icon">
                <a class="left-10" href=""><img class="logo-stem float" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/new-footer-logo.png" alt=""/></a>
                <a class="left-10" href="https://www.instagram.com/stemedia/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-ig.png" alt=""/></a>
                <a class="left-10" href="https://www.facebook.com/STEM.Media/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-fb.PNG" alt=""/></a>
                <a class="left-10" href="https://twitter.com/_STEMedia" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter-footer.png" alt=""/></a>
                <a class="left-10" href="https://www.youtube.com/stemediaorg" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube-footer.png" alt=""/></a>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p class="font-700 text-gray copyright text-white">© 2018 WWW.STEMEDIA.ORG | ALL RIGHTS RESERVED | DEVELOPER&#60;MIKE QUIBIN&#47;&#62; </p>
    </div>

</footer>



<!-- #colophon -->
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

<!--<script>-->
<!--    var p = $(".popup__overlay");-->
<!---->
<!--    $("#popup__toggle").click(function() {-->
<!--        p.css("display", "block");-->
<!--    });-->
<!--    p.click(function(event) {-->
<!--        e = event || window.event;-->
<!--        if (e.target == this) {-->
<!--            $(p).css("display", "none");-->
<!--        }-->
<!--    });-->
<!--    $(".popup__close").click(function() {-->
<!--        p.css("display", "none");-->
<!--    });-->
<!---->
<!--    //video popup-->
<!--    function toggleVideo(state) {-->
<!--        // if state == 'hide', hide. Else: show video-->
<!--        var div = document.getElementById("popupVid");-->
<!--        var iframe = div.getElementsByTagName("iframe")[0].contentWindow;-->
<!--        //div.style.display = state == 'hide' ? 'none' : '';-->
<!--        func = state == "hide" ? "pauseVideo" : "playVideo";-->
<!--        iframe.postMessage(-->
<!--            '{"event":"command","func":"' + func + '","args":""}',-->
<!--            "*"-->
<!--        );-->
<!--    }-->
<!---->
<!--    $("#popup__toggle").click(function() {-->
<!--        p.css("visibility", "visible").css("opacity", "1");-->
<!--    });-->
<!---->
<!--    p.click(function(event) {-->
<!--        e = event || window.event;-->
<!--        if (e.target == this) {-->
<!--            $(p)-->
<!--                .css("visibility", "hidden")-->
<!--                .css("opacity", "0");-->
<!--            toggleVideo("hide");-->
<!--        }-->
<!--    });-->
<!---->
<!--    $(".popup__close").click(function() {-->
<!--        p.css("visibility", "hidden").css("opacity", "0");-->
<!--        toggleVideo("hide");-->
<!--    });-->
<!--</script>-->

<script>
    // SmoothScroll
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });
</script>



</body>
</html>