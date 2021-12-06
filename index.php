<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while(have_posts()) :?>
      <?php the_post(); ?>
      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      <div>
         <?php firsttheme_post_meta(); ?>
      </div>
      <div>
            <?php the_excerpt(); ?>
      </div>
      <?php firsttheme_read_more(); ?>
    <?php endwhile; ?>
    
    <?php the_posts_pagination(); ?>

<?php else: ?>
    <p><?php echo esc_html__('Sorry, no post matched your criteria'); ?></p>
<?php endif; ?>




<?php get_footer(); ?>