<?php
/**
 * Template name: News
 */
global $wp_query;
?>
<?php get_header(); ?>

<?php $categories = get_terms(array(
    'taxonomy'  => 'category',
    'hide_empty'    => false,
    'exclude' => array(1),
));?>
<main class="main">

    <div class="category-page">

        <img src="<?php echo THEME_DIR_URI ?>/assets/images/svg/letters.svg" alt="<?php _e('Young Africa','yafrica')?>" class="category-page__sign">

        <div class="wrap">
            <h1 class="category-page__title anim"><?php echo single_cat_title( '', false )?></h1>

            <ul class="category-page__list anim">
                <li><a href="<?php the_permalink(get_page_by_path('news'))?>" class=""><?php _e('All','yafrica')?></a></li>
                <?php foreach($categories as $category):?>
                    <li>
                        <a href="<?php echo get_term_link($category->term_id)?>" <?php if($category->term_id == get_queried_object_ID()):?>class="is-current"<?php endif;?>><?php echo $category->name?></a>
                    </li>
                <?php endforeach;?>
            </ul>

            <div class="category-page__controls">
                <h3 class="section-title anim"><?php _e('Our latest actions','yafrica')?></h3>
                <div class="category-page__dropdown js__dropdown">
                    <span class="category-page__dropdown-current js__dropdown-current"><?php echo single_cat_title( '', false )?></span>
                    <ul class="category-page__dropdown-list js__dropdown-list">
                        <li><a href="<?php the_permalink(get_page_by_path('news'))?>" class=""><?php _e('All','yafrica')?></a></li>
                        <?php foreach($categories as $category):?>
                            <li>
                                <a href="<?php echo get_term_link($category->term_id)?>" <?php if($category->term_id == get_queried_object_ID()):?>class="js__dropdown-current"<?php endif;?>><?php echo $category->name?></a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>

            <div id="postsContainer" class="category-page__grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="latest-card anim">
                        <?php if($blogPostImage = get_the_post_thumbnail_url($post)):?>
                            <img src="<?php echo $blogPostImage?>" alt="<?php echo $post->post_title?>" class="latest-card__thumbnail">
                        <?php endif;?>
                        <div class="latest-card__inner">
                            <h6 class="news-date"><?php echo get_the_date('j-n-Y',$post->ID);?></h6>
                            <h4 class="latest-card__title"><?php echo $post->post_title?></h4>
                            <div class="latest-card__excerpt">
                                <?php echo get_the_excerpt($post)?>
                            </div>
                            <a href="<?php the_permalink($post)?>" class="brdr-link"><?php _e('Read more','yafrica')?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php if (  $wp_query->max_num_pages > 1 ):?>
                <div class="category-page__footer anim">
                    <a href="#" class="brdr-link loadmore-link" data-posts='<?php echo json_encode( $wp_query->query_vars )?>'><?php _e('Load more','yafrica')?></a>
                </div>
            <?php endif;?>

        </div>

    </div>

</main>

<?php get_footer(); ?>
