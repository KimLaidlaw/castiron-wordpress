<?php 
  get_header(); 

  $hero = get_field('hero_section');
  $prehead = $hero['prehead'] ?? null;
  $headline = $hero['headline'] ?? null;
  $title_list = $hero['title_list'] ?? null;
  if(!empty(trim($title_list))) {
    $titles = preg_split('/\s*\R/', rtrim($title_list), NULL, PREG_SPLIT_NO_EMPTY);
  }

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
      <?php if($titles) : ?>
        <ul class="title-list">
          <?php foreach($titles as $title) : ?>
            <li><?= $title; ?></li>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </div>

  <?php endwhile; ?>
<?php endif; ?>

<?php
  get_footer(); 
?>