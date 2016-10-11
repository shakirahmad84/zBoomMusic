<?php get_header(); ?>


<!--------------Content--------------->
<section id="content">
    <div class="wrap-content zerogrid">
        <div class="row block03">
            <div class="col-2-3">
                <div class="wrap-col">

                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                        <?php get_template_part('content', get_post_format() ); ?>
                    <?php endwhile; ?>

                        <ul id="pagi">
                            <li><a class="current" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">next</a></li>
                        </ul>
                        
                    <?php endif ; ?>
                </div>
            </div>
            <div class="col-1-3">
                <div class="wrap-col">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>