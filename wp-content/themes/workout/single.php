<?php
/**
*Template name:Posts
 *
 * Loop container for single post content
 */
get_header(); ?>
<?php
// Запит на пости типу "Карти"
$query = new WP_Query(array(
    'post_type' => 'cards',
    'posts_per_page' => -1 // Відобразити всі пости
));
// Перевірка чи є пости
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
?>
    <div class="card">
        <h2><?php the_title(); ?></h2>
        <div class="card-content">
            <?php the_content(); ?>
        </div>
    </div>
<?php
    endwhile;
    wp_reset_postdata();
else :
    echo 'error';
endif;
?>
<?php get_footer() ?>