<?php get_header('page');?>

<section class="section">
            <div class="container">
                    <div class="post__single">
                        <div class="post__content">
                            <h2 class="post__single__title"><?php the_title();?></h2>
                            <p class="post__single__text"><?the_content();?></p>
                        </div>
                    </div>
            </div>
        </section>

<?php get_footer();?>
