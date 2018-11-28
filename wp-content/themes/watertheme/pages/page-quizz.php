<?
/*
Template Name: Quizz
*/
?>
<? get_header() ?>
<main role="main">
  <?
    $args = array(
      'post_type' => 'questions',
      'p' => !empty($_SESSION['current_question']) ? $_SESSION['current_question'] : get_field('first_question', 'options'),
      'posts_per_page' => 1
    );
    $the_query = new WP_Query($args);
    $the_query->the_post();
  ?>
  <div class="quizz" data-uri="<?= THEME_ROOT ?>">
    <div class="quizz__illus">
      <div class="quizz__background">
        <div class="quizz__background__image" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)"></div>
      </div>
      <div class="quizz__timebar">
        <div class="quizz__timebar__time"><? the_field('time') ?></div>
      </div>
      <div class="quizz__illus__container">
        <? if (have_rows('answers')): ?>
        <ul class="quizz__illus__images">
          <? while (have_rows('answers')): the_row() ?>
          <li class="quizz__illus__image ref-illustration">
            <img src="<?= get_the_post_thumbnail_url(get_sub_field('item')) ?>">
          </li>
          <? endwhile ?>
        </ul>
        <? endif ?>
      </div>
      <div class="quizz__toolbar">
        <div class="quizz__toolbar__energy">
          <div class="quizz__toolbar__bar__label ref-energy" energy="<? $_SESSION['energy'] ? $_SESSION['energy'] : 100 ?>"><a href="/wp-content/themes/watertheme/api/_destroy-session.php">Energy</a></div>
          <div class="quizz__toolbar__bar__block"><img class="quizz__toolbar__bar__block__image" src="<?= get_template_directory_uri() ?>/images/slumber.svg"></div>
          <div class="quizz__toolbar__bar__bar">
            <div class="quizz__toolbar__bar__bar__fill ref-energy-fill"></div>
          </div>
        </div>
        <div class="quizz__toolbar__hunger">
          <div class="quizz__toolbar__bar__label ref-hunger" hunger="<? $_SESSION['hunger'] ? $_SESSION['hunger'] : 100 ?>">Hunger</div>
          <div class="quizz__toolbar__bar__block"><img class="quizz__toolbar__bar__block__image" src="<?= get_template_directory_uri() ?>/images/hamburger.svg"></div>
          <div class="quizz__toolbar__bar__bar">
            <div class="quizz__toolbar__bar__bar__fill ref-hunger-fill"></div>
          </div>
        </div>
        <div class="quizz__toolbar__bladder">
          <div class="quizz__toolbar__bar__label ref-bladder" bladder="<? $_SESSION['bladder'] ? $_SESSION['bladder'] : 100 ?>">Bladder</div>
          <div class="quizz__toolbar__bar__block"><img class="quizz__toolbar__bar__block__image" src="<?= get_template_directory_uri() ?>/images/toilet.svg"></div>
          <div class="quizz__toolbar__bar__bar">
            <div class="quizz__toolbar__bar__bar__fill ref-bladder-fill"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="quizz__questions">
      <div class="b-oh">
        <h1 class="quizz__questions__title"><? the_title() ?></h1>
      </div>
      <p class="quizz__questions__desc"><? the_field('question') ?></p>
      <? if (have_rows('answers')): ?>
      <ul class="quizz__questions__list">
        <? while (have_rows('answers')): the_row() ?>
        <li
          class="quizz__questions__list__item ref-answer <?
            foreach (wp_get_post_terms(get_sub_field('item'), 'types', array('fields' => 'all')) as $term) {
              echo 'taxo-'.$term->slug.' ';
            }
          ?>"
          next="<? echo get_sub_field('next') == 'Résultats' ?  '/resultats' : get_sub_field('next_answer') ?>"
          delta-energy="<? the_field('energy', get_sub_field('item')) ?>"
          delta-hunger="<? the_field('hunger', get_sub_field('item')) ?>"
          delta-bladder="<? the_field('bladder', get_sub_field('item')) ?>"
          delta-liters="<? the_field('water', get_sub_field('item')) ?>"
        ><? the_sub_field('answer') ?></li>
        <? endwhile ?>
      </ul>
      <? endif ?>
    </div>
  </div>
  <iframe class="ref-bo" src="<?= THEME_ROOT.'/sounds/bo.mp3' ?>"allow="autoplay" loop="true" style="display:none"></iframe> 
</main>
<? get_footer() ?>