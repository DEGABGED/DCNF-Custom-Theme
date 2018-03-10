<div class="col-sm-6 post-preview-box">
  <div class="post-preview">
    <!-- Title -->
    <div class="post-preview-title">
      <h1><?php the_title(); ?></h1>
    </div>

    <!-- Author -->
    <p class="lead">
    by
    <a href="#"><?php the_author(); ?></a>
    on <?php the_date(); ?>
    </p>

    <!-- Preview Image -->
    <!--img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

    <hr-->
    <div class="post-preview-image">
<?php if ( has_post_thumbnail() ) {
the_post_thumbnail();
    } else { ?>
<img src="<?php bloginfo('template_directory'); ?>/assets/img/default-image.jpg" alt="<?php the_title(); ?>" />
<?php } ?>
    </div>
  </div>
</div>
