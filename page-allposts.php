<?php
/*
Template Name: Alle Beiträge
*/
?>

<?php get_header(); ?>

    <?php do_action( 'colormag_before_body_content' ); ?>

    <div id="primary">
        <div id="content" class="clearfix">

        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <div class="post cat-post-widget">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <div class="entry">
                        <?php the_content(); ?>
                        <?php
                            $current_date ="";
                            $count_posts = wp_count_posts();
                            $nextpost = 0;
                            $published_posts = $count_posts->publish;
                            $myposts = get_posts(array('posts_per_page'=>$published_posts));
                            foreach($myposts as $post) :
                                $nextpost++;
                                setup_postdata($post);
                                $date = get_the_date("F Y");
                                if($current_date!=$date):
                                    if($nextpost>1): ?>
                                        </ul>
                                    <?php endif; ?>
                                    <h3 class="widget-title">
                                        <span><?php echo $date; ?></span>
                                    </h3>
                                    <ul start = "<?php echo $nextpost; ?>">
                                    <?php $current_date=$date;
                                endif; ?>
                                <li><?php the_title(); ?> &bull; <a href = "<?php the_permalink(); ?>">link</a></li>
                            <?php endforeach; wp_reset_postdata(); ?>
                        </ul>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
    <?php colormag_sidebar_select(); ?>

    <?php do_action( 'colormag_after_body_content' ); ?>

<?php get_footer(); ?>