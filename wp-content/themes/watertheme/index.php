<? get_header() ?>
<div id="content">
  <h1>Contenu Principal</h1>
  <? if (have_posts()): ?>
    <? while (have_posts()): the_post() ?>
      <h1><a href="<? the_permalink() ?>" title="<? the_title() ?>"><? the_title() ?></a></h1>
      <h2>Posté le <? the_time('l j F Y') ?></h2>
      <p><? the_content() ?></p>
    <? endwhile ?>
  <? else: ?>
  <p>Nous n'avons pas trouvé d'article répondant à votre recherche</p>
  <? endif ?>
</div>
<? get_footer() ?>