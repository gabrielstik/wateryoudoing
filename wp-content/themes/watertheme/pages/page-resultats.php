<?
/*
Template Name: Résultats
*/
?>
<? get_header() ?>
<main role="main">
    <div class="results">
        <div class="results__container1">
            <div class="results__container1_left">
                <img class="results__toilets" src="<?= get_template_directory_uri() ?>/images/toilets.svg" alt="">
                <div class="results__button">
                    <a href="/quizz/" class="results__button_inside">Play again</a>
                </div>
            </div>
            <div class="results__container1_right">
                <h1 class="results__points"><?= $_SESSION['liters'] ?> litres</h1>
                <p class="results__txt">Cette consommation correspond à 832 chasses d’eau tirées en un seul jour.</p>
                <p class="results__txt">Ce résultat correspond à ta consommation propre, ainsi qu’à toute l’eau utilisée pour produire ce que tu as utilisé tout au long de ta journée.</p>
                <div class="results__twitter">
                    <img class="results__twitter_svg" src="<?= get_template_directory_uri() ?>/images/twitter.svg" alt="" >
                    <a href="#" class="results__twitter_txt">Share on Twitter</a>
                </div>
                <div class="results__facebook">
                    <img class="results__facebook_svg" src="<?= get_template_directory_uri() ?>/images/facebook.svg" alt="" >
                    <a href="#" class="results__twitter_txt">Share on Facebook</a>
                </div>
            </div>
        </div> 
        <div class="results__container2">
            <div class="results__graphs">
                <div class="results__graph">
                    <h3 class="results__label"><?= $_SESSION['termsHygiene'] ?> L</h3>
                    <div class="results__graph_bar results__hygiene">
                      <div class="results__graph_bar__fill"></div>
                    </div>
                    <h3 class="results__label">Hygiene</h3>   
                </div>
                <div class="results__graph">
                    <h3 class="results__label"><?= $_SESSION['termsTransport'] ?> L</h3>
                    <div class="results__graph_bar results__transport">
                      <div class="results__graph_bar__fill"></div>
                    </div>
                    <h3 class="results__label">Transport</h3>   
                </div>
                <div class="results__graph">
                    <h3 class="results__label"><?= $_SESSION['termsTechnology'] ?> L</h3>
                    <div class="results__graph_bar results__technology">
                      <div class="results__graph_bar__fill"></div>
                    </div>
                    <h3 class="results__label">Technology</h3>   
                </div>
                <div class="results__graph">
                    <h3 class="results__label"><?= $_SESSION['termsDrinkEat'] ?> L</h3>
                    <div class="results__graph_bar results__drink">
                      <div class="results__graph_bar__fill"></div>
                    </div>
                    <h3 class="results__label">Drink / Eat</h3>   
                </div>
                <div class="results__graph">
                    <h3 class="results__label"><?= $_SESSION['termsActivities'] ?> L</h3>
                    <div class="results__graph_bar results__activities">
                      <div class="results__graph_bar__fill"></div>
                    </div>
                    <h3 class="results__label">Activities</h3>   
                </div>
            </div>
        </div>
    <div>
</main>


<? get_footer() ?>