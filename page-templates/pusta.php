<?php
/**
 * Template Name: Pusta-header-footer
 *

 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

//microheader
?>
<section class="py-5 text-center">
 
  <div class="container bg-secondary">
    <h1>
      <?php the_title(); ?>
    </h1>
  </div>
  <div class="divider2"></div>
</section>
  <body <?php body_class(); ?> >
    <?php wp_body_open();  
    the_content();?> 
    
 <?php 
//end microheader

get_footer();
