<?
/*
Template Name: Quizz
*/
?>
<? get_header() ?>
<main role="main">
  <a href="/wp-content/themes/watertheme/api/_destroy-session.php">Destroy session</a>
  <div class="quizz">
    <?
      $args = array(
        'post_type' => 'questions',
        'p' => !empty($_SESSION['current_question']) ? $_SESSION['current_question'] : get_field('first_question', 'options'),
        'posts_per_page' => 1
      );
      $the_query = new WP_Query($args);
      $the_query->the_post();
    ?>
    <div class="quizz__illus">
      <div class="quizz__timebar">
        <div class="quizz__time"><? the_field('time') ?></div>
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
          <div class="quizz__toolbar__bar__label ref-energy" energy="<? $_SESSION['energy'] ? $_SESSION['energy'] : 100 ?>">Energy</div>
          <div class="quizz__toolbar__bar__bar">
            <div class="quizz__toolbar__bar__bar__fill ref-energy-fill"></div>
          </div>
        </div>
        <div class="quizz__toolbar__hunger">
          <div class="quizz__toolbar__bar__label ref-hunger" hunger="<? $_SESSION['hunger'] ? $_SESSION['hunger'] : 100 ?>">Hunger</div>
          <div class="quizz__toolbar__bar__bar">
            <div class="quizz__toolbar__bar__bar__fill ref-hunger-fill"></div>
          </div>
        </div>
        <div class="quizz__toolbar__bladder">
          <div class="quizz__toolbar__bar__label ref-bladder" bladder="<? $_SESSION['bladder'] ? $_SESSION['bladder'] : 100 ?>">Bladder</div>
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
          class="quizz__questions__list__item ref-answer"
          next="<? echo get_sub_field('next') == 'Résultats' ?  '/resultats' : get_sub_field('next_answer') ?>"
          delta-energy="<? the_field('energy', get_sub_field('item')) ?>"
          delta-hunger="<? the_field('hunger', get_sub_field('item')) ?>"
          delta-bladder="<? the_field('bladder', get_sub_field('item')) ?>"
        ><? the_sub_field('answer') ?></li>
        <? endwhile ?>
      </ul>
      <? endif ?>
    </div>
  </div>
</main>
<? get_footer() ?>