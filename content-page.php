<?php
/**
 * @package _custom
 */
?>
<main id="page-<?php the_ID(); ?>">

	<div class="uk-container">
        <div class="">
            <div class="col">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                <?php the_content(); ?>
            </div>
        </div>
    </div>

</main>