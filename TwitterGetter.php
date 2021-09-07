<?php

/**
 * Task for pilulka.cz
 * Author: Pavel Balajka
 * 
 * TwitterGetter Class
 */

use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterGetter
{
    public const API_SEARCH_TWEETS = 'search/tweets';

    public const API_QUERY_COMBINATOR = ' OR ';

    public const API_RECENT_TWEETS = 'recent';

    private $connection;

    public function __construct()
    {
        $this->connection = null;
    }

    /**
     * Establish twitter API connection with credentials
     *
     * @param string $consumerKey
     * @param string $consumerSecret
     * @param string $accessToken
     * @param string $accesSecret
     * @return void
     */
    public function createConnection(string $consumerKey, string $consumerSecret, string $accessToken, string $accesSecret): void
    {
        $this->connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accesSecret);
    }

    public function searchTweets(array $searchTerms, int $limit = 0)
    {
        if ($this->connection) {
            $searchParameters = [
                'q' => implode(self::API_QUERY_COMBINATOR, $searchTerms),
                'result_type' => self::API_RECENT_TWEETS
            ];
            if ($limit) {
                $searchParameters['count'] = $limit;
            }
            return $this->connection->get(self::API_SEARCH_TWEETS, $searchParameters);
        } else {
            return null;
        }
    }
}
