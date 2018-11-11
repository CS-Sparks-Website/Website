<?php get_header(); ?>

          <section class="showcase">
            <div class="container-fluid p-0">
        <?php
          if ( have_posts() ) :
          $postCounter = 0;

                    /* Start the Loop */
                    while ( have_posts() ) : the_post();
            $pos = $postCounter % 2 +1;
            $posC = 3-$pos;
            $featured_img = get_the_post_thumbnail_url('','full');
        
            echo"<div class='row no-gutters'>";
            //echo"<div class='col-lg-6 order-lg-$posC text-white showcase-img' style='background-image:url(". get_template_directory_uri() . "/img/2017Classroom.jpg)';></div>";
            echo"<div class='col-lg-6 order-lg-$posC text-white showcase-img' style='background-image:url($featured_img)';></div>";
        
            //echo get_the_post_thumbnail();
            echo"<div style='padding-left:112px; padding-right:112px;' class='col-lg-6 order-lg-$pos my-auto showcase-text'>";
                        echo "<h2>" . get_the_title() . "</h2>";
              echo "<p class='post-meta'>Posted on ". get_the_date() . "</p>";
              echo "<p class='lead mb-0'>" . get_the_content() . "</p>";
            echo "</div>";
            echo "</div>";
            $postCounter++;
          


                    endwhile;
        endif;
        ?>
                
        </div>
      </section>





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
        <p class="font-weight-light mb-0" style='margin-top: 16px; word-spacing: 40px;'>#GoogleforEdu #CSEd</p>

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
              <p class="font-weight-light mb-0">#CSEd  #GoogleforEdu</p>
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
    <script src="<?php bloginfo('template_url');?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>
