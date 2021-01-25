# Yellow plane PHP SDK

Yellow plane is a telegram bot that is designed to broadcast messages to the different teams.

To broadcast a message use this simple interface:

```php
use Dontgiveafish\YellowPlane;
use GuzzleHttp\Client as Guzzle;

$plane = new YellowPlane\Client(new Guzzle(), 'http://bot-gateway.org/v1', 'team');
$plane->broadcast('Hello world!');
```

## References

Yellow plane backend and infrastructure: 
https://github.com/dontgiveafish/yellow-plane-telegram-bot
