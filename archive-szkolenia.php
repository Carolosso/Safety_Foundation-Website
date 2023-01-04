<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<section id="trainings-section-all">

<section class="py-5 text-center">
  <div class="container">
    <h1>Szkolenia</h1> 
  </div>
  <div class="divider2"></div>

</section>
<div class="filters text-center">
      <div class="d-inline-block"><h5>Kategoria:</h5></div>
      <div class="d-inline-block">
      <select class="form-select selectpicker fs-6" data-size="4" aria-label="Kategoria szkolenia">
        <option selected data-filter="*">Wszystkie</option>
        <?php
          $terms = get_terms('kategorie_szkolen');
          foreach ($terms as  $term) { ?>
            <option data-filter=".<?php  echo $term->slug; ?>"><?php echo $term->name; ?></option>
        <?php  } ?>
      </select>
        <!-- <button class="active btn btn-primary px-3" data-filter="*">Wszystkie</button> -->   
      </div>
</div>

  <div class="container-fluid py-4 gx-md-5 gx-md-5">
    <div class="grid-filtr">
    <div class="row">
		<?php
			$args = array(
				'post_type' => 'szkolenia',
        'post_status' => 'publish',
				//'posts_per_page' => 3,
        'orderby' => 'date', 
        'order' => 'DSC', 
			);
			$q = new WP_Query( $args );
		?>
      <?php //$temp=1; ?>
			<?php while ( $q->have_posts() ) : $q->the_post();
      //if($temp==1){
       // echo '<div class="row">';
     // }

          $kategorie = get_the_terms( $post->ID, 'kategorie_szkolen'); 
          $wynik="";
          foreach($kategorie as $kategoria){
            $wynik .= $kategoria->slug.' ';
          }
        
      ?>
				<div class="col-xl-4 px-3 py-2 zooming <?php echo $wynik?>" onclick="window.location='<?php the_permalink(); ?>'" style="cursor:pointer;">
            <div class="post-news-head shadow-lg">
              <!-- tytul -->
            <div class="post-news-title">
                <h4 class="text-start px-4 py-4">
                  <a href="<?php the_permalink(); ?>" class="text-secondary"><?php the_title(); ?></a>
                </h4>
            </div>    
            <!-- zajawka  -->
            <h6 class="text-left text-excerpt-tranings text-wrap text-break px-4 text-secondary">
            <?php echo wp_trim_words(get_the_content(), 30) ?>
            </h6>
            
              <!-- miniaturka -->
              <?php //the_post_thumbnail(); ?>
              <!-- kategoria szkolenia -->
              <div class="training-category">
                <?php echo get_the_term_list( $post->ID, 'kategorie_szkolen'); ?>
              </div>
              <div class="training-info text-light text-center py-3">
                            <!-- CENA -->
                <div class="row py-2">
                  <div class="training-price">
                      <h5><i class="bi bi-tag-fill"></i>&nbsp Cena</h5>
                      <h6 class="text-center">
                        <?php echo get_post_meta( get_the_ID(), 'cena', true ).' zł (netto)'; ?></h6>
                  </div>
                </div>
                        <!-- LOKALIZACJA-->
                <div class="row py-2">
                  <div class="training-location">
                      <h5><i class="bi bi-geo-alt-fill text-start"></i>&nbsp Lokalizacja</h5>
                      <h6><?php 
                      echo  get_post_meta( get_the_ID(), 'lokalizacja', true );?></h6>
                  </div>
                </div>
                
                    <!-- DATA-->
                <div class="row py-2">
                  <div class="training-date"  title="Format daty: d/m/r">
                      <h5><i class="bi bi-calendar-event-fill"></i>&nbsp Data</h5>
                      <h6><?php
                      $input = get_post_meta( get_the_ID(), 'data', true );
                      $date = strtotime($input);
                      echo date('d.m.Y', $date).' r.';
                        ?></h6>
                  </div>
                </div>
              </div>
            </div>  
				</div>
        <?php //if($temp==3){
               //   echo '</div>';
                 // $temp=0;
               // }
              //  $temp++;
            ?>     
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
      </div>
      </div>
  </div>
</section>
<?php get_footer();
