<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();




if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
    ?>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-8 bg-secondary">
                <div class="container content-section text-start gx-5">
                    <div class="py-4">
                        <h1><?php the_title(); ?></h1>
                        <!-- Post meta content-->
                        <div class="breadcrumb"><?php echo '<a href="'.home_url().'" rel="nofollow">Strona główna</a>'.'&nbsp;&nbsp;/&nbsp;&nbsp;'.'<a href="'.home_url().'/szkolenia/" rel="nofollow">Szkolenia</a>' ?>
                        </div>
                        <hr>
                    </div>
                    <h4>
                    <?php the_content(); ?>
                    </h4>
                </div>
            </div>
            <div class="col-md-4 bg-primary">
                <div class="sidebar-section">
                    <div class="sidebar-content sticky-topppers">
                                <div class="training-info text-light text-center py-3">
                                    <!-- CENA -->
                        <div class="row py-4" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">
                            <div class="training-price">
                                <h3 class="text-danger"><i class="bi bi-tag-fill"></i>&nbsp Cena</h3>
                                <h4 class="text-center">
                                <?php echo get_post_meta( get_the_ID(), 'cena', true ).' zł (netto)'; ?></h4>
                            </div>
                        </div>
                                <!-- LOKALIZACJA-->
                        <div class="row py-4">
                            <div class="training-location">
                                <h3 class="text-danger"><i class="bi bi-geo-alt-fill text-start"></i>&nbsp Lokalizacja</h3>
                                <h4><?php 
                                echo  get_post_meta( get_the_ID(), 'lokalizacja', true );?></h4>
                            </div>
                        </div>
                        
                            <!-- DATA-->
                        <div class="row py-4">
                            <div class="training-date"  title="Format daty: d/m/r">
                                <h3 class="text-danger"><i class="bi bi-calendar-event-fill"></i>&nbsp Data</h3>
                                <h4><?php
                                $input = get_post_meta( get_the_ID(), 'data', true );
                                $date = strtotime($input);
                                echo date('d.m.Y', $date).' r.';
                                ?></h4>
                            </div>
                        </div>
                        

                        </div>
                        <!-- Button trigger modal -->
                        <hr class="bg-secondary">
                        <div class="row py-2">
                            <div class="col-12 text-center">
                                <button type="button" class="btn btn-warning px-3 py-3 text-secondary fw-bold" data-bs-toggle="modal" data-bs-target="#sign_form">Zapisz się na <?php the_title(); ?> <i class="bi bi-pencil-square"></i></button>  
                            </div> 
                            <div class="col-12 text-center py-4" >
                                  <a href="<?php echo home_url()?>/kontakt" type="button" name="" id="" class="btn btn-secondary">Kontakt</a>
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    
    
  <?php endwhile; endif;?>




<!-- Modal -->
<div class="modal fade" id="sign_form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content bg-primary">
      <div class="modal-header">
        <h2 class="modal-title text-secondary" id="exampleModalLabel">Formularz</h2>       
        <button type="button" class="btn-close btn-secondary" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="row"><h5 class="modal-description text-secondary text-center">Wypełnij, aby zapisać się na <span class="modal-description-title"><?php the_title();?></span>!</h5></div>
      <div class="modal-body">
      <?php
  //FORMULARZ
  echo do_shortcode(get_post_meta( get_the_ID(), 'shortcode_formularz', true )); ?>
      </div>
    </div>
  </div>
</div>

 

<?php get_footer();
