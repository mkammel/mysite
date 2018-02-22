<?php include 'includes/config.php'; ?>
<!doctype html>
<html lang="">
    <head>
        <?php include 'includes/header.php'; ?>
        <?php
        function portfolioItem() {
            echo '<div class="portfolio-item active" id="portfolio-1" style="left: 0; top: 0;">
                <div class="overlay open">
                    <div class="title overlay-text">
                        <h1>branding:<br />oakhearth</h1>
                        <div class="overlay-links">
                            <a href="https://www.behance.net/gallery/51175509/Oakhearth-Brand-Identity" target="_blank">
                                <i class="fa fa-behance-square" aria-hidden="true"></i>
                                <span>behance</span>
                            </a>
                            <a href="https://mkammel.wixsite.com/oakhearth" target="_blank">
                                <i class="fa fa-external-link-square" aria-hidden="true"></i>
                                <span>external</span>
                            </a>
                            <a href="img/PDF/OakFull.pdf" target="_blank">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                <span>pdf</span>
                            </a>
                        </div>
                    </div>
                </div>
                <img src="img/portfolio/oak1.jpg" />
            </div>';
        }
            //TODO: Turn the portfolio items into a js / php template to prevent duplicated work
            $portfolio_items = array(
                //first portfolio item
                array(

                )
            );
        ?>
    </head>
    <body id="portfolio-page">
        <div class="container">
            <img src="img/middle.svg" class="middle-knot" />
            <!--[if lt IE 9]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <div class="row">
                <?php include 'includes/nav.php'; ?>

                <div class="col-md-6 content" >
                    <div id="portfolio-wrapper">
                        <div class="portfolio-item active" id="portfolio-1" style="left: 0; top: 0;">
                            <div class="overlay open">
                                <div class="title overlay-text">
                                    <h1>branding:<br />oakhearth</h1>
                                    <div class="overlay-links three">
                                        <a href="img/PDF/OakFull.pdf" target="_blank">
                                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                            <span>view as pdf</span>
                                        </a>
										<a href="https://www.behance.net/gallery/51175509/Oakhearth-Brand-Identity" target="_blank">
                                            <i class="fa fa-behance-square" aria-hidden="true"></i>
                                            <span>view on behance</span>
                                        </a>
										<a href="https://mkammel.wixsite.com/oakhearth" target="_blank">
                                            <i class="fa fa-external-link-square" aria-hidden="true"></i>
                                            <span>mock business site</span>
                                        </a>                                        
                                    </div>
                                </div>
                            </div>
                            <img src="img/portfolio/oak1.jpg" />
                        </div>
                        <div class="portfolio-item" id="portfolio-2" style="left: 74%; top: 0;">
                            <div class="overlay">
                                <div class="title overlay-text">
                                    <h1>app design:<br />cache</h1>
                                    <div class="overlay-links two">
                                        <a href="img/PDF/Cache.pdf" target="_blank">
                                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                            <span>view as pdf</span>
                                        </a>
										<a href="https://www.behance.net/gallery/56651975/Cache" target="_blank">
                                            <i class="fa fa-behance-square" aria-hidden="true"></i>
                                            <span>view on behance</span>
                                        </a>                                        
                                    </div>
                                </div>
                            </div>
                            <img src="img/portfolio/cache1.jpg" />
                        </div>


                        <div class="portfolio-item" id="portfolio-3" style="left: 74%; top: 34%;">
                            <div class="overlay">
                                <div class="title overlay-text">
                                    <h1>app design:<br />whether</h1>
                                    <div class="overlay-links two">
                                        <a href="img/PDF/whether.pdf" target="_blank">
                                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                            <span>view as pdf</span>
                                        </a>
										<a href="https://www.behance.net/gallery/59012989/Whether-App-Design" target="_blank">
                                            <i class="fa fa-behance-square" aria-hidden="true"></i>
                                            <span>view on behance</span>
                                        </a> 
                                    </div>
                                </div>
                            </div>
                            <img src="img/portfolio/whether1.jpg" />
                        </div>
                        <div class="portfolio-item" id="portfolio-4" style="left: 0; top: 66%;">
                            <div class="overlay">
                                <div class="title overlay-text">
                                    <h1>web design:<br />zebco</h1>
                                    <div class="overlay-links one">
                                        <a href="img/PDF/Zebco.pdf" target="_blank">
                                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                            <span>view as pdf</span>
                                        </a>
										<a href="https://www.behance.net/gallery/59012005/Zebco-Redesign" target="_blank">
                                            <i class="fa fa-behance-square" aria-hidden="true"></i>
                                            <span>view on behance</span>
                                        </a> 
                                    </div>
                                </div>
                            </div>
                            <img src="img/portfolio/zebco1.jpg" />
                        </div>


                        <div class="portfolio-item" id="portfolio-5" style="left: 38%; top: 66%;">
                            <div class="overlay">
                                <div class="title overlay-text">
                                    <h1>print design:<br />Crazy Lenny's</h1>
                                    <div class="overlay-links one">
                                        <a href="img/PDF/Lenny1.pdf" target="_blank">
                                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                            <span>view as pdf</span>
                                        </a>
										<a href="https://www.behance.net/gallery/59012785/Crazy-Lennys-Official-E-Bike-Handbook" target="_blank">
                                            <i class="fa fa-behance-square" aria-hidden="true"></i>
                                            <span>view on behance</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <img src="img/portfolio/lennys1.jpg" />
                        </div>
                        <div class="portfolio-item" id="portfolio-6" style="left: 74%; top: 66%;">
                            <div class="overlay">
                                <div class="title overlay-text">
                                    <h1>poster design:<br />paranormal activity</h1>
                                    <div class="overlay-links one">
                                        <a href="img/PDF/Ex6.pdf" target="_blank">
                                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                            <span>view pdf</span>
                                        </a>
										<a href="https://www.behance.net/gallery/59012637/Paranormal-Activity-The-Lost-Soul" target="_blank">
                                            <i class="fa fa-behance-square" aria-hidden="true"></i>
                                            <span>view on behance</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <img src="img/portfolio/para1.jpg" />
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <h1 class="thank-you"><span>Thanks</span> for viewing<span>!</span></h1>

					<img src="img/knot2.svg" class="content-knot mobile-hide" />

                    <?php include 'includes/copyright.php'; ?>
                </div>

                <?php include 'includes/contact-info.php'; ?>
            </div>
        </div>

        <script>
            jQuery(document).ready(function($){
                $('.portfolio-item').click(function(e){

                    //dont target active items
                    if($(this).hasClass('active')) return true;

                    //current target
                    var currentActive = {
                        left: $('.portfolio-item.active')[0].style.left,
                        top: $('.portfolio-item.active')[0].style.top,
                    }

                    //new target
                    var newActive = {
                        left: $(this)[0].style.left,
                        top: $(this)[0].style.top,
                    }

                    var $overlay = $(this).find('.overlay');

                    $('.overlay.open').removeClass('open');

                    //move current item
                    $('.portfolio-item.active').css('left', newActive.left).css('top', newActive.top);
                    $('.portfolio-item.active').removeClass('active');
                    $('.portfolio-item .overlay').removeClass('open');

                    //move new item
                    $(this).css('left', currentActive.left).css('top', currentActive.top);
                    $(this).addClass('active');

                    //add delay before opening the overlay to prevent strange interactions
                    setTimeout(function(){
                        $overlay.addClass('open');
                    }, 400);

                });
            });
        </script>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>
