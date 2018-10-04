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
        <video autoplay muted loop class="fullvideo-container" poster="https://i.imgur.com/kMMSqdv.jpg">
            <source src="https://player.vimeo.com/external/292294746.m3u8?s=b22b769c1a2f26dcad0dd837277898a8fe0c653e&autoplay=1" type="video/mp4">
            
             <!--<source src="https://player.vimeo.com/external/258886944.sd.mp4?s=cdffd17404b60618ee02044fd87a87dfeeb68d3f&profile_id=164&autoplay=1" type="video/mp4" style="opacity: 0.8; mix-blend-mode: multiply; filter: contrast(128%);">-->
            
            <!--         <source src="assets/videos/bg-video4.mp4" type="video/mp4">-->
            <!--        <source src="assets/videos/bg-video4.webm" type="video/webm">-->
        </video>

        <div class="social-media">
            <a class="" href="https://twitter.com/_stemedia" target="_blank">
                <img class="social-icons" src="https://i.imgur.com/mcqWJmc.jpg"  alt=""/>
            </a>
            <a class="" href="https://www.facebook.com/STEM.Media/" target="_blank">
                <img class="social-icons" src="https://i.imgur.com/kDJnv2C.jpg"  alt=""/>
            </a>
            <a class="" href="https://www.pinterest.com/stemedia/" target="_blank">
                <img class="social-icons" src="https://i.imgur.com/M3kSruo.jpg"  alt=""/>
            </a>
            <a class="" href="https://plus.google.com/+StemediaOrg" target="_blank">
                <img class="social-icons" src="https://i.imgur.com/vs53VXM.jpg"  alt=""/>
            </a>
            <a class="" href="https://www.instagram.com/stemedia/" target="_blank">
                <img class="social-icons" src="https://i.imgur.com/arsAnMn.jpg"  alt=""/>
            </a>
            <a class="" href="http://stemediainspiration.tumblr.com/" target="_blank">
                <img class="social-icons" src="https://i.imgur.com/mSaCW0D.jpg"  alt=""/>
            </a>
            <a class="" href="https://www.youtube.com/channel/UCUcg8ZH-u4j3sHnVH6rUBqQ" target="_blank">
                <img class="social-icons" src="https://i.imgur.com/p5lueRu.jpg"  alt=""/>
            </a>
        </div>
        <!-- <div class="border-line">
            <a class="jumper" href="#four">
                <img class="logo-feat" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-feat3.png" alt=""/>
            </a>
        </div> -->
    </header>

    <section>
        <div class="text-center">
            <div class="banner">
                <div class="banner__heading">
                    <h1 class="head-post text-center decoration-dark head-text bottom-0">Technical Intelligence</h1>
                    <p>A onestop media for science, technology, engineering and math. Watch the film and meet creative geniuses.</p>
                    <div><span>
                        <div id="popup__toggle">
                            <a class="vp-a" href="https://vimeo.com/259292743" target="_blank" rel="nofollow"><img class="play-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/play-btn.png" alt="" /></a>
                        </div>
                    </span></div>
                </div>
            </div>
        </div>

    </section>

    <!--<div class="banner__down-arrow">-->
    <!--    <a class="jumper z-top" href="#two"><img class="" style="padding-bottom: -20px;" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/images/down-arrow.png" alt=""/></a>-->
    <!--</div>-->

    <!--<section>-->
    <!--    <div class="white-box">-->
    <!---->
    <!--        <div class="flex-container flex-margin0">-->
    <!--            <div id="two"></div>-->
    <!--            <div class="row row__50 orange-bg">-->
    <!--                <div class="top-50 marginl-20 bottom-10 mobile-margin45">-->
    <!--                    <h2 class="text-white font-700 decoration-stem">-->
    <!--                        STEMedia™</br>-->
    <!--                        STEM•Media <span class="font-40"></span>-->
    <!--                    </h2>-->
    <!--                    <p class="font-500 letter-spacing bottom-10 top-15 border-responsive"> Creative x Inspirational content for the Science, Technology,</br> Engineering, & Math (STEM) community!-->
    <!--                    </p>-->
    <!---->
    <!--                    <div class="white-button" id="popup__toggle">-->
    <!--                        <img class="white-button__img" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/images/media-button.png" alt="" />-->
    <!--                        <h5 class="white-button__text decoration-none text-orange font-500" >Who is STEMedia?</h5>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="row row__50">-->
    <!--                <img class="video-mobile" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/images/video-mobile.png"  alt="">-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="popup__overlay">-->
    <!--        <div class="popup" id="popupVid">-->
    <!--            <a href="#" class="popup__close">X</a>-->
    <!--            <iframe width="854" height="480" src="https://www.youtube.com/embed/nbREm52cjXk?autoplay=1&loop=1&mute=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <section class="">
        <div class="community-banner ">
            <div class="wrapperjoke">
                <div id="three"></div>
                <div class="community-header comm-header-mobile">
                    <h3 class="community-header__headline ">Our Community</h3>
                    <p class="community-header__subheadline">Content for and from the STEM Community</p>
                </div>

                <!--<div class="community-project">-->
                <!--    <div class="flex-container-comm mtop-35">-->

                <!--        <div class="row row__50 mobile-full">-->
                <!--            <div class="project project__1st" onclick="window.location='http://stemedia.org/the-truth-behind-your-favorite-makeup-brands/';">-->
                <!--                <p class="project__title1 no-bottom add-16"><a class="project-mobile project__title1 no-bottom add-16 decoration-none" href="http://stemedia.org/the-truth-behind-your-favorite-makeup-brands/">The Truth Behind Your Favorite Makeup Brands</a></p>-->
                <!--                <p class="date-mobile project__date1 no-bottom">Cynthia M. Sharpe - December (2017)</p>-->
                <!--                <div class="project__comment">-->
                <!--                    <img class="ic-mobile project__comment--ic" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/p1-com.png" alt=""/>-->
                <!--                    <p class="comment-mobile project__comment--content">0 Comments</p>-->
                <!--                    <a href="" target="_blank"><img class="avatar-mobile project__comment--avatar" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/p1-ic.png" alt=""/></a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->

                <!--        <div class="row row__50 mobile-full add-2">-->
                <!--            <div class="project project__2nd" onclick="window.location='http://stemedia.org/heres-why-you-should-watch-more-scifi-movies/';">-->
                <!--                <p><a class="project-mobile project__title no-bottom decoration-none" href="http://stemedia.org/heres-why-you-should-watch-more-scifi-movies/">Here’s Why You Should Watch More Scifi Movies</a></p>-->
                <!--                <p class="date-mobile project__date bottom-7__mobile no-bottom">Khalid Birdsong - December (2017)</p>-->
                <!--                <div class="project__comment">-->
                <!--                    <img class="ic-mobile project__comment--ic" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/p1-com.png" alt=""/>-->
                <!--                    <p class="comment-mobile">0 Comments</p>-->
                <!--                    <img class="avatar-mobile project__comment--avatar" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/p2-ic.png" alt=""/>-->
                <!--                </div>-->
                <!--            </div>-->

                <!--            <div class="flex-container-comm mobile-50">-->
                <!--                <div class="project project__3rd row row__50 mobile-full add-2" onclick="window.location='http://stemedia.org/stem-in-the-kitchen-improve-your-cooking-with-science/';">-->
                <!--                    <p><a class="project-mobile project__title2 no-bottom decoration-none" href="http://stemedia.org/stem-in-the-kitchen-improve-your-cooking-with-science/">STEM in the Kitchen: Improve Your Cooking with Science!</a></p>-->
                <!--                    <p class="date-mobile project__date3 no-bottom">J.C - December (2017)</p>-->
                <!--                    <img class="hr1" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hr-line.png" alt=""/>-->
                <!--                    <p class="text-white mobile-font1 no-bottom "> </p>-->
                <!--                    <div class="project__comment">-->
                <!--                        <img class="ic-mobile project__comment--ic" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/p1-com.png" alt=""/>-->
                <!--                        <p class="comment-mobile project__comment--content2">0 Comments</p>-->
                <!--                        <img class="avatar-mobile right" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/p3-ic.png" alt=""/>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="row row__50 project project__4th mobile-full add-2" onclick="window.location='http://stemedia.org/critical-thinker-elements-of-an-elite-stem-professional-5/';">-->
                <!--                    <p ><a class="project-mobile project__title2 no-bottom top-7 top-7__mobile decoration-none" href="http://stemedia.org/critical-thinker-elements-of-an-elite-stem-professional-5/">"Critical Thinker" | Elements of an Elite STEM Professional (#5)</a></p>-->
                <!--                    <p class="date-mobile project__date3 no-bottom">Ricky D. Venters, Jr. P.E. - December (2017)</p>-->
                <!--                    <div class="project__comment top-4">-->
                <!--                        <img class="ic-mobile project__comment--ic" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/p1-com.png" alt=""/>-->
                <!--                        <p class="comment-mobile project__comment--content2">0 Comments</p>-->
                <!--                        <img class="avatar-mobile right" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/p3-ic.png" alt=""/>-->
                <!--                    </div>-->
                <!--                </div>-->

                <!--            </div>-->
                <!--        </div>-->

                <!--    </div>-->
                <!--</div>-->

                <!--<div class="flex-container-comm flex-30">-->
                <!--    <div class="row__25 project project__5th" onclick="window.location='http://stemedia.org/confidence-elements-of-an-elite-stem-professional-6/';">-->
                <!--        <p ><a class="project-mobile project__title2 no-bottom decoration-none" href="http://stemedia.org/confidence-elements-of-an-elite-stem-professional-6/">"Confidence" | Elements of an Elite STEM Professional (#6</a>)</p>-->
                <!--        <p class="date-mobile project__date3 no-bottom">Ricky D. Venters, Jr. P.E. - December (2017)</p>-->
                <!--        <div class="project__comment no-bottom">-->
                <!--            <img class="ic-mobile project__comment--ic" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/comment-ic.png" alt=""/>-->
                <!--            <p class="comment-mobile project__comment--content2">0 Comments</p>-->
                <!--            <img class="avatar-mobile right" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/p5-ic.png" alt=""/>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="row row__50 project project__6th mobile-full" onclick="window.location='http://stemedia.org/the-pursuit-of-inspiration/';">-->
                <!--        <p ><a class="project-mobile project__title6 top-7 no-bottom decoration-none" href="http://stemedia.org/the-pursuit-of-inspiration/">The Pursuit of Inspiration</a></p>-->
                <!--        <p class="date-mobile project__date3 no-bottom">Caila Hollley - June 2016</p>-->
                <!--        <div class="project__comment top-7__mobile">-->
                <!--            <img class="ic-mobile project__comment--ic" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/p1-com.png" alt=""/>-->
                <!--            <p class="comment-mobile">0 Comments</p>-->
                <!--            <img class="avatar-mobile right" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/p6-ic.png" alt=""/>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="row__25 project project__7th" onclick="window.location='http://stemedia.org/reach-your-resolutions/';">-->
                <!--        <p><a class="project-mobile project__title2 no-bottom decoration-none" href="http://stemedia.org/reach-your-resolutions/">Reach Your Resolutions!</a></p>-->
                <!--        <p class="date-mobile project__date3 no-bottom">Cynthia Sharpe - December 2016</p>-->
                <!--        <div class="project__comment no-bottom">-->
                <!--            <img class="ic-mobile project__comment--ic" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/comment-ic.png" alt=""/>-->
                <!--            <p class="comment-mobile project__comment--content2">0 Comments</p>-->
                <!--            <img class="avatar-mobile right" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/p7-ic.png" alt=""/>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                
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

                            <!--<div class="row row__33 mobile-full">-->
                            <!--    <div class="video-container vsl-video">-->
                            <!--        <div class="videoWrapper">-->
                            <!--            <iframe width="854" height="480" src="https://www.youtube.com/embed/zDappKOl2fg" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="row row__33 mobile-full">-->
                            <!--    <div class="video-container vsl-video">-->
                            <!--        <div class="videoWrapper">-->
                            <!--            <iframe width="854" height="480" src="https://www.youtube.com/embed/9BshxkR4iKo" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="row row__33 mobile-full">-->
                            <!--    <div class="video-container vsl-video">-->
                            <!--        <div class="videoWrapper">-->
                            <!--            <iframe width="854" height="480" src="https://www.youtube.com/embed/MNGTCPHWMGQ" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->

                            <div style="">
                                <div id="thumbnail-slider">
                                    <div class="inner">
                                        <ul>
                                            <li>
                                                <a class="thumb vp-a" href="https://vimeo.com/229951557?autoplay=1&quality=360p" target="_blank" rel="nofollow"><img src="https://i.imgur.com/XPt188U.jpg" alt=""></a>
                                                
                                            </li>
                                            <li>
                                                <a class="thumb vp-a" href="https://vimeo.com/230610982?autoplay=1&quality=360p" target="_blank" rel="nofollow"><img src="https://i.imgur.com/WeX4urh.jpg" alt=""></a>
                                            </li>
                                            
                                            <li>
                                                <a class="thumb vp-a" href="https://www.youtube.com/watch?v=DYrsL4OJyTI" target="_blank" rel="nofollow"><img src="https://i.imgur.com/zAutO8W.jpg" alt=""></a>
                                            </li>
                                    
                                            <li>
                                                <a class="thumb vp-a" href="https://www.youtube.com/watch?v=jW0GTZcwYwE" target="_blank" rel="nofollow"><img src="https://i.imgur.com/sXqtuO3.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="thumb vp-a" href="https://vimeo.com/229929180?autoplay=1&quality=360p" target="_blank" rel="nofollow"><img src="https://i.imgur.com/jPgVq1I.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="thumb vp-a" href="https://vimeo.com/229951557?autoplay=1&quality=360p" target="_blank" rel="nofollow"><img src="https://i.imgur.com/XPt188U.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="thumb vp-a" href="https://vimeo.com/230610982?autoplay=1&quality=360p" target="_blank" rel="nofollow"><img src="https://i.imgur.com/WeX4urh.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="thumb vp-a" href="https://www.youtube.com/watch?v=DYrsL4OJyTI?autoplay=1&quality=360p" target="_blank" rel="nofollow"><img src="https://i.imgur.com/zAutO8W.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="thumb vp-a" href="https://vimeo.com/229929180?autoplay=1&quality=360p thankyouvid    " target="_blank" rel="nofollow"><img src="https://i.imgur.com/sXqtuO3.jpg" alt=""></a>
                                            </li>
                                          

                                        </ul>
                                    </div>
                                </div>
                                <!--   <div id="thumbs2" style="display:none;">-->
                                <!--       <div class="inner">-->
                                <!--           <ul>-->
                                <!--               <li>-->
                                <!--                   <iframe src="https://player.vimeo.com/video/229929180" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
                                <!--               </li>-->
                                <!--               <li>-->
                                <!--                   <iframe src="https://player.vimeo.com/video/229951557" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
                                <!--               </li>-->
                                <!--               <li>-->
                                <!--                   <iframe src="https://player.vimeo.com/video/230610982" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
                                <!--               </li>-->
                                <!--               <li>-->
                                <!--                   <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/DYrsL4OJyTI?ecver=2" style="position:absolute;width:100%;height:100%;left:0" width="640" height="360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>-->
                                <!--               </li>-->
                                <!--               <li>-->
                                <!--                   <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/jW0GTZcwYwE?ecver=2" style="position:absolute;width:100%;height:100%;left:0" width="640" height="360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>-->
                                <!--               </li>-->
                                <!--<li>-->
                                <!--                   <a class="thumb" href="img/1.jpg"></a>-->
                                <!--               </li>-->
                                <!--           </ul>-->
                                <!--       </div>-->
                                <!--       <div id="closeBtn">CLOSE</div>-->
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
