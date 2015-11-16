<?php
require_once( 'TwitterAPIExchange.php' );

$settings = array(
'oauth_access_token' => '14423524-7U3PtdfbFrj7GSOQ1IVNki8AStUfVVpLFHouskafm',
'oauth_access_token_secret' => "ZomLvrPYvdUO7ukEyp2p5F8wSCDOC3KH9zPkXHN9QO9on",
'consumer_key' => "2LoyxJoauDw9ce85WuwFRYrSJ",
'consumer_secret' => "YwrhIpy7A7ARiFpWWSWxHbDex7nOs3NMv1INmVNALD54CDRZCE"
);
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$user = "twitter";
$getfield = '?screen_name='.$user.'';
$request_method = 'GET';
$twitter = new TwitterAPIExchange($settings);
$twitter_api_response = $twitter->setGetfield($getfield)
->buildOauth($url, $request_method)
->performRequest();
$tweets = json_decode($twitter_api_response, true);
// var_dump($tweets);
foreach( $tweets as $tweet ) {
if( $tweet_limit < 1 ) {
$tweet_raw_date = $tweet['created_at'];
$tweet_link = $tweet['id_str'];
$tweet_content = $tweet['text'];

$tweet_date = date( 'M dS Y', strtotime( $tweet_raw_date ) );
echo '<p>'.$tweet_content.'</p>';
echo '<p class="date">'.$tweet_date.'</p>';
$tweet_limit++;
}
}

?>

