<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<section id="trainings-section-all">

<section class="py-5 text-center">
  <div class="container">
    <h1>Blog</h1> 
  </div>
  <div class="divider2"></div>

</section>
<div class="container-fluid bg-lines-dark">
<div class="container py-4 gx-5 gx-5">
    <div class="row">
      <div class="col-md-6">
        <h3>Najnowsze wpisy</h3>
      </div>
      <div class="col-md-6">
      <?php
			$args = array(
				'post_type' => 'blog',
        'post_status' => 'publish',
        'orderby' => 'date', 
        'order' => 'DSC', 
			);
			$q = new WP_Query( $args );
		?>
			<?php while ( $q->have_posts() ) : $q->the_post();
        
      ?>
				<div class="col-12 px-3 py-2 blog-block">
          <p class="blog-category"><?php echo get_the_term_list( $post->ID, 'kategorie_blog'); ?></p>
           <a class="blog-title" href="<?php the_permalink();?>"> <h2><?php the_title();?></h2></a>
           <p class="py-2">Dodał <?php the_author();?>, dnia <?php the_date();?></p>
				</div>   
        <hr>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</div>
</section>
<?php get_footer();
