<?php get_header(); ?>

<section>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article>
<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
<?php the_content(); ?>
</article>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria'); ?></p>
<?php endif; ?>
</section>

<?php get_footer(); ?>