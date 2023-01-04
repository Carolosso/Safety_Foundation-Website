<?php
/**
 * Template Name: Kontakt
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
    <?php wp_body_open();  ?> 
<div class="container-fluid bg-lines-dark">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="text-center py-2 mb-5">Dane kontaktowe</h2>
        <h4 class="fw-bolder">Polski Instytut Bezpieczeństwa i Obronności</h4><br>
        <p class="fs-5">
          ul. Czarnuszkowa 3/4<br>
          51-180 Wrocław<br>
          <br>
          Tel. <a href="tel:+48518275996" class="text-decoration-none">518 275 996</a><br>
          <a href="mailto:kontakt@pibio.pl" class="text-decoration-none">kontakt@pibio.pl</a> 
          <br><br>
          <span class="fw-bold">KRS: </span>0000971096<br>
          <span class="fw-bold">NIP: </span>8952241620<br>
          <span class="fw-bold">REGON: </span>52198885<br>
          <div class="text-center">
            <a name="" id="" class="btn btn-danger my-1 fw-bold" href="javascript:void(0)" role="button">Odpis KRS</a>
          </div>
        </p>
        <div class="socials text-center my-5">
        <h4>Media społecznościowe:</h4>
        <h1>
        <a href="#" class="mx-2 text-navy"><i class="bi bi-facebook"></i></a>
        <a href="#" class="mx-2 text-navy"><i class="bi bi-linkedin"></i></a>
        </h1>
        </div>
        
      </div>
      <div class="col-md-6 bg-primary">
        <h2 class="text-secondary text-center py-2 ">Formularz kontaktowy</h2>
        <?php echo do_shortcode('[contact-form-7 id="294" title="Kontakt"]'); ?>
      </div>
    </div>
  </div>
</div>

 <?php 
//end microheader

get_footer();
