<?
/*
Template Name: Quizz
*/
?>
<? get_header() ?>
<main role="main">
  <div class="quizz">
    <div class="quizz__illus">
      <div class="quizz__toolbar">
        <div class="quizz__toolbar__energy">
          <div class="quizz__toolbar__bar__label">Energy</div>
          <div class="quizz__toolbar__bar__bar">
            <div class="quizz__toolbar__bar__bar__fill"></div>
          </div>
        </div>
        <div class="quizz__toolbar__time">07:02</div>
        <div class="quizz__toolbar__bladder">
          <div class="quizz__toolbar__bar__label">Bladder</div>
          <div class="quizz__toolbar__bar__bar">
            <div class="quizz__toolbar__bar__bar__fill"></div>
          </div>
        </div>
      </div>
      <div class="quizz__illus__container">
        <ul class="quizz__illus__images">
          <li class="quizz__illus__image ref-illustration">
            <img src="<?= get_template_directory_uri() ?>/images/shower.svg">
          </li>
          <li class="quizz__illus__image ref-illustration">
            <img src="<?= get_template_directory_uri() ?>/images/shower.svg">
          </li>
          <li class="quizz__illus__image ref-illustration">
            <img src="<?= get_template_directory_uri() ?>/images/shower.svg">
          </li>
        </ul>
      </div>
    </div>
    <div class="quizz__questions">
      <h1 class="quizz__questions__title">Wake up !</h1>
      <p class="quizz__questions__desc">Your alarm clock is ringing.<br>What do you decide to do ?</p>
      <ul class="quizz__questions__list">
        <li class="quizz__questions__list__item ref-answer">Quick ! Shower time</li>
        <li class="quizz__questions__list__item ref-answer">Take my time : bath</li>
        <li class="quizz__questions__list__item ref-answer">Quick ! Shower time</li>
      </ul>
    </div>
  </div>
</main>
<? get_footer() ?>