<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shapely
 */
get_header(); ?>
<?php $layout_class = shapely_get_layout_class();?>

    <body>

    <header>
        <video autoplay muted loop class="fullvideo-container" poster="https://imgur.com/lKlQQfN.jpg">
            <source src="https://player.vimeo.com/external/258886944.sd.mp4?s=cdffd17404b60618ee02044fd87a87dfeeb68d3f&profile_id=165&autoplay=1" type="video/mp4">
        </video>

        <div class="social-media">
            <a class="" href="https://twitter.com/_stemedia" target="_blank">
                <img class="social-icons" src="https://imgur.com/d9mXCno.jpg"  alt=""/>
            </a>
            <a class="" href="https://www.facebook.com/STEM.Media/" target="_blank">
                <img class="social-icons" src="https://imgur.com/zvtXyxR.jpg"  alt=""/>
            </a>
            <a class="" href="https://www.pinterest.com/stemedia/" target="_blank">
                <img class="social-icons" src="https://imgur.com/l86XDnS.jpg"  alt=""/>
            </a>
            <a class="" href="https://plus.google.com/+StemediaOrg" target="_blank">
                <img class="social-icons" src="https://imgur.com/DoSPNXG.jpg"  alt=""/>
            </a>
            <a class="" href="https://www.instagram.com/stemedia/" target="_blank">
                <img class="social-icons" src="https://imgur.com/nJnqI9X.jpg"  alt=""/>
            </a>
            <a class="" href="http://stemediainspiration.tumblr.com/" target="_blank">
                <img class="social-icons" src="https://imgur.com/N7piBWa.jpg"  alt=""/>
            </a>
            <a class="" href="https://www.youtube.com/channel/UCUcg8ZH-u4j3sHnVH6rUBqQ" target="_blank">
                <img class="social-icons" src="https://imgur.com/enJ43ug.jpg"  alt=""/>
            </a>
        </div>
        <div class="border-line">
            <a class="jumper" href="#four">
                <img class="logo-feat" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-feat3.png" alt=""/>
            </a>
        </div>
    </header>

    <section>
        <div class="text-center">
            <div class="banner">
                <div class="banner__heading">
                    <h1 class="head-post text-center decoration-dark head-text bottom-0">Technical Intelligence meets </br> Creative Genius </br>
                    <span>
                        <div id="popup__toggle">
                            <a class="vp-a" href="https://vimeo.com/259292743" target="_blank" rel="nofollow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/white-btn.png" alt="" /></a>
                        </div>
                    </span>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="community-banner ">
            <div class="wrapperjoke">
                <div id="three"></div>
                <div class="community-header comm-header-mobile">
                    <h3 class="community-header__headline ">Our Community</h3>
                    <p class="community-header__subheadline">Content for and from the STEM Community</p>
                </div>

                <div style="margin: 0 30px;">
                    <?php echo do_shortcode('[grid_plus name="GridPost"]'); ?>
                </div>

                <div class="green-box">
                    <a href="<?php echo get_home_url(); ?>/bloglist" class="green-btn">View All Blogs</a>
                </div>

                <div class="video-section">
                    <div class="color-overlay">
                        <div class="text-container2"></div>
                        <div class="video-section__header top-70 bottom-90">
                            <div class="hr-4"></div>
                            <p class="video-section__header--headline">Stemedia Originals</p>
                            <p class="video-section__header--subheadline mtop-20"><a class="orange-button hover-white" href="http://www.stemedia.org/submit-content">SUBMIT YOUR CONTENT</a></p>
                        </div>
                        <div class="flex-container3">

                            <div style="">
                                <div id="thumbnail-slider">
                                    <div class="inner">
                                        <ul>
                                            <li>
                                                <a class="thumb vp-a" href="https://vimeo.com/229929180" target="_blank" rel="nofollow"><img src="https://i.imgur.com/0qYXh4I.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="thumb vp-a" href="https://vimeo.com/229951557" target="_blank" rel="nofollow"><img src="https://i.imgur.com/8elhIe3.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="thumb vp-a" href="https://vimeo.com/230610982" target="_blank" rel="nofollow"><img src="https://i.imgur.com/h6vgRZU.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="thumb vp-a" href="https://www.youtube.com/watch?v=DYrsL4OJyTI" target="_blank" rel="nofollow"><img src="https://i.imgur.com/vUHu48Q.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="thumb vp-a" href="https://www.youtube.com/watch?v=jW0GTZcwYwE" target="_blank" rel="nofollow"><img src="https://i.imgur.com/b8erPzH.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="thumb vp-a" href="https://vimeo.com/229929180" target="_blank" rel="nofollow"><img src="https://i.imgur.com/0qYXh4I.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="thumb vp-a" href="https://vimeo.com/229951557" target="_blank" rel="nofollow"><img src="https://i.imgur.com/8elhIe3.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="thumb vp-a" href="https://vimeo.com/230610982" target="_blank" rel="nofollow"><img src="https://i.imgur.com/h6vgRZU.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="thumb vp-a" href="https://www.youtube.com/watch?v=DYrsL4OJyTI" target="_blank" rel="nofollow"><img src="https://i.imgur.com/vUHu48Q.jpg" alt=""></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <script>
                                //Note: this script should be placed at the bottom of the page, or after the slider markup. It cannot be placed in the head section of the page.
                                var thumbs1 = document.getElementById("thumbnail-slider");
                                var thumbs2 = document.getElementById("thumbs2");
                                var closeBtn = document.getElementById("closeBtn");
                                var slides = thumbs1.getElementsByTagName("li");
                                for (var i = 0; i < slides.length; i++) {
                                    slides[i].index = i;
                                    slides[i].onclick = function (e) {
                                        var li = this;
                                        var clickedEnlargeBtn = false;
                                        if (e.offsetX > 220 && e.offsetY < 25) clickedEnlargeBtn = true;
                                        if (li.className.indexOf("active") != -1 || clickedEnlargeBtn) {
                                            thumbs2.style.display = "block";
                                            mcThumbs2.init(li.index);
                                        }
                                    };
                                }

                                thumbs2.onclick = closeBtn.onclick = function (e) {
                                    //This event will be triggered only when clicking the area outside the thumbs or clicking the CLOSE button
                                    thumbs2.style.display = "none";
                                };
                            </script>
                        </div>

                        </div>
                        
                        <!--<?php echo do_shortcode("[MDSL id=1558]"); ?>-->
                    </div>
                </div>

                <div class="banner__down-arrow">
                    <a class="jumper" href="#four"><img class="top-60 bottom-30" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/down-arrow.png" alt=""/></a>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="white-box wehelp-header">
                <div id="four"></div>
                <h3 class="wehelp-header__headline">Who We’ve Helped</h3>
                <p class="wehelp-header__subheadline">Some of the people we have worked with</p>
            </div>

            <div class="text-container2 top-50">
                <div class="flex-container2">
                    <div class="row row__25 no-bottom"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/stateuniv.png" alt="" class="image-hover" /></div>
                    <div class="row row__25  no-bottom"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/campbell.png" alt="" class="image-hover" /></div>
                    <div class="row row__25  no-bottom"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/academy.png" alt="" class="image-hover" /></div>
                    <div class="row row__25  no-bottom"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/texas.png" alt="" class="image-hover" /></div>
                </div>

                <div class="flex-container2">
                    <div class="row row__25"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/NSBE.png" alt="" class="image-hover" /></div>
                    <div class="row row__25"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mytv.png" alt="" class="image-hover" /></div>
                    <div class="row row__25"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/intel.png" alt="" class="image-hover" /></div>
                    <div class="row row__25"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/imhotep.png" alt="" class="image-hover" /></div>
                </div>

                <div class="banner__down-arrow">
                    <a class="jumper" href="#five"><img class="top-60 bottom-30 blue-down-arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blue-down-arrow.png" alt=""/></a>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="service-banner">
            <div class="text-container">
                <div id="five"></div>
                <div class="service-header">
                    <h3 class="service-header__headline">Our Services</h3>
                </div>

                <div class="flex-container-ourservices">
                    <div class="flex-container-ourservices__mobile row row__33 box-white text-center service-shadow top-25">
                        <div class="video-production">
                            <a href="http://www.stemedia.org/work"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vpro-ic.png" alt=""/></a>
                            <p class="box-white__title no-bottom top-20">VIDEO PRODUCTION
                            </p>

                            <div class="hover">
                                <div class="hr-3 top-20"></div>
                                <p class="box-white__list top-20"><a href="http://www.stemedia.org/work" class="hover__orange">Concept Development</a></p>
                                <p class="box-white__list"><a href="http://www.stemedia.org/work" class="hover__orange">Script Writing</a></p>
                                <p class="box-white__list"><a href="http://www.stemedia.org/work" class="hover__orange">Filming and Editing</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="flex-container-ourservices__mobile row row__33 box-white text-center service-shadow top-40">
                        <div class="branded-content">
                            <a href="http://www.stemedia.org/work"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/brand-ic.png" alt=""/></a>
                            <p class="box-white__title no-bottom top-20">BRANDED CONTENT</p>

                            <div class="">
                                <div class="hr-3 top-20"></div>
                                <p class="box-white__list top-20"><a href="http://www.stemedia.org/work" class="hover__darkblue">Sponsored Blog Posts</a></p>
                                <p class="box-white__list"><a href="http://www.stemedia.org/work" class="hover__darkblue">Social Media</br>Content Creation</a></p>
                                <p class="box-white__list"><a href="http://www.stemedia.org/work" class="hover__darkblue">Advertising</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="flex-container-ourservices__mobile row row__33 box-white text-center service-shadow top-40">
                        <div class="live-events">
                            <a href="http://www.stemedia.org/work"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/event-ic.png" alt=""/></a>
                            <p class="box-white__title no-bottom top-20">LIVE EVENTS</p>

                            <div class="">
                                <div class="hr-3 top-20"></div>
                                <p class="box-white__list top-20"><a href="http://www.stemedia.org/work" class="hover__red">Keynotes and Lectures</a></p>
                                <p class="box-white__list"><a href="http://www.stemedia.org/work" class="hover__red">STEM Workshop</a></p>
                                <p class="box-white__list"><a href="http://www.stemedia.org/work" class="hover__red">Sponsored Experience</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    </body>

<?php
get_footer();
