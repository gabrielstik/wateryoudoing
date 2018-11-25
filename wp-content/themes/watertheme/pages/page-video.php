<?
/*
Template Name: Video
*/
?>
<? get_header() ?>
<main role="main">
    <div class="video_page">
        <video class="video_page__video" width=100% autoplay>
            <source src="<?= get_template_directory_uri() ?>/images/video_water.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="video_page__skip"><a href="/quizz/" class="video_page__skip__text">Skip video</a></div>
        <p class="video_page__author"><a target=_blank href="https://www.youtube.com/watch?v=fqPGCphSi0s">Source</a></p>
    </div>
</main>