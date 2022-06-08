<?php
/**
 * Template name: News
 */
?>
<?php get_header(); ?>
<?php $categories = get_terms(array(
    'taxonomy'  => 'category',
    'hide_empty'    => false,
    'exclude' => array(1,21),
));?>
<main class="main">

	<div class="category-page">
        <?php if(!empty(get_field('items_logo','option'))):?>
            <img src="<?php the_field('items_logo','option') ?>" class="category-page__sign">
        <?php endif;?>

		<div class="wrap">

			<h1 class="category-page__title anim"><?php _e('News','yafrica')?></h1>
            <p style="max-width:  651px;padding-top: 10px"><?php _e('Incredible things happen at Young Africa on a daily basis. Stay involved and read what goes on at Young Africa International and its affiliates.','yafrica')?></p>

			<ul class="category-page__list anim">
				<li><a href="#" class="is-current"><?php _e('All','yafrica')?></a></li>
                <?php foreach($categories as $category):?>
                    <li>
                        <a href="<?php echo get_term_link($category->term_id)?>"><?php echo $category->name?></a>
                    </li>
                <?php endforeach;?>
			</ul>

			<div class="category-page__controls">
				<h3 class="section-title anim"><?php _e('Our latest actions','yafrica')?></h3>
				<div class="category-page__dropdown js__dropdown">
					<span class="category-page__dropdown-current js__dropdown-current"><?php _e('All')?></span>
					<ul class="category-page__dropdown-list js__dropdown-list">
                        <?php foreach($categories as $category):?>
                            <li>
                                <a href="<?php echo get_term_link($category->term_id)?>"><?php echo $category->name?></a>
                            </li>
                        <?php endforeach;?>
					</ul>
				</div>
			</div>

			<div id="postsContainer" class="category-page__grid">
                <?php $blogPosts = get_posts(array(
                        'post_type' => 'post',
                        'numberposts' => get_option( 'posts_per_page' ),
                ));
                foreach($blogPosts as $blogPost):?>
                    <div class="latest-card anim">
                        <a href="<?php the_permalink($blogPost)?>">
                        <?php if($blogPostImage = get_the_post_thumbnail_url($blogPost,'large')):?>
                            <img src="<?php echo $blogPostImage?>" alt="<?php echo $blogPost->post_title?>" class="latest-card__thumbnail">
                        <?php endif;?>
                        <div class="latest-card__inner">

                            <h6 class="news-date"><?php echo get_the_date('j-n-Y',$blogPost->ID);?></h6>
                            <h4 class="latest-card__title"><?php echo $blogPost->post_title?></h4>
                            <div class="latest-card__excerpt">
                                <?php echo get_the_excerpt($blogPost)?>
                            </div>
                            <span class="brdr-link"><?php _e('Read more','yafrica')?></span>
                        </div>
                        </a>
                    </div>
                <?php endforeach;?>
			</div>

			<div class="category-page__footer anim">
				<a href="#" class="brdr-link loadmore-link"><?php _e('Load more','yafrica')?></a>
			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>
