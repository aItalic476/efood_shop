<?php get_header('page')?>    
    <!--Menu-->
    <section class="section">
        <div class="container">

            <h2 class="section__title">Burgers</h2>
            <div class="menu__content">
            <?php wp_reset_query(); $query=new WP_Query(array('category_name'=>'products'));?>
                <?php if($query->have_posts()):?>
                <?php while($query->have_posts()):?>
                <?php $query->the_post();?>
                <div class="menu__item">
                    <?php the_post_thumbnail('full',array('class'=>"item__image"));?>
                    <aside class="item__content">
                        <p class="item__title"><?php the_title();?></p>
                        <p class="item__price"><?php the_excerpt();?></p>
                        <a href=<?php the_permalink();?> class="item__btn">Purchase</a>
                    </aside>
                </div>
               <?php endwhile;?>
                <?php endif;?>
            </div>
        </div>
    </section>
    <!--Menu-->
<?php get_footer()?>