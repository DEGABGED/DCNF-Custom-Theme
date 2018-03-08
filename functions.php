<?php
/**
 */

/**
 * Register Fonts
 *
 */

function dcnf_fonts() {
  wp_register_style('OpenSans', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
  wp_enqueue_style( 'OpenSans');
  wp_register_style('Lato', 'https://fonts.googleapis.com/css?family=Lato');
  wp_enqueue_style( 'Lato');
}

add_action('wp_print_styles', 'dcnf_fonts');

/**
 * Registering and enqueuing scripts/stylesheets to header/footer.
 */
function dcnf_scripts() {

  // Bootstrap, FontAwesome
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css');

  /* Front page */
  /* Bootstrap and FontAwesome already loaded */
  wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/vendors/magnific-popup/magnific-popup.css');
  wp_enqueue_style( 'creative', get_template_directory_uri() . '/assets/css/creative.min.css');
  wp_enqueue_style( 'custom', get_template_directory_uri() . '/assets/css/custom.css');

  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array(), '', true);
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array( 'jquery' ), false, true);

  wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array( 'jquery' ), false, true);
  wp_enqueue_script( 'scrollreveal', get_template_directory_uri() . '/vendor/scrollreveal/scrollreveal.min.js', array( 'jquery' ), false, true);
  wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js', array( 'jquery' ), false, true);

  wp_enqueue_script( 'creative', get_template_directory_uri() . '/assets/js/creative.js', array( 'jquery', 'jquery-easing', 'scrollreveal', 'magnific-popup' ), false, true);
}

add_action( 'wp_enqueue_scripts', 'dcnf_scripts' );
