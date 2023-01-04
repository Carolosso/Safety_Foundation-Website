<?php
/**
* Template Name: Strona główna
*
*/
// Exit if accessed directly.

defined( 'ABSPATH' ) || exit;

get_header(); //HEADER
?>
<script>
window.onscroll = function() {myFunction()};
function myFunction() {
  if (document.body.scrollTop > 350 || document.documentElement.scrollTop > 350) {
    document.getElementById("home").className="d-none";
  }
  else{
    document.getElementById("home").className="bounce";
  }
}
</script>

<div class="container-fluid container-main d-flex">
      <div class="row align-items-center mx-4" >
        <!-- sekcja lewo -->
        <div class="col-lg-3 section-left mx-auto slide-in-left">
          <h1 class="main-h1">Polski Instytut Bezpieczeństwa i&nbsp;Obronności</h1>
          <h4 class="main-h4 py-5" style="text-align: justify;">Fundacja jest apolityczną, pozarządową organizacją non&#8722;profit powołaną w&nbsp;celu wzmacniania bezpieczeństwa i&nbsp;obronności Polski oraz budowania świadomości społecznej i&nbsp;propagowania wiedzy i&nbsp;umiejętności z&nbsp;obszaru bezpieczeństwa personalnego, lokalnego i&nbsp;narodowego.</h4>
          <a type="button" name="" id="" class="btn button-section px-5 fw-bold" href="<?php echo site_url('/misja-i-wizja/'); ?>">POZNAJ NAS</a>
        </div>
        <!-- sekcja prawo -->
        <div class="col-lg-5 section-right mx-auto text-center slide-in-right">
          <img  src="<?php echo get_template_directory_uri(  );?>/img/logo_notext.png" alt="Logo no text">
        </div>
        <!-- strzalka w dol -->
      </div>
      <div class="bounce" id="home"><a href="#home"><i class="bi bi-arrow-down-circle"></i></a></div>
</div>
<!-- SEKCJA AKTUALNOSCI -->
<section id="news-section">
  <div class="container-fluid py-4 gx-5">
    <h1 class="px-5 text-center">Aktualności</h1>
    <div class="divider2 mb-4"></div>
    <?php while ( have_posts() ) : the_post(); ?>
		<?php
			$args = array(
				'post_type' => 'post',
        'post_status' => 'publish',
				'posts_per_page' => 4,
        'orderby' => 'date', 
			);
			$q = new WP_Query( $args );
		?>
		<div class="row py-3">
			<?php while ( $q->have_posts() ) : $q->the_post(); ?>
      
      <div class="col-md-4 col-sm-6 my-3">
        <a href="<?php the_permalink() ?>">
              <div class="card karta text-secondary">
                <div class="card-img-top ">
                 <?php the_post_thumbnail();    ?>
                </div>
                
                <div class="card-body karta-body py-1 bg-primary">
                    <small class="text-muted text-danger"><?php the_date() ?></small>
                    <h4><a class="stretched-link text-secondary text-wrap text-break" href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                    <p class="card-text text-wrap text-break"> <?php echo wp_trim_words(get_the_content(), 20)?></p>
                </div>
              </div>
      </div>
        </a>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?> 
		</div>
    
	<?php endwhile; ?>
  <div class="container">
    <div class="col-md-12 text-center">
        <a href="<?php echo site_url('/aktualnosci/'); ?>" class="btn btn-primary px-5">Zobacz więcej</a>
    </div>
  </div>
  </div>
</section>
<!-- SEKCJA AKTUALNOSCI -->

<!-- SEKCJA SZKOLENIA -->
<section id="trainings-section">
  <div class="container-fluid py-4 gx-5">
  <h1 class="px-5 text-center text-secondary">Polecane szkolenia</h1>
    <div class="divider2 mb-4" style="background-color: #E7302A;"></div>
		<?php
			$args = array(
				'post_type' => 'szkolenia',
        'post_status' => 'publish',
				'posts_per_page' => 3,
        'orderby' => 'title', 
        'order' => 'ASC', 
			);
			$q = new WP_Query( $args );
		?>

		<div class="row py-3">
			<?php while ( $q->have_posts() ) : $q->the_post(); ?>
				<div class="col-md-4 px-2 animation-trainings">
          <a href="<?php the_permalink();?>">
          <div class="post-news-head">
            <!-- miniaturka -->
            <?php the_post_thumbnail(); ?>
             <!-- kategoria szkolenia -->
            <div class="post-category-trainings">
              <?php echo get_the_term_list( $post->ID, 'kategorie_szkolen') ?>
            </div>
          </div>        
          <!-- tytul -->
          <div class="post-news-title">
              <h4 class="text-center py-2">
                <a href="<?php the_permalink(); ?>" class="text-secondary">
                  <?php the_title(); ?>
                </a>
              </h4>
            </div>    
          <!-- zajawka -->
          <h6 class="text-center text-excerpt text-wrap text-break py-3 text-secondary">
          <?php echo wp_trim_words(get_the_content(), 30) ?>
          </h6>
          </a>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
  <div class="container">
    <div class="col-md-12 text-center">
        <a href="<?php echo site_url('/szkolenia/'); ?>" class="btn btn-secondary px-5">Zobacz wszystkie</a>
    </div>
  </div>
  </div>
</section>
<?php get_footer(); //FOOTER
