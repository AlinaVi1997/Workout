    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="footer__inner">
                        <div class="footer__block col-md-4">
                            <?php if($logo = get_field('footer_logo', 'option')): ?>
                                <div class="footer__logo">
                                    <a href="<?php echo get_site_url(); ?>">
                                        <img src="<?php echo $logo; ?>" alt="Logo" class="site-logo">
                                    </a>
                                </div>
                            <?php endif; ?>
                            <!-- <div class="footer__logo"><?php the_field('footer_logo', 'option')?>
                            <p><?php echo esc_html( get_field('footer_sub_logo', 'option') ); ?></p></div> -->
                            <?php the_field('footer_content', 'option'); ?>
                            <div class="footer__social">
                                <?php if( have_rows('footer_link', 'option') ): ?>
                                    <?php while( have_rows('footer_link', 'option') ): the_row();
                                        $image = get_sub_field('icon_img', 'option');?>
                                        <div class="footer__icon_link"><a class="icon_link" href="<?php the_sub_field('icon_link', 'option'); ?>">
                                    <?php echo wp_get_attachment_image( $image, 'full' ); ?></a></div> 
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>    
                        <div class="footer__nav_menu_items">
                            <div class="footer__nav_menu_column">
                                <p class="footer__nav_menu_title"><?php echo esc_html( get_field('footer_nav_menu_title_info', 'option') ); ?></p>
                                <?php $footer_info= get_field("footer_nav_menu_info", 'option');
                                wp_nav_menu( array(
                                    'menu' => $footer_info,
                                    'container' => false,
                                    'menu_class' => 'footer__nav_menu_list list-unstyled m-0',
                                    'fallback_cb'=> ''
                                ));?>
                            </div>
                            <div class="footer__nav_menu_column">
                                <p class="footer__nav_menu_title"><?php echo esc_html( get_field('footer_nav_menu_title_support', 'option') ); ?></p>
                                <?php $footer_support= get_field("footer_nav_menu_support", 'option');
                                wp_nav_menu( array(
                                    'menu' => $footer_support,
                                    'container' => false,
                                    'menu_class' => 'footer__nav_menu_list list-unstyled m-0',
                                    'fallback_cb'=> ''
                                ));?>
                            </div> 
                        </div>
                        <div class="footer__form">
                            <?php the_field("footer_form", 'option'); ?>
                        </div>   
                    </div>
                    <?php if($copyright = get_field('footer_copyright', 'option')): ?>
                            <div class="footer__copyright">
                                <?php echo $copyright; ?>
                            </div>
                        <?php endif; ?>
                </div>
            </div>
        </div>     
</footer>
</body>
</html>