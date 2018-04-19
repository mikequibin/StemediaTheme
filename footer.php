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

<!--<div class="footer-callout">-->
<!--	--><?php //shapely_footer_callout(); ?>
<!--</div>-->

<!--<footer id="colophon" class="site-footer footer bg-dark" role="contentinfo">-->
<!--	<div class="container footer-inner">-->
<!--		<div class="row">-->
<!--			--><?php //get_sidebar( 'footer' ); ?>
<!--		</div>-->
<!---->
<!--		<div class="row">-->
<!--			<div class="site-info col-sm-6">-->
<!--				<div class="copyright-text">-->
<!--					--><?php //echo wp_kses_post( get_theme_mod( 'shapely_footer_copyright' ) ); ?>
<!--				</div>-->
<!--				<div class="footer-credits">-->
<!--					--><?php //shapely_footer_info(); ?>
<!--				</div>-->
<!--			</div><!-- .site-info -->
<!--			<div class="col-sm-6 text-right">-->
<!--				--><?php //shapely_social_icons(); ?>
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->

<!--	<a class="btn btn-sm fade-half back-to-top inner-link" href="#top"><i class="fa fa-angle-up"></i></a>-->

<!--<footer>-->
<!--    <div class="footer">-->
<!--        <div class="">-->
<!--            <div class="floatleft">-->
<!--                <a href=""><img class="stem-logo float" src="../assets/images/logo-footer.png" alt=""/></a>-->
<!--            </div>-->
<!---->
<!--            <div class="floatright">-->
<!--                <div class="footer__navbar">-->
<!--                    <ul class="checklist--footer top-45 top-45__footer-mobile">-->
<!--                        <li class="checklist__item float left-23"><a class="font-700 decoration-none text-blue txt-2"  href="#two">About</a></li>-->
<!--                        <li class="checklist__item float left-23"><a class="font-700 decoration-none text-blue txt-2" href="#three">Blog</a></li>-->
<!--                        <li class="checklist__item float left-23"><a class="font-700 decoration-none text-blue txt-2" href="#four">Work</a></li>-->
<!--                        <li class="checklist__item float left-23"><a class="font-700 decoration-none text-blue txt-2" href="">Contact</a></li>-->
<!--                        <li class="checklist__item float left-23"><a class="font-700 decoration-none text-blue txt-2" href="https://www.ideationproducts.com/" target="_blank">Shop</a></li>-->
<!--                    </ul>-->
<!---->
<!--                    <div class="footer__navbar--submit">-->
<!--                        <a class="text-white decoration orange-ic" href="">Submit Content</a>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div>-->
<!--        <img class="footer-barline" src="../assets/images/footer-barline.png" alt=""/>-->
<!--    </div>-->
<!---->
<!--    <div class="footer footer__top top-20">-->
<!--        <div class="row__50 left-23">-->
<!--            <p class="font-700 text-gray copyright">Copyright © 2017 STEMedia ® </p>-->
<!--        </div>-->
<!---->
<!--        <div class="row row__50 floatright">-->
<!--            <div class="footer-icons">-->
<!--                <a href="https://www.instagram.com/_stemedia/" target="_blank"><img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/images/footer-ig.png" alt=""/></a>-->
<!--                <a href="https://www.facebook.com/STEM.Media/" target="_blank"><img src="../wp-content/themes/newstem/assets/images/footer-fb.PNG" alt=""/></a>-->
<!--                <a href="https://twitter.com/_STEMedia" target="_blank"><img src="../assets/images/twitter-footer.png" alt=""/></a>-->
<!--                <a href="https://www.youtube.com/stemediaorg" target="_blank"><img src="../assets/images/youtube-footer.png" alt=""/></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->

<footer>
    <div class="flex-container flex-container__footer">
        <div class="row__68">
            <ul class="top-30 top-30 footer--mobile footer-mob">
                <li class="checklist__item float">
                    <a class="font-700 decoration-none text-blue txt-2" href="">ABOUT</a>
                </li>
                <li class="checklist__item float">
                    <a class="font-700 decoration-none text-blue txt-2" href="">BLOG</a>
                </li>
                <li class="checklist__item float">
                    <a class="font-700 decoration-none text-blue txt-2" href="">WORK</a>
                </li>
                <li class="checklist__item float">
                    <a class="font-700 decoration-none text-blue txt-2" href="">CONTACT</a>
                </li>
                <li class="checklist__item float">
                    <a class="font-700 decoration-none text-blue txt-2" href="">SHOP</a>
                </li>
                <li class="checklist__item float">
                    <a class="font-700 decoration-none text-blue txt-2" href="">SUBMIT CONTENT</a>
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