<?php
/**
 * Template Name: Doradztwo
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
        <div class="col-md-1">
          <h1 class="px-5 text-center"><i class="bi bi-person-check-fill"></i></h1> 
       </div>
       <div class="col-md-11">
          <p class="lh-base fs-4" style="text-align: justify;">Fundacja zrzesza grono niezależnych ekspertów – doradców realizujących projekty z&nbsp;obszaru bezpieczeństwa fizycznego, zabezpieczeń technicznych, reagowania na zamachy oraz obronności. Współpracujemy z&nbsp;instytucjami administracji publicznej, służbami, inspekcjami i&nbsp;strażami, obiektami użyteczności publicznej oraz sektora komercyjnego poprzez wspieranie zarządzających bezpieczeństwem w&nbsp;opracowywaniu właściwych i&nbsp;zgodnych z&nbsp;dobrymi praktykami dokumentów – w&nbsp;tym polityk, planów i&nbsp;procedur bezpieczeństwa. <br><br>

            Zapraszamy także do korzystania z&nbsp;bezpłatnego wsparcia eksperckiego w&nbsp;ramach Security Assistance, gdzie możecie Państwo uzyskać naszą pomoc.</p>
       </div>
       <div class="col-12 align-items-center d-flex justify-content-center py-5">
       <a name="" id="" class="btn btn-danger px-3 py-3 fs-3" href="<?php echo home_url().'/security-assistance/'?>" role="button">Przejdź do Security Assistance &nbsp;<i class="bi bi-arrow-right-square-fill"></i></a>
       </div>
      </div>
    </div>
    </div>
    
 <?php 
//end microheader

get_footer();
