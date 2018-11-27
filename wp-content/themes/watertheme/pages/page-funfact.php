<?
/*
Template Name: Fun Fact
*/
?>
<? get_header() ?>
<main role="main">
    <? if (have_rows('facts')): ?>
    <? while (have_rows('facts')): the_row() ?>
    <? var_dump(get_field('facts')) ?>
    <? if (the_sub_field('id') === !empty($_SESSION['isEmpty']) ? 'energy': $_SESSION['isEmpty']): ?>
    <div class="funfact">
        <div class="funfact__content">
            <img class="funfact__content__img" src="<? the_sub_field('image') ?>" alt="dream">
            <h1 class="funfact__content__title"><? the_sub_field('title') ?></h1>
            <p class="funfact__content__text"><? the_sub_field('text') ?></p>
            <div class="funfact__content__button"><a href=# class="funfact__content__link">Ok...</a></div>
        </div>
    </div>
    <? endif ?>
    <? endwhile ?>
    <? endif ?>
</main>
