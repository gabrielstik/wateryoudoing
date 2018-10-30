<?
/*
Template Name: Blog
*/
?>
<? get_header() ?>
<main role="main">
  <div class="blog">
    <header class="header">
      <div class="header__top">
        <div class="header__back">
          <a href="/quizz" title="Go back to the game">< back to the game
        </div>
        <h1 class="header__title">wateryoudoing blog</h1>
        <div class="header__socials"></div>
      </div>
      <nav class="header__nav">
        <ul class="header__nav__list">
          <li class="header__nav__list__item current">
            <a href="#" title="">All</a>
          </li>
          <li class="header__nav__list__item">
            <a href="#" title="">Food</a>
          </li>
          <li class="header__nav__list__item">
            <a href="#" title="">Hygiene</a>
          </li>
          <li class="header__nav__list__item">
            <a href="#" title="">Work</a>
          </li>
          <li class="header__nav__list__item">
            <a href="#" title="">Entertainment</a>
          </li>
          <li class="header__nav__list__item">
            <a href="#" title="">Household</a>
          </li>
          <li class="header__nav__list__item">
            <a href="#" title="">Transport</a>
          </li>
        </ul>
      </nav>
      <div class="header__search">
        <input type="text" name="blog-search" id="blog-search" class="header__search__input" placeholder="Rechercher">
      </div>
    </header>
    <section class="blog__blog">
      <article class="blog__article--first">
        <div class="blog__article--first__content">
          <h2 class="blog__article--first__title">About porks</h2>
          <p class="blog__article--first__author">By Julia Gioviana</p>
          <p class="blog__article--first__excerpt">So strongly and metaphysically did I conceive of my situation then, that while earnestly watching his motions, I seemed distinctly to perceive that my own individuality was now merged in a joint stock company of two.</p>
        </div>
        <div class="blog__article--first__image">
          <img src="<?= get_template_directory_uri() ?>/images/article-1.jpg" alt="">
        </div>
      </article>
      <div class="blog__mosaic">
        <article class="blog__article--mosaic blog__article--large">
          <div class="blog__article--mosaic__image">
            <img src="<?= get_template_directory_uri() ?>/images/article-2.jpg" alt="">
          </div>
          <div class="blog__article--mosaic__content">
            <div class="blog__article--mosaic__category">Alimentation</div>
            <h2 class="blog__article--mosaic__title">Shower or bath</h2>
            <p class="blog__article--mosaic__excerpt">Being the savage's bowsman, that is, the person who pulled the bow-oar in his boat (the second one from forward).</p>
          </div>
        </article>
        <article class="blog__article--mosaic blog__article--small">
        <div class="blog__article--mosaic__image">
            <img src="<?= get_template_directory_uri() ?>/images/article-3.jpg" alt="">
          </div>
          <div class="blog__article--mosaic__content">
            <div class="blog__article--mosaic__category">Alimentation</div>
            <h2 class="blog__article--mosaic__title">Shower or bath</h2>
            <p class="blog__article--mosaic__excerpt">Being the savage's bowsman, that is, the person who pulled the bow-oar in his boat (the second one from forward).</p>
          </div>
        </article>
      </div>
    </section>
  </div>
</main>
<? get_footer() ?>