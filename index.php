<?php get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>

      <?php if ( is_home() && ! is_front_page() ) : ?>
        <header>
          <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </header>
      <?php endif; ?>

      <?php
      // Start the loop.
      while ( have_posts() ) : the_post();

        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'template-parts/content', get_post_format() );

      // End the loop.
      endwhile;

      // Previous/next page navigation.
      the_posts_pagination( array(
        'prev_text'          => __( 'Previous page', 'twentysixteen' ),
        'next_text'          => __( 'Next page', 'twentysixteen' ),
        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
      ) );

    // If no content, include the "No posts found" template.
    else :
      get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>

    </main><!-- .site-main -->
  </div><!-- .content-area -->




    <!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">

        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(<?php bloginfo('template_url');?>/img/2017Classroom.jpg)";></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Week 4: Microbits</h2>
            <p class="post-meta">Posted on Novemeber 18, 2017</p>
            <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vulputate viverra erat, id vestibulum orci viverra vitae. Sed sit amet dignissim ligula. Nunc at pellentesque nunc. Quisque sit amet libero eget arcu tincidunt volutpat in eget tellus.</p>
          </div>
        </div>

        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url(<?php echo get_template_directory_uri() . '/img/bg-showcase-2.jpg';?>);"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>Week X: Topic</h2>
            <p class="post-meta">Posted on September 18, 2018</p>
            <p class="lead mb-0">Sed pulvinar orci eget odio tincidunt scelerisque. Duis urna massa, viverra id neque a, scelerisque ultricies nunc. Aliquam erat volutpat. Sed sit amet odio nec ligula vulputate commodo.</p>
          </div>
        </div>

        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(<?php echo get_template_directory_uri() . '/img/bg-showcase-2.jpg';?>);"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Week X: Topic</h2>
            <p class="post-meta">Posted on September 18, 2018</p>
            <p class="lead mb-0">Sed pulvinar orci eget odio tincidunt scelerisque. Duis urna massa, viverra id neque a, scelerisque ultricies nunc. Aliquam erat volutpat. Sed sit amet odio nec ligula vulputate commodo.</p>
          </div>
        </div>
    </section>

 <!-- Testimonials -->
    <section class="testimonials text-center bg-light" style="padding-bottom: 4rem">
      <div class="container">
        <h2 class="mb-5">Proudly sponsored by</h2>

            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid mb-3 " src="<?php bloginfo('template_url'); ?>/img/GoogleLogo.png" style="box-shadow: none;" alt="">

          <!--
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
              <h5>Sponsor B</h5>
              <p class="font-weight-light mb-0">n/a / Their contribution</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
              <h5>Sponsor C</h5>
              <p class="font-weight-light mb-0">n/a / Their contribution</p>
            </div>
          </div>
      -->
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light" style="padding-top: 0;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="http://www.csi.ucd.ie/About/">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="http://www.csi.ucd.ie/Contact/">Contact</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; 2018 Google LLC All rights reserved. Google and the Google logo are registered trademarks of Google LLC.</p>
            <p class="text-muted small mb-4 mb-lg-0">&copy; UCD School of Computer Science 2018. All Rights Reserved.</p>

            
          </div>

          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="https://www.facebook.com/cssparks/">
                  <i class="fab fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/cs-sparks-bb4b8b171">
                  <i class="fab fa-linkedin fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
