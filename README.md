# Sample task for pilulka.cz
## Author: Pavel Balajka

### Configuration
The configuration is stored in file _config.php_ where you have to set the Twitter API credentials in order to successfully connect and use the Twitter API
There is an option in the configuration file _DISPLAY_OUTPUT_ which specifies the output format - either simple _json_ or rendered in _latte_

### Run the script
To run the script, first you have to install composer dependencies
```
composer install
```

Then you can run the script either by putting it on the server and navigating to _index.php_ or in the console with simple command
```
php index.php
```

### Used libraries
The task uses following 3rd party libraries
- *TwitterOAuth* - https://twitteroauth.com/
- *Latte* - https://latte.nette.org/cs/
