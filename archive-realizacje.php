<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
  
 

<section class="py-5 text-center">
  <div class="container bg-secondary">
    <h1>
      Realizacje
    </h1>
  </div>
  <div class="divider2"></div>

</section>
<section>
  <div class="container-fluid bg-lines-dark py-5">
  <div class="container">
    <div class="row">
    <?php
			$args = array(
				'post_type' => 'realizacje',
        'post_status' => 'publish',
				//'posts_per_page' => 3,
        'orderby' => 'date', 
        'order' => 'DSC', 
			);
			$q = new WP_Query( $args );
		?>
    <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post();
                ?>
            <div class="col-md-6 my-3">
              <a href="<?php the_permalink() ?>">
              <div class="card karta-realizacje text-secondary">
                <div class="card-img-top">
                 <?php the_post_thumbnail();    ?>
                </div>
              
                <div class="card-body karta-body py-1 bg-primary">
                    <h4 class=" py-2"><a class="stretched-link text-secondary text-wrap text-break" href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                    <p class="card-text text-wrap text-break"> <?php echo wp_trim_words(get_the_content(), 30)?></p>
                </div>
              </div>
            </div>
            </a>
              <?php
            endwhile;
        endif;
        ?>
    </div>

  </div>
  </div>
</section>
 
<?php get_footer();
