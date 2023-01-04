<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
while ( have_posts() ) : the_post();
?>

<!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="mb-1"><?php the_title();?></h1>
                            <!-- Post meta content-->
                            <div class="breadcrumb"><?php echo '<a href="'.home_url().'" rel="nofollow">Strona główna</a>'.'&nbsp;&nbsp;/&nbsp;&nbsp;'.'<a href="'.home_url().'/realizacje/" rel="nofollow">Realizacje</a>'.'&nbsp;&nbsp;/&nbsp;&nbsp;'; echo the_title(); ?></div>

                            <div class="text-muted fst-italic mb-2">Dodano <?php the_date( ); ?></div>
                            <!-- Post categories-->
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4 single_post_thumbnail text-center"><?php the_post_thumbnail( );?></figure>
                        <!-- Post content-->
                        <section class="mb-5 fs-5">
                            <p class="mb-5"> <?php the_content();?> </p>
                        </section>
                    </article>
                    
                </div>
            </div>
        </div>

<?php
endwhile;
 ?>
<?php get_footer();
