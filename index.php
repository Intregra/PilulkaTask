<?php

/**
 * Task for pilulka.cz
 * Author: Pavel Balajka
 * 
 * Main file for execution
 */

require 'vendor/autoload.php';
require 'config.php';
require 'TwitterGetter.php';

// example execution
$getter = new TwitterGetter;
$getter->createConnection(TWITTER_CONSUMER_KEY, TWITTER_CONSUMER_SECRET, TWITTER_ACCESS_TOKEN, TWITTER_ACCESS_SECRET);

if (DISPLAY_OUTPUT == 'latte') {
    $tweets = $getter->searchTweets($searchTerms, TWEET_LIMIT);
    $latte = new Latte\Engine;
    $latte->render(OUTPUT_LATTE_FILE, ['tweets' => $tweets]);
    
} else if (DISPLAY_OUTPUT == 'json') {
    echo json_encode($getter->searchTweets($searchTerms, TWEET_LIMIT));
}