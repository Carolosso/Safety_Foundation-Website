<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package picostrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
 
?>


<main class="site-main" id="main">
<div class="d-flex align-items-center justify-content-center vh-100">
            <div class="text-center">
                <h1 class="display-1 fw-bold">404</h1>
                <p class="fs-3"> <span class="text-warning">Opps!</span> Nie znaleziono strony.</p>
                <p class="lead">
                    Strona, której szukasz nie została odnaleziona.
                  </p>
                <a href="#" class="btn btn-primary">Wróć do strony głównej</a>
            </div>
        </div>


</main> 

<?php
get_footer();
