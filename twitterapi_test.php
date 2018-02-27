<?php
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

/** Set access tokens and consumer keys blah blah blah **/

define('CONSUMER_KEY', 'tYDERnEx3EWaPVtMW2Q37r4Xj');
define('CONSUMER_SECRET', '5uFE3gfBkrZtdskQM0vWhNASttLAqGZikyVwFaeFum5Dj3sfSa');
define('ACCESS_TOKEN', '960408518653370368-6jHUrq5W1cHrMEUcKCCnnf5icYjELqJ');
define('ACCCESS_TOKEN_SECRET', 'GB9MKSTXpVCYxHjQntAspblnnFwPNQQ8n20dMqZU1ncGR');

$toa = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCCESS_TOKEN_SECRET);

$query = array(
    "q" => "#RasperryPi+OR+#csharp+OR+#sql+OR+#java+OR+#database+OR+#softwaredev+OR+#amazonaws",
    "count" => "25",
    "lang" => "en",
    "result_type" => "popular"
    /*"tweet_mode" => "extended"*/
);

$results = $toa->get('search/tweets', $query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Twitter API SEARCH</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-offset-1 col-sm-5"> <!--style="width: 500px;"-->
            <div id="carousel-outer" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $counter = 1;
                    foreach ($results->statuses as $result => $tweet) { ?>
                        <div class="carousel-item <?php if ($counter <= 1) {
                            echo " active";
                        } ?>">
                            <div class="row">
                                <div class="col-sm-1">
                                    <img src="<?= $tweet->user->profile_image_url; ?>"/>
                                </div>
                                <div class="col-sm-11">
                                    <p class="tweet-title"><?= $tweet->user->name; ?> -
                                        @<?= $tweet->user->screen_name; ?>
                                    <p class="tweet-body"><?= $tweet->text; ?></p>
                                </div>
                                <div class="col-sm-12">
                                    <p>
                                        <span class="glyphicon glyphicon-comment"></span>
                                        <?= $tweet->reply_count; ?>
                                        <span class="glyphicon glyphicon-retweet"></span>
                                        <?= $tweet->retweet_count; ?>
                                        <span class="glyphicon glyphicon-heart"></span>
                                        <?= $tweet->favorite_count; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                        $counter++;
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div id="fb-root"></div>
            <script>(function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-page" data-href="https://www.facebook.com/ucctechclub/"
                 data-tabs="timeline, events"
                 data-small-header="false"
                 data-adapt-container-width="true"
                 data-hide-cover="false"
                 data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/ucctechclub/"
                            class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/ucctechclub/">UCC Technology Club</a></blockquote>
            </div>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
</body>
</html>