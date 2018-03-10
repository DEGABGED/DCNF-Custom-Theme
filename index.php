<?php get_header(); ?>
    <!-- Jumbotron -->
    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="white-text-img">
            <h1 class="text-uppercase">
              <strong>Don Chichos Blog</strong>
            </h1>
            </div>
            <hr class="separator">
          </div>
          <div class="col-lg-8 mx-auto">
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#blog">Find Out More</a>
          </div>
        </div>
      </div>
    </header>

  <div id="blog" class="container-fluid">
    <div class="row">
      <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
          get_template_part( 'content', get_post_format() );
        endwhile; endif;
      ?>
    </div>
  </div>
<?php get_footer(); ?>
