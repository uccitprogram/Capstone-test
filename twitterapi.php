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
);

$results = $toa->get('search/tweets', $query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Twitter API SEARCH</title>
</head>
<body>
<?php foreach ($results->statuses as $result => $tweet) { ?>
    Tweet : <img src="<?=$tweet->user->profile_image_url;?>" /><?=$tweet->text; ?><br>
<?php } ?>
  
 
</body>
</html>