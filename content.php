<div class="row">

  <!-- Post Content Column -->
  <div class="">
    <!-- Title -->
    <h1 class="mt-4"><?php the_title(); ?></h1>

    <!-- Author -->
    <p class="lead">
    by
    <a href="#"><?php the_author(); ?></a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p>Posted on <?php the_date(); ?></p>

    <hr>

    <!-- Preview Image -->
    <!--img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

    <hr-->

    <!-- Post Content -->
    <?php the_post_thumbnail(); ?>
    <?php the_content(); ?>
  </div>

</div>
<!-- /.row -->
