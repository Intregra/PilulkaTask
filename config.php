<?php

/**
 * Task for pilulka.cz
 * Author: Pavel Balajka
 * 
 * Configuration file with defined constants
 */

// twitter API credentials
define('TWITTER_CONSUMER_KEY', 'put_your_key_here');
define('TWITTER_CONSUMER_SECRET', 'put_your_key_here');
define('TWITTER_ACCESS_TOKEN', 'put_your_key_here');
define('TWITTER_ACCESS_SECRET', 'put_your_key_here');

// how to display output - possible values: 'json', 'latte'
define('DISPLAY_OUTPUT', 'latte');
define('OUTPUT_LATTE_FILE', 'tweets.latte');

// how many recent tweets to search
define('TWEET_LIMIT', 100);

// what terms to search for on twitter
$searchTerms = [
    'pilulka.cz',
    '#pilulka',
    '#pilulkacz'
];
