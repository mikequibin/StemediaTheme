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
                    <a class="font-700 decoration-none text-blue txt-2" href="http://stemedia.org/contact">CONTACT</a>
                </li>
                <li class="checklist__item float">
                    <a class="font-700 decoration-none text-blue txt-2" href="http://stemedia.org/shop">SHOP</a>
                </li>
                <li class="checklist__item float">
                    <a class="font-700 decoration-none text-blue txt-2" href="http://stemedia.org/submit-content">SUBMIT CONTENT</a>
                </li>
            </ul>
        </div>

        <div class="row__32">
            <div class="footer-icon">
                <a class="left-10" href=""><img class="logo-stem float" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/new-footer-logo.png" alt=""/></a>
                <a class="left-10" href="https://www.instagram.com/_stemedia/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-ig.png" alt=""/></a>
                <a class="left-10" href="https://www.facebook.com/STEM.Media/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-fb.PNG" alt=""/></a>
                <a class="left-10" href="https://twitter.com/_STEMedia" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter-footer.png" alt=""/></a>
                <a class="left-10" href="https://www.youtube.com/stemediaorg" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube-footer.png" alt=""/></a>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p class="font-700 text-gray copyright text-white">© 2017 STEMEDIA.ORG | ALL RIGHTS RESERVED </p>
    </div>

</footer>



<!-- #colophon -->
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
    var p = $(".popup__overlay");

    $("#popup__toggle").click(function() {
        p.css("display", "block");
    });
    p.click(function(event) {
        e = event || window.event;
        if (e.target == this) {
            $(p).css("display", "none");
        }
    });
    $(".popup__close").click(function() {
        p.css("display", "none");
    });

    //video popup
    function toggleVideo(state) {
        // if state == 'hide', hide. Else: show video
        var div = document.getElementById("popupVid");
        var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
        //div.style.display = state == 'hide' ? 'none' : '';
        func = state == "hide" ? "pauseVideo" : "playVideo";
        iframe.postMessage(
            '{"event":"command","func":"' + func + '","args":""}',
            "*"
        );
    }

    $("#popup__toggle").click(function() {
        p.css("visibility", "visible").css("opacity", "1");
    });

    p.click(function(event) {
        e = event || window.event;
        if (e.target == this) {
            $(p)
                .css("visibility", "hidden")
                .css("opacity", "0");
            toggleVideo("hide");
        }
    });

    $(".popup__close").click(function() {
        p.css("visibility", "hidden").css("opacity", "0");
        toggleVideo("hide");
    });
</script>

</body>
</html>