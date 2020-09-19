<?php
$this->title = "Home";
?>




    <!-- SLIDER START
    ============================================= -->
    <section id="slider" class="flexslider-wrap fullscreen clearfix">
        <div class="flexslider clearfix">
            <ul class="slides">
                <li data-thumb="img/content/slider/slide-sm-1.jpg">
                    <img src="img/content/slider/slide-lg-1.jpg" alt="" />
                </li>
                <li data-thumb="img/content/slider/slide-sm-2.jpg">
                    <img src="img/content/slider/slide-lg-2.jpg" alt="" />
                </li>
                <li data-thumb="img/content/slider/slide-sm-3.jpg">
                    <img src="img/content/slider/slide-lg-3.jpg" alt="" />
                </li>
                <li data-thumb="img/content/slider/slide-sm-4.jpg">
                    <img src="img/content/slider/slide-lg-4.jpg" alt="" />
                </li>
                <li data-thumb="img/content/slider/slide-sm-5.jpg">
                    <img src="img/content/slider/slide-lg-5.jpg" alt="" />
                </li>
            </ul>
        </div>

        <div class="slider-text-wrap vertical-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="slider-text wow fadeIn" data-wow-delay="0.5s">
                            <h2 class="wow fadeInLeft" data-wow-delay="1s">Gapura Villas</h2>
                            <p class="wow fadeIn" data-wow-delay="1.5s">123, Near Shammer Lake, New York - 10001</p>
                            <h3 class="wow fadeIn" data-wow-delay="2s">$1,799,000</h3>
                            <a href="contact.html" class="button-normal yellow wow fadeIn" data-wow-delay="2.5s">Schedule a Showing</a>
                        </div>
                    </div>

                    <div class="slider-form col-md-4 wow fadeIn text-center" data-wow-delay="0.5s">
                        <div class="form-wrap">
                            <div class="form-appointment">
                                <form method="post" action="contact.php">
                                    <input type="text" name="name" id="name" placeholder="Name" />
                                    <input type="text" name="email" id="email" placeholder="Email" />
                                    <textarea name="message" id="message" cols="10" rows="2" placeholder="Message"></textarea>
                                    <input type="text" id="datepicker" placeholder="Date">
                                    <button class="button-normal yellow">Make Appointment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SLIDER END -->

    <!-- CONTENT START
    ============================================= -->
    <section id="content" class="homepage clearfix">

        <!-- FEATURES START
        ============================================= -->
        <div class="features wrapper clearfix">
            <div class="container">
                <div class="row">
                    <div class="title text-center wow fadeIn">
                        <p class="subtitle">A few words about the house</p>
                        <h2><span class="bold">Property</span> Details</h2>
                    </div>

                    <div class="features-list">
                        <div class="features-item col-md-15 wow fadeIn text-center" data-wow-delay="0.3s">
                            <i class="icon icon-ruler"></i>
                            <h4>Square Feet</h4>
                            <p>2500</p>
                        </div>

                        <div class="features-item col-md-15 wow fadeIn text-center" data-wow-delay="0.6s">
                            <i class="icon icon-bed"></i>
                            <h4>Bedrooms</h4>
                            <p>3</p>
                        </div>

                        <div class="features-item col-md-15 wow fadeIn text-center" data-wow-delay="0.9s">
                            <i class="icon icon-bath"></i>
                            <h4>Bathrooms</h4>
                            <p>4</p>
                        </div>

                        <div class="features-item col-md-15 wow fadeIn text-center" data-wow-delay="1.2s">
                            <i class="icon icon-calendar"></i>
                            <h4>Year Built</h4>
                            <p>1996</p>
                        </div>

                        <div class="features-item col-md-15 wow fadeIn text-center" data-wow-delay="1.5s">
                            <i class="icon icon-car"></i>
                            <h4>Car Parking</h4>
                            <p>2</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURES END -->

        <!-- FACILITIES START
        ============================================= -->
        <div class="facilities clearfix" style="background-image: url();">

            <div class="facilities-detail wrapper wow fadeIn">
                <div class="title text-center">
                    <h2><span class="bold">Facilities</span> at Gapura Villas</h2>
                </div>

                <div class="facilities-content">
                    <p class="intro">Extensive upgrades and thorough maintenance have kept this home in prime condition. Hardwood floors and new carpets create a very comfortable living space.</p>

                    <div class="facilities-item">
                        <h3>Fabulous View</h3>
                        <p>Lorem ipsum dolor sit amet, begurcya syiute ipsum quia dolor sit amet. consectetur adipisci velit.</p>
                    </div>

                    <div class="facilities-item">
                        <h3>Large Playground</h3>
                        <p>Lorem ipsum dolor sit amet, begurcya syiute ipsum quia dolor sit amet. consectetur adipisci velit.</p>
                    </div>

                    <div class="facilities-item">
                        <h3>Quiet Neightbourhood</h3>
                        <p>Lorem ipsum dolor sit amet, begurcya syiute ipsum quia dolor sit amet. consectetur adipisci velit.</p>
                    </div>

                    <div class="facilities-item">
                        <h3>Swimming Pool</h3>
                        <p>Lorem ipsum dolor sit amet, begurcya syiute ipsum quia dolor sit amet. consectetur adipisci velit.</p>
                    </div>
                </div>

                <a href="contact.html" class="button-normal yellow">Contact Agent</a>
            </div>
        </div>
        <!-- FACILITIES END -->

        <!-- GALLERY START
        ============================================= -->
        <div class="gallery wrapper clearfix">
            <div class="container">

                <div class="title text-center wow fadeIn">
                    <h2><span class="bold">Room</span> Gallery</h2>
                </div>

                <section id="grid" class="grid clearfix">
                    <a href="room-detail.html" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                        <figure>
                            <img src="img/content/gallery/image1.jpg" />
                            <svg viewBox="0 0 180 500" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
                            <figcaption>
                                <h2>Living Room</h2>
                                <span>View</span>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="room-detail.html" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                        <figure>
                            <img src="img/content/gallery/image2.jpg" />
                            <svg viewBox="0 0 180 500" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
                            <figcaption>
                                <h2>Dining Room</h2>
                                <span>View</span>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="room-detail.html" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                        <figure>
                            <img src="img/content/gallery/image3.jpg" />
                            <svg viewBox="0 0 180 500" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
                            <figcaption>
                                <h2>Kitchen</h2>
                                <span>View</span>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="room-detail.html" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                        <figure>
                            <img src="img/content/gallery/image4.jpg" />
                            <svg viewBox="0 0 180 500" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
                            <figcaption>
                                <h2>Chat Room</h2>
                                <span>View</span>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="room-detail.html" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                        <figure>
                            <img src="img/content/gallery/image5.jpg" />
                            <svg viewBox="0 0 180 500" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
                            <figcaption>
                                <h2>Master Bedroom</h2>
                                <span>View</span>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="room-detail.html" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                        <figure>
                            <img src="img/content/gallery/image6.jpg" />
                            <svg viewBox="0 0 180 500" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
                            <figcaption>
                                <h2>Bathroom</h2>
                                <span>View</span>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="room-detail.html" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                        <figure>
                            <img src="img/content/gallery/image7.jpg" />
                            <svg viewBox="0 0 180 500" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
                            <figcaption>
                                <h2>Reading Room</h2>
                                <span>View</span>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="room-detail.html" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                        <figure>
                            <img src="img/content/gallery/image8.jpg" />
                            <svg viewBox="0 0 180 500" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
                            <figcaption>
                                <h2>Theatre Room</h2>
                                <span>View</span>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="room-detail.html" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                        <figure>
                            <img src="img/content/gallery/image9.jpg" />
                            <svg viewBox="0 0 180 500" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
                            <figcaption>
                                <h2>Garage</h2>
                                <span>View</span>
                            </figcaption>
                        </figure>
                    </a>
                </section>
            </div>
        </div>
        <!-- GALLERY END -->

    </section>
    <!-- CONTENT END -->





<?php
$script = <<< js
 (function() {
    
                function init() {
                    var speed = 300,
                        easing = mina.backout;

                    [].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
                        var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
                            pathConfig = {
                                from : path.attr( 'd' ),
                                to : el.getAttribute( 'data-path-hover' )
                            };

                        el.addEventListener( 'mouseenter', function() {
                            path.animate( { 'path' : pathConfig.to }, speed, easing );
                        } );

                        el.addEventListener( 'mouseleave', function() {
                            path.animate( { 'path' : pathConfig.from }, speed, easing );
                        } );
                    } );
                }

                init();

            })();
js;

$this->registerJS($script,\yii\web\View::POS_END);
