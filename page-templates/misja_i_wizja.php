<?php
/**
 * Template Name: Misja i wizja
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
      <div class="row py-5">
        <div class="col-sm-8 px-3">
          <p style="text-align: justify;" class="text-wrap text-break fw-bold">
            Misją i&nbsp;wizją fundacji jest wzmacnianie bezpieczeństwa i&nbsp;obronności Polski i&nbsp;jej obywateli poprzez budowanie świadomości społecznej, propagowanie wiedzy oraz umiejętności sprzyjających wzmacnianiu bezpieczeństwa w&nbsp;wymiarze personalnym, lokalnym i&nbsp;narodowym.<br><br>
            W&nbsp;skład Fundacji wchodzą autorytety w&nbsp;dziedzinie bezpieczeństwa - naukowcy, eksperci i&nbsp;praktycy z&nbsp;doświadczeniem w&nbsp;pracy na rzecz bezpieczeństwa obiektów użyteczności publicznej i&nbsp;infrastruktury krytycznej, którzy realizują przedsięwzięcia edukacyjne, naukowe i&nbsp;badawczo-rozwojowe w&nbsp;celu podnoszenia poziomu bezpieczeństwa państwa i&nbsp;jego obywateli.<br><br>

            Polski Instytut Bezpieczeństwa i&nbsp;Obronności organizuje bezpłatne przedsięwzięcia z&nbsp;obszaru bezpieczeństwa, szerząc wiedzę wśród pracowników administracji publicznej, szkół, służb, inspekcji i&nbsp;straży oraz przedstawicieli obiektów użyteczności publicznej na terenie całej Polski.<br><br>

            Fundacja realizuje działalność informacyjną i&nbsp;publicystyczną poprzez wydawanie materiałów merytorycznych w&nbsp;formie filmów edukacyjnych oraz tematycznych książek i&nbsp;broszur.<br><br>

            Instytut prowadzi także działalność w&nbsp;zakresie doradztwa z&nbsp;obszaru bezpieczeństwa fizycznego i&nbsp;zabezpieczeń technicznych.<br><br>

            Zachęcamy do udziału w&nbsp;przedsięwzięciach Polskiego Instytutu Bezpieczeństwa i&nbsp;Obronności oraz do podejmowania aktywnej działalności na rzecz bezpieczeństwa w&nbsp;ramach naszej Fundacji!
          </p>
        </div>
        <div class="col-sm-4 text-center align-items-center justify-content-center d-flex flex-column">
          <a class="btn btn-outline-primary px-3 py-3 my-4 fw-bold" href="<?php echo home_url();?>/wp-content/pliki/fundacja_PiBIO_statut.pdf" role="button"target="_blank">Zapoznaj się ze statutem fundacji<h3><i class="bi bi-filetype-pdf"></i></h3></a>
          <a class="btn btn-outline-danger px-3 py-3 my-4 fw-bold" href="<?php echo site_url('/zostan-wolontariuszem/'); ?>" role="button">Zostań wolontariuszem fundacji<h3><i class="bi bi-box-arrow-in-right "></i></h3></a>
        </div>
      </div>
    </div>
    </div>
    
 <?php 
//end microheader

get_footer();
