<?php
/**
* Template Name: Security Assistance
*
*/
// Exit if accessed directly.

defined( 'ABSPATH' ) || exit;

get_header(); //HEADER
?>
<section class="py-5 text-center">
  <div class="container bg-secondary">
    <h1>
    Uzyskaj wsparcie ekspertów Fundacji
    </h1>
  </div>
  <div class="divider2"></div>

</section>
<div class="container">
      <div class="row">
        <div class="col-md-1 text-center">
          <h1 class="px-5"><i class="bi bi-shield-fill-check"></i></h1>    
       </div>
       <div class="col-md-11">
          <p class="lh-base fs-4" style="text-align: justify;"><span class="text-danger">Security Assistance</span> to działające przy Polskim Instytucie Bezpieczeństwa i&nbsp;Obronności centrum wsparcia eksperckiego, za pośrednictwem którego możecie Państwo uzyskać odpowiedzi na nurtujące Was pytania z&nbsp;obszaru bezpieczeństwa. <br> <br>Nasi eksperci w&nbsp;ciągu 72 godzin udzielą Państwu wskazówek i&nbsp;rekomendacji, opierając się na swojej wiedzy i&nbsp;wieloletnim doświadczeniu. <br> <br>Każda odpowiedź uzasadniona będzie odwołaniami do aktów prawnych, norm lub dobrych praktyk.</p>
       </div>
       <div class="col-12 align-items-center d-flex justify-content-center py-5">
       <button type="button" class="btn btn-danger px-4 py-4 fs-3 pulsate-fwd" data-bs-toggle="modal" data-bs-target="#sa_form">Wypełnij formularz &nbsp;<i class="bi bi-send-fill"></i></button>  
       </div>
      </div>
      <!-- EKSPERCI --> 
      <h2 class="text-center py-3 bg-primary text-secondary" style="margin: 0;">Eksperci Security Assistance &nbsp;<i class="bi bi-people-fill"></i></h2>
      <div class="py-3 px-5 bg-primary text-secondary slider-experts">
        <div class="col-4">
          <div class="security-portrait px-4 py-4 text-center">
            <img class="shadow-sm text-center" src="<?php echo get_template_directory_uri();?>/img/stelmach.jpg" alt="Zdjęcie Jarosław Stelmach">
          </div>
          <h4 class="text-center">mjr rez. dr inż. Jarosław Stelmach</h4>
          <div class="divider mb-3"></div>    
          <p class="lh-base px-2" style="text-align: justify;">
          &emsp; Prezes Zarządu Safety Project sp. z o.o. oraz pomysłodawca i&nbsp;organizator międzynarodowego kongresu bezpieczeństwa antyterrorystycznego SAFE PLACE. Dziekan Dolnośląskiego Wydziału Bezpieczeństwa i&nbsp;Nauk Społeczno-Prawnych w&nbsp;WSBPiI Apeiron w&nbsp;Krakowie... 
          </p>
        </div>
        <div class="col-4">
          <div class="security-portrait px-4 py-4 text-center">
            <img class="shadow-sm" src="<?php echo get_template_directory_uri();?>/img/lipka.jpg" alt="Zdjęcie Marcin Lipka">
          </div>
          <h4 class="text-center">ppłk rez. dr inż. Marcin Lipka</h4>
          <div class="divider mb-3"></div>    
          <p class="lh-base px-2" style="text-align: justify;">
          &emsp; Ekspert ds. Zarządzania Bezpieczeństwem w&nbsp;największej sieci komórkowej w&nbsp;Polsce. Absolwent studiów Doctor of Business Administration i&nbsp;Executive Master of Business Administration organizowanych przez Collegium Humanum w&nbsp;partnerstwie z&nbsp;Apsley Business School w&nbsp;Londynie...
          </p>
        </div>
        <div class="col-4">
          <div class="security-portrait px-4 py-4 text-center">
            <img class="shadow-sm" src="<?php echo get_template_directory_uri();?>/img/kozuszek.jpg" alt="Zdjęcie Marcin Kożuszek">
          </div>
          <h4 class="text-center">mgr Marcin Kożuszek</h4>
          <div class="divider mb-3"></div>    
          <p class="lh-base px-2" style="text-align: justify;">
          &emsp; Ukończył z&nbsp;wyróżnieniem studia na kierunku bezpieczeństwo narodowe w&nbsp;Wyższej Szkole Oficerskiej Wojsk Lądowych im. gen. Tadeusza Kościuszki we Wrocławiu. Jest kwalifikowanym pracownikiem ochrony fizycznej z&nbsp;doświadczeniem w&nbsp;dziale corporate security...
          </p>
        </div>
        <div class="col-4">
          <div class="security-portrait px-4 py-4 text-center">
            <img class="shadow-sm" src="<?php echo get_template_directory_uri();?>/img/fake_face.jpg" alt="">
          </div>
          <h4 class="text-center">prof Jan Kowalski</h4>
          <div class="divider mb-3"></div>    
            <p class="lh-base px-2" style="text-align: justify;">
            &emsp; Ukończył z wyróżnieniem studia na kierunku bezpieczeństwo narodowe w Wyższej Szkole Oficerskiej Wojsk Lądowych im. gen. Tadeusza Kościuszki we Wrocławiu. Jest kwalifikowanym pracownikiem ochrony fizycznej z doświadczeniem w dziale corporate security...
            </p>
        </div>
      </div>
      <div class="col-12 py-3 bg-primary text-secondary">
        <a type="button" name="" id="" class="btn btn-secondary mx-2 fw-bold" href="<?php echo home_url()?>/eksperci/">Więcej o ekspertach</a>
      </div>
    </div>
</div>
        <!-- EKSPERCI -->
  <div class="row mx-auto mt-5 justify-content-center" >
    <h1 h1 class="text-center">Partnerzy</h1>
  </div>
  <div class="slider-partners row mx-auto mt-5 justify-content-center pb-5">
    <div class="multiple-slides col-2 py-3">1</div>
    <div class="multiple-slides col-2 py-3">2</div>
    <div class="multiple-slides col-2 py-3">3</div>
    <div class="multiple-slides col-2 py-3">4</div>
    <div class="multiple-slides col-2 py-3">5</div>
    <div class="multiple-slides col-2 py-3">6</div>
  </div>



<!-- Modal -->
<div class="modal fade" id="sa_form" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content bg-primary">
      <div class="modal-header">
        <h2 class="modal-title text-secondary" id="ModalLabel">Formularz <span class="text-danger">Security Assistance</span></h2>       
      </div>
      <div class="row"><h5 class="modal-description text-secondary text-center">Aby uzyskać pomoc wypełnij poniższy formularz.</h5></div>
      <div class="modal-body">
      <?php echo do_shortcode('[contact-form-7 id="419" title="Security Assistance"]');?>
    </div>
  </div>
</div>

<?php get_footer(); //FOOTER