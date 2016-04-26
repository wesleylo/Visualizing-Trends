<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

$settings = array(
    'oauth_access_token' => "106913520-212H1VL61lc5GK9uj24Dvzd4UYkOmovVPjY9vE84",
    'oauth_access_token_secret' => "RgAIsAmi9N3MeGzE6OnodGoFLNCCRtix5wlZoFycd3RvM",
    'consumer_key' => "DOKClhb2QrQOtTIkqhbHWIUhj",
    'consumer_secret' => "4UwCp3N6BRy9341JnhpG9U943cmqurfMD5cPKPc75ftlFuHSlc"
);
$url = 'https://api.twitter.com/1.1/trends/place.json';
$getfield = '?id=2452078';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);

echo $twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest();
             
$tweetData = json_decode($twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest(), $assoc = TRUE);            

$topTrend = "N/A";
$trend_URL = "";
$tweet_volume = 0;
foreach($tweetData[0]['trends'] as $items)
    {
    	if ($items['name'][0] === "#") { //is hashtag trend
    		echo $items['name'];
    		echo $items['tweet_volume'];
    		if($items['tweet_volume'] >= $tweet_volume) { //is larger or more recent trend
    			$topTrend = $items['name'];
    			$trend_URL = $items['url'];
				$tweet_volume = $items['tweet_volume'];
    		}
    	} else {
    		echo $items['name'];
    	}
    }
    echo "<br>" . $topTrend . "<br>" . $trend_URL . "<br>" . $tweet_volume;
?>