<?php 
  get_header(); 

  $hero = get_field('hero_section');
  $prehead = $hero['prehead'] ?? null;
  $headline = $hero['headline'] ?? null;
  $title_list = $hero['title_list'] ?? null;
  if(!empty(trim($title_list))) {
    $titles = preg_split('/\s*\R/', rtrim($title_list), NULL, PREG_SPLIT_NO_EMPTY);
  }
  $email_intro = $hero['email_intro'];
  $email_address = $hero['email_address'];
  $image = $hero['image'];

?>

<!-- front-page.php -->

    <div class="content">

      <div class="hero-section">
        <div class="hero-text">
          <?php if(!empty(trim($headline))) : ?>
            <h1>
              <?php if(!empty(trim($prehead))) : ?>
                <span class="prehead head-three"><?= $prehead; ?></span> 
              <?php endif; ?>
              <?= $headline; ?>
            </h1>
          <?php endif; ?>
          <div class="title-row">
            <div class="cast-iron-logo">
              <img src="/wp-content/themes/castirontheme/assets/images/castironlogo.png" alt="cast iron pan logo" />
            </div>
            <?php if($titles) : ?>
              <ul class="title-list">
                <?php foreach($titles as $title) : ?>
                  <li><?= $title; ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
          <?php if (!empty(trim($email_address))) : ?>
            <div class="email-row">
              <p class="head-three">
                <?php if (!empty(trim($email_intro))) : ?>
                  <?= $email_intro; ?>
                <?php endif; ?>
                <a href="mailto:<?= $email_address; ?>"><?= $email_address; ?></a>
              </p>
            </div>
          <?php endif; ?>
        
        </div>

        <div class="hero-image">
          <?php if (!empty($image)) : ?>
            <img src="<?php echo $image['url'] ?? null; ?>" alt="<?php echo $image['alt'] ?? null; ?>" />
          <?php endif; ?>
        </div>
      </div>

    </div>


<?php
  get_footer(); 
?>