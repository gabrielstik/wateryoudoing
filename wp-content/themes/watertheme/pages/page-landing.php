<?
/*
Template Name: Landing
*/
?>
<? get_header() ?>
<main role="main">
  <div class="landing">
    <div class="landing__left">
      <h1 class="landing__title_left">
        <? bloginfo('name') ?>
      </h1>
    </div>
    <div class="landing__right">
      <img src="<?= get_template_directory_uri() ?>/images/wateryoudoing_logo.png" alt="wateryoudoing" class="landing__right__logo">
      <p class="landing__right__text">
      An adult consumes an average of 160 liters of water a day.
      </p>
      <p class="landing__right__text2">
      Beyond its own consumption, water is used to produce a lot of things... Wateryoudoing wants to confront you to your own reality.
      </p>
      <div class="button">
        <a href="/video/" class="button_inside">C'est parti !</a>
      </div>
    </div>
  </div>
</main>
<? get_footer() ?>