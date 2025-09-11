<?php 
  get_header(); 

  $hero = get_field('hero_section');
  $prehead = $hero['prehead'] ?? null;
  $headline = $hero['headline'] ?? null;

?>

<!-- front-page.php -->
<?php if(have_posts()) : ?>
  <?php while(have_posts()): the_post(); ?>

    <div class="content">
      <?php if(!empty(trim($headline))) : ?>
        <h1>
          <?php if(!empty(trim($prehead))) : ?>
            <span class="prehead"><?= $prehead; ?></span> 
          <?php endif; ?>
          <?= $headline; ?>
        </h1>
      <?php endif; ?>
    </div>

  <?php endwhile; ?>
<?php endif; ?>

<?php
  get_footer(); 
?>