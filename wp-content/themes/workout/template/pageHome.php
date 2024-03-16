<?php
// Template name:Page Home
?>
<?php get_header() ?>

<!-- section top -->
<section class="top u-margin-bottom-big">
    <div class="container-fluid">
        <div class="top__inner">
            <div class="top__main">
                <p class="top__title"><?php echo esc_html( get_field('top_title') ); ?></p>
                <?php the_field('top_content'); ?>
            </div>
            <div class="top__img">
            <?php 
                $image = get_field('top_image');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                }
                ?>
            </div>
            <div class="top__block_items">
                <?php if( have_rows('top_block_items') ): ?>
                    <?php while( have_rows('top_block_items') ): the_row(); ?>
                        <div class="top__block_item"><?$item = the_sub_field('block_item');
                        ?>
                        <?php echo wp_get_attachment_image( $item, 'full' ); ?></div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- section posts -->
<section class="posts u-margin-bottom-big">
    <div class="container-fluid">
        <div class="posts__inner">
            <h2><?php echo esc_html(get_field('posts_title')); ?></h2>
            <?php the_field('posts_button'); ?>
            <div class="posts__items">
                <?php if( have_rows('posts_content') ): ?>
                     <?php while( have_rows('posts_content') ): the_row(); ?>
                        <div class="posts__item"><? $image = get_sub_field('post_content_image');
                         ?>
                         <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                         <?php acf_esc_html( the_sub_field('post_content_text') ); ?></div>
                     <?php endwhile; ?>
                 <?php endif; ?>
            </div>
        </div>
        <button class="posts__btn-load" id="load-more-posts">See more</button>
            <div id="posts-container">
                <!-- Сюди будуть додаватися додаткові пости через AJAX -->
            </div>
    </div>
</section>

<!-- section team -->
<section class="team u-margin-bottom-big">
    <div class="container-fluid">
        <div class="team__inner">
            <h2><?php echo esc_html(get_field('team_title')); ?></h2>
            <?php the_field('team_button'); ?>
            <div class="team__items">
                <?php if( have_rows('team_content') ): ?>
                     <?php while( have_rows('team_content') ): the_row(); ?>
                        <div class="team__item"><? $image = get_sub_field('team_content_image');
                         ?>
                         <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                         <div class="team__item_card"><?php acf_esc_html( the_sub_field('team_content_text') ); ?></div></div>
                     <?php endwhile; ?>
                 <?php endif; ?>
            </div>
        </div>
        <button class="team__btn-load" id="load-more-posts">See more</button>
        <div id="posts-container">
            <!-- Сюди будуть додаватися додаткові пости через AJAX -->
        </div>
    </div>
</section>

<!-- section info -->
<section class="info u-margin-bottom-medium">
    <div class="container-fluid info__container">
        <div class="info__inner text-center">
            <?php the_field('info_content');?>
        </div>
    </div>
</section>

<?php get_footer() ?>
