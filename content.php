
<article>
    <?php the_post_thumbnail(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="info">[By <?php the_author(); ?> on <?php the_time('F d, Y'); ?> with <?php comments_popup_link(); ?>]</div>
    <?php read_more(20); ?><a href="<?php the_permalink(); ?>"> Read More</a>
</article>
