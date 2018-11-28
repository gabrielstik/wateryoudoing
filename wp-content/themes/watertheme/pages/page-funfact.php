<?
/*
Template Name: Fun Fact
*/
?>
<? get_header() ?>
<main role="main">
    <? if (have_rows('facts')): ?>
    <? while (have_rows('facts')): the_row() ?>
    <? if (the_sub_field('id') === !empty($_GET['fact']) ? 'energy': $_GET['fact']): ?>
    <div class="funfact">
      <div class="funfact__content">
        <div class="funfact__content__img">
          <img src="<? the_sub_field('image') ?>" alt="dream">
        </div>
        <h1 class="funfact__content__title"><? the_sub_field('title') ?></h1>
        <p class="funfact__content__text"><? the_sub_field('text') ?></p>
        <div class="funfact__content__button"><a href=# class="funfact__content__link">Ok...</a></div>
      </div>
    </div>
    <? endif ?>
    <? endwhile ?>
    <? endif ?>
</main>
