<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil - Hotel Spa</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- Off Canvas -->
    <div class="off-canvas-wrapper">
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <!-- Conteneur de Menu -->
        <div class="off-canvas position-left" id="offCanvas" data-off-canvas data-position="left">
          <h3 class="text-center">Navigation</h3>
          <!-- Menu -->
          <ul class="vertical menu" data-drilldown data-parent-link="true" data-back-button='<li class="js-drilldown-back"><a>Retour</a></li>'>
            <li><a class="index-link" href="index.html">Home</a></li>
            <li><a class="about-link" href="about.html">About Us</a></li>
            <li><a class="services-link" href="services.html">Services</a></li>
            <li class="has-submenu is-drilldown-submenu-parent"><a href="#">Rooms</a>
              <ul class="menu vertical">
                <li><a id="room-01-link" href="room-01.html">Room 01</a></li>
                <li><a id="room-02-link" href="room-02.html">Room 02</a></li>
                <li><a id="room-03-link" href="room-03.html">Room 03</a></li>
                <li><a id="room-04-link" href="room-04.html">Room 04</a></li>
                <li><a id="room-05-link" href="room-05.html">Room 05</a></li>
                <li><a id="room-06-link" href="room-06.html">Room 06</a></li>
              </ul>
            </li>
            <li><a class="contact-link" href="contact.html">Contact</a></li>
          </ul>
        </div><!-- /Conteneur de Menu -->

        <!-- Conteneur de page Off-canvas-content -->
        <div class="off-canvas-content" data-off-canvas-content>
          <!-- Heder -->
          <header class="row expanded">
            <!-- Banière vidéo --> 
            <div class="promo-video">
              <div id="overlay"></div>
              <?php 
                while(have_posts()): the_post();
                  the_content();
                endwhile;
              ?>
            </div>

            <!-- Logo et button hamburger -->
            <div class="header-content">
              <div class="row align-justify align-middle">
              <!-- Logo --> 
                <div class="medium-4 columns">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="logo">
                </div><!-- /Logo -->

                <!-- Menu icon hamburger -->
                <div class="medium-4 column text-right">
                  <a class="menu-icon text-align-right" data-toggle="offCanvas"></a>
                </div><!-- /Menu icon hamburger -->
              </div>
            </div><!-- /.header-content -->

            <!-- Contenu d'en-tête slogan -->
            <div class="headliner row">
              <div class="small-10">
                <h1 class="text-center"><span class="hide">Hotel &amp; Spa</span>Passion for Excellence</h1>
              </div>
            </div><!-- /.headliner -->
          </header><!-- /header -->

          <!-- Rooms Section -->
          <section class="rooms row align-right">
            <h2 class="text-left">Our Rooms</h2>

            <!-- Rooms Container -->
            <div class="rooms-container row align-center small-up-1 medium-up-2 large-up-3">

              <!-- container room 1 -->
              <article class="room-container column">
                <figure class="room-image">
                  <img src="assets/images/rooms/room-01.jpg" alt="Room 1">
                  <figcaption class="room-title">
                    <h3>Room 1</h3>
                  </figcaption><!-- /room-title -->
                </figure><!-- /room-image -->
                <div class="room-content">
                  <p>Phasellus cursus, est vitae auctor faucibus, metus lacus rhoncus metus, sed commodo ante mi id dui. Suspendisse.</p>
                </div><!-- /room-content -->
              </article><!-- /container room 1 -->

              <!-- container room 2 -->
              <article class="room-container column">
                <figure class="room-image">
                  <img src="assets/images/rooms/room-02.jpg" alt="Room 1">
                  <figcaption class="room-title">
                    <h3>Room 2</h3>
                  </figcaption><!-- /room-title -->
                </figure><!-- /room-image -->
                <div class="room-content">
                  <p>Phasellus cursus, est vitae auctor faucibus, metus lacus rhoncus metus, sed commodo ante mi id dui. Suspendisse.</p>
                </div><!-- room-content -->
              </article><!-- /container room 2 -->

              <!-- container room 3 -->
              <article class="room-container column">
                <figure class="room-image">
                  <img src="assets/images/rooms/room-03.jpg" alt="Room 1">
                  <figcaption class="room-title">
                    <h3>Room 3</h3>
                  </figcaption><!-- /room-title -->
                </figure><!-- /room-image -->
                <div class="room-content">
                  <p>Phasellus cursus, est vitae auctor faucibus, metus lacus rhoncus metus, sed commodo ante mi id dui. Suspendisse.</p>
                </div><!-- /room-content -->
              </article><!-- container room 3 -->
            </div><!-- /Rooms Container -->

            <a href="rooms.html" class="align-right button">View All</a>
          </section><!-- /Rooms Section -->

          <!-- Separator image pool image -->
          <div class="separator-image pool-image"></div>

          <!-- About Us and Gallery -->
          <section class="row about-us-gallery expanded">
            <!-- Background blue -->
            <div class="bg-blue"></div>

            <!-- Flex Container About Us and Gallery  -->
            <div class="row flex-container flex-dir-column medium-flex-dir-row">

              <!-- About Us -->
              <div class="about-us">
                <h2>About Us</h2>
                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent a tortor vulputate tellus lacinia sagittis. Donec varius quam magna, ut tristique ipsum gravida non.</p>
                <p>Donec blandit scelerisque nisl, in fermentum leo volutpat et. Ut metus lorem, tempus nec dictum vitae, suscipit et libero.ed accumsan, eros ut mattis sodales, dolor quam ornare dui, et malesuada mi purus nec est. Vestibulum semper turpis leo. Etiam mauris leo, vulputate a euismod ut, tincidunt ac nisi. Mauris nec convallis diam, vel varius augue. Cras faucibus mauris in nibh convallis aliquet.</p>
              </div>
              <!-- /About Us -->


              <!-- Gallery -->
              <div class="gallery" id="gallery">
                <h2 class="">Gallery</h2>
                <div class="row small-up-2 large-up-3">
                  <div class="columns">
                    <a data-open="modal-gallery">
                      <img class="thumbnail" src="assets/images/gallery/thumbnail/image01.jpg" alt="">
                    </a>
                  </div>
                  <div class="columns">
                    <a data-open="modal-gallery">
                      <img class="thumbnail" src="assets/images/gallery/thumbnail/image02.jpg" alt="">
                    </a>
                  </div>
                  <div class="columns">
                    <a data-open="modal-gallery">
                      <img class="thumbnail" src="assets/images/gallery/thumbnail/image03.jpg" alt="">
                    </a>
                  </div>
                  <div class="columns">
                    <a data-open="modal-gallery">
                      <img class="thumbnail" src="assets/images/gallery/thumbnail/image04.jpg" alt="">
                    </a>
                  </div>
                  <div class="columns">
                    <a data-open="modal-gallery">
                      <img class="thumbnail" src="assets/images/gallery/thumbnail/image05.jpg" alt="">
                    </a>
                  </div>
                  <div class="columns">
                    <a data-open="modal-gallery">
                      <img class="thumbnail" src="assets/images/gallery/thumbnail/image06.jpg" alt="">
                    </a>
                  </div>
                </div>

                <!-- Modal container -->
                <div class="modal-gallery reveal" id="modal-gallery" data-reveal data-close-on-click="true" data-animation-in="scale-in-up" data-animation-out="scale-out-down">
                  <button class="button round" data-close aria-label="Close reveal" type="button">
                    <!-- Screen readers will see "close" -->
                    <span class="show-for-sr">Close</span>
                    <!-- Visual users will see the X, but not the "Close" text -->
                    <span class="" aria-hidden="true"><i class="fi-x"></i></span>
                  </button>
                  <img src=""  id="image-container">
                </div><!-- /Modal container -->
              </div><!-- /Gallery -->
            </div><!-- Flex Container About Us and Gallery  -->
          </section><!-- /About Us and Gallery -->

          <!-- Separator image bar image-->
          <div class="separator-image bar-image"></div>

          <!-- Book Now -->
          <section id="book-now" class="book-now row align-center text-center">
            <div class="large-8 columns">
              <h2>Book Now</h2>
              <article>
                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent a tortor vulputate tellus lacinia sagittis. Donec varius quam magna, ut tristique ipsum gravida non. Mauris tincidunt tellus nec rhoncus dictum. Suspendisse non varius est.</p>
              </article>
              <button class="button" data-open="modal-book">Book Now</button>
            </div>

            <!-- Modal container -->
            <div class="reveal" id="modal-book" data-reveal data-animation-in="scale-in-up">
              <button class="button round" data-close aria-label="Close reveal" type="button">
                <!-- Screen readers will see "close" -->
                <span class="show-for-sr">Close</span>
                <!-- Visual users will see the X, but not the "Close" text -->
                <span class="" aria-hidden="true"><i class="fi-x"></i></span>
              </button>
              <h2 class="columns">Booking Form</h2>
              <form data-abide novalidate data-live-validate="true" data-validate-on-blur="true">
                <div class="row small-up-1 medium-up-2">
                    <label class="columns" for="first-name">First Name
                      <input id="first-name" type="text" placeholder="Your First Name" required>
                      <span class="form-error">
                        <i class="fi-alert"></i> this it's required.
                      </span>
                    </label>
                    <label class="columns" for="last-name">Last Name
                      <input id="last-name" type="text" placeholder="Your Last Name" required>
                      <span class="form-error">
                        <i class="fi-alert"></i> this it's required.
                      </span>
                    </label>
                    <label class="columns" for="email">E-mail
                      <input id="email" type="email" placeholder="Your Email" required>
                      <span class="form-error">
                        <i class="fi-alert"></i> this it's required.
                      </span>
                    </label>
                    <label class="columns" for="phone">Phone Number
                      <input id="phone" type="tel" placeholder="Your Phone Number" required>
                      <span class="form-error">
                        <i class="fi-alert"></i> this it's required.
                      </span>
                    </label>
                </div>
                <div class="row">
                  <label class="columns" for="message">Message
                    <textarea name="message" id="message" rows="8" placeholder="Your Message" required></textarea>
                    <span class="form-error">
                        <i class="fi-alert"></i> this it's required.
                      </span>
                  </label>
                </div>
                <div class="row align-spaced box-button">
                  <button class="hollow button" type="reset">Reset</button>
                  <button class="button" type="submit">Submit</button>
                </div>
              </form>

            </div><!-- /Modal container -->
          </section><!-- /Book Now -->

          <!-- footer -->
          <footer class="bg-blue">
            <div class="footer-container row align-center">
              <!-- Footer Nav -->
              <nav class="sitemap small-5 medium-3 large-5 columns">
                <ul class="menu vertical large-horizontal expanded">
                  <li><a class="index-link" href="index.html">Home</a></li>
                  <li><a class="about-link" href="about.html">About Us</a></li>
                  <li><a class="services-link" href="services.html">Services</a></li>
                  <li><a class="rooms-link" href="rooms.html">Rooms</a></li>
                  <li><a class="contact-link" href="contact.html">Contact</a></li>
                </ul>
              </nav><!-- /Footer Nav -->

              <!-- Footer Adress -->
              <adress class="contact-information small-7 medium-5 large-3 columns">
                <h4><strong>Hotel &amp; Spa</strong></h4>
                <ul class="vcard no-bullet vertical">
                  <ul class="map no-bullet">
                    <li><i class="fi-marker size-48"></i>Ch. de la détente 1<br>
                    <li class="city">1200 Bouvilier</li>
                  </ul>
                  <li><i class="fi-telephone size-48"></i>+41 21 652 22 22</li>
                  <li><i class="fi-mail size-48"></i>info@hotelspa.com</li>
                </ul>
              </adress><!-- /Footer Adress -->

              <!-- Footer About Us -->
              <div class="footer-about small-11 medium-4 large-4 columns align-center">
                <h4><strong>About Us</strong></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi officiis ipsam veritatis itaque, voluptatum officia blanditiis numquam unde.</p>
                <ul class="menu social small-text-center medium-text-right">
                  <li><a href="http://www.facebook.com"><i class="fi-social-facebook size-48"></i></a></li>
                  <li><a href="http://www.tiwitter.com"><i class="fi-social-twitter"></i></a></li>
                </ul>
              </div><!-- /Footer About Us -->
            </div>
            <p class="copyright text-center">All Rights Reserved Hotel &amp; Spa 2015.</p>
          </footer><!-- /Footer -->
        </div><!-- /off-canvas-content-->
      </div>
    </div><!-- /off-canvas-wrapper -->
    
    <?php wp_footer(); ?>
    <!--<script>
      $('.index-link').addClass('active');
    </script>-->
  </body>
</html>
  