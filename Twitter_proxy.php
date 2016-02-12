<?php 
session_start();

require_once("twitteroauth/twitteroauth/twitteroauth.php"); //Path to twitteroauth library

	   

		 //$twitteruser = "lebel33";
		 
		 $notweets = 1;
		 $consumerkey = "O4rs06Mlxu7eDzDhJoukcsX3U";
		 $consumersecret = "XSsIWiezbssS1ubiPlMFgc496Jza4fe8UDQbZLUf5La5RTY3Q1";
		 $accesstoken = "236293439-wuv2MWRkwaOUmd3ZObTPbOcXED7aU0nHfcnLfaRs";
		 $accesstokensecret = "shJP5RAtx9TYwjqq0rAveicge34xjEetJMJYCKuKSOrDE";
		

		function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
			$connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
			return $connection;
		}

		//$screen_name = $_POST['screen_name'];+ '".$_POST['screen_name1']."'
			$connection2 = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);

			$tweets = $connection2 -> get("'https://api.twitter.com/1.1/search/tweets.json?q='".$_POST['screen_name1']."'&count=20");
			//$tweets2 = $connection2 -> get("https://api.twitter.com/1.1/favorites/list.json?screen_name=");

			echo json_encode($tweets);

?>



