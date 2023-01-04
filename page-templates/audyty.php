<?php
/**
 * Template Name: Audyty
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
    <?php wp_body_open(); ?> 
    <div class="container-fluid bg-lines-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-1">
          <h1 class="px-5 text-center"><i class="bi bi-clipboard-check-fill"></i></h1>       
       </div>
       <div class="col-md-11">
          <p class="lh-base fs-4" style="text-align: justify;">Realizujemy niezależne audyty obiektów w&nbsp;celu podnoszenia poziomu bezpieczeństwa osób i&nbsp;mienia znajdujących się na ich obszarze. Bazując na doświadczeniu naszych ekspertów sporządzamy szczegółowe analizy ryzyka wskazując mocne i&nbsp;słabe strony systemów bezpieczeństwa obiektów i&nbsp;instytucji oraz oceniamy kluczowe obszary mające wpływ na ich bezpieczeństwo i&nbsp;ciągłość działania. <br>Nasze działania cechuje obiektywizm i&nbsp;bezstronność.</p>
       </div>
       <div class="col-12 align-items-center d-flex justify-content-center py-5">
       <a name="" id="" class="btn btn-danger px-3 py-3 fs-3" href="<?php echo home_url().'/kontakt/'?>" role="button">Kontakt &nbsp;<i class="bi bi-arrow-right-square-fill"></i></a>
       </div>
      </div>
    </div>
    </div>
    
 <?php 
//end microheader

get_footer();
