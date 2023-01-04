<?php
/**
 * Template Name: Zostan wolontariuszem
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
        <div class="col-12 my-4">
        <h3 class="text-center">
        Bezpieczeństwo jest sprawą każdego z nas! <br>Jeżeli chcesz mieć realny wpływ na propagowanie wiedzy oraz zwiększanie świadomości społecznej w tym obszarze, nie zastanawiaj się dłużej i <span class="text-danger"> dołącz do nas!</span> <br> <br></h3>
        <p class="fs-5 " style="text-align: justify;">
        Zależy nam na zgromadzeniu w&nbsp;strukturach Fundacji jak najliczniejszego grona aktywnych i&nbsp;zaangażowanych wolontariuszy, którzy poprzez udział w&nbsp;aktywnościach i&nbsp;projektach realizowanych przez PIBiO przyczynią się do popularyzowania wiedzy z&nbsp;obszaru bezpieczeństwa, reagowania na zamachy i&nbsp;obronności. Dzięki działalności w&nbsp;naszym wolontariacie zyskasz dostęp do ogromnej bazy źródeł wiedzy, nawiążesz interesujące kontakty oraz otrzymasz możliwość pracy przy organizacji wydarzeniach. Umożliwimy Ci także udział w&nbsp;szkoleniach pozwalających na zwiększenie Twojej wiedzy i&nbsp;kompetencji.
        </p>
        
        </div>
      </div>
    </div>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-6 bg-primary">
        <h2 class="text-secondary text-center py-2">Formularz kontaktowy</h2>
        <?php echo do_shortcode('[contact-form-7 id="412" title="wolontariat"]'); ?>
      </div>
      <div class="col-md-6">
        <h2 class="text-center py-2">Nasi wolontariusze&nbsp;<i class="bi bi-people-fill"></i></h2>
      </div>
    </div>
  </div>
</div>
  
</section>
 <?php 
//end microheader

get_footer();
