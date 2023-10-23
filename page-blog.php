<?php get_header('page')?>
        <!--Posts-->
        <section class="section">
            <div class="container">
                <div class="posts">
                
            <?php wp_reset_query(); $query=new WP_Query(array('category_name'=>'posts'));?>
                <?php if($query->have_posts()):?>
                <?php while($query->have_posts()):?>
                <?php $query->the_post();?>
                    <div class="post">
                        <?php the_post_thumbnail('full',array('class'=>"post__image"));?>
                        <div class="post__content">
                            <h2 class="post__title"><?php the_title();?></h2>
                            <p class="post__text"><?php the_excerpt();?></p>
                            <a href=<?php the_permalink();?> class="post__link">Read more &#8594;</a>
                        </div>
                        
                    </div>
                <?php endwhile;?>
                <?php endif;?>
                
                </div>   
            </div>
        </section>
        <!--Posts-->

<?php get_footer()?>        