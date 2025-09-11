<?php 
  get_header(); 
?>

<!-- page.php -->
<?php if(have_posts()) : ?>
  <?php while(have_posts()): the_post(); ?>

    <div class="content">
      <?php the_content(); ?>
    </div>

  <?php endwhile; ?>
<?php endif; ?>

<?php
  get_footer(); 
?>