<?php
$trend= $_REQUEST['trend'];

ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

$settings = array(
    'oauth_access_token' => "106913520-DyzJOkejPlWyiLjjKvgz0rvkPkyVr61pPCCI2Lxb",
    'oauth_access_token_secret' => "J5jC4EKGAkaHnXeOAJ8ElzGz10jqK8TS7QatTQXLxu11T",
    'consumer_key' => "Xz7ZvAmt9Tqjb0isGsn7j7lxQ",
    'consumer_secret' => "Y6mfkwrHMLcRPVXdlUwwjM487HMwmLC6vVz3hbGiXtgYIZHIOw"
);
$url = 'https://api.twitter.com/1.1/search/tweets.json';
//$getfield = '?q=%23GameofThrones&lang=en'; change result type?
$getfield = '?q=%23' . $trend . '&lang=en&count=10';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);

/*echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();*/
    
$tweetData = json_decode($twitter->setGetfield($getfield)
              ->buildOauth($url, $requestMethod)
              ->performRequest(),$assoc = TRUE);

foreach($tweetData['statuses'] as $items)
    {
    	$date = strtotime($items['created_at']);
    	
        echo "<div class='t-item row'>";
        echo "<a class ='content' href='http://twitter.com/" . $items['user']['screen_name'] . "' target='_blank'>";
        echo "<img class='avatar' src='" . $items['user']['profile_image_url'] . "' alt='avatar'>";
        echo "<strong class='fullname'>" . $items['user']['name'] . "</strong>";
        echo "<span class='username'>@<b>" . $items['user']['screen_name'] . "</b></span></a> - <a href='http://twitter.com/user/status/" .$items['id'] . "' target='_blank'><span class='time'>" . date("F j, g:i a", $date) . "</span></a>";
        //echo " - <a href='http://twitter.com/user/status/" .$items['id'] . "' target='_blank'><div class='time'>" . date("F j, g:i a", $date) . "</div></a>";
        //echo "</a>";
        
        if (isset($items['retweeted_status'])) { //fix truncating retweets
			$tweet = "RT @{$items['retweeted_status']['user']['screen_name']}: {$items['retweeted_status']['text']}";
		} else {
			$tweet = $items['text'];
		}
        echo "<div class='tweet-container'><p class='tweet' lang='en'>" . $tweet . "</p></div></div>";
        
        //echo "<div class='time'><a href='http://twitter.com/user/status/" .$items['id'] . "' target='_blank'>" . date("F j, g:i a", $date) . "</a></div></div>";
    }
echo "<script>pageComplete();</script>";
?>