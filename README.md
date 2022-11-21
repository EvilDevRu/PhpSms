PHP sms client
=

PHP Client for send sms messages via DI.

## Install

composer require evildevru/php-sms

## Requirements

- PHP >= 8.0

## Setting up Yii2

yii2 configure file
```php
'container' => [
    'singletons' => [
        SmsInterface::class => static function () {
            return new SmsRu($_ENV['SMS_API_KEY'], new SmsClient([
                'base_uri' => 'https://sms.ru',
            ]));
        },
    ],
],
```

for example controller
```php
    /**
     * @var SmsInterface
     */
    protected SmsInterface $sms;

    /**
     * @param SmsInterface $sms
     */
    public function __construct(SmsInterface $sms) 
    {
        $this->sms = $sms;
    }

    /**
     * @return void
     */
    public function actionIndex(?string $phone): void
    {
        $response = $this->sms->send($phone, 'wake up');
        if (!$response->isSuccess()) {
            throw new RuntimeException();
        }
    }
```

## Supported services

* sms.ru

You can extend this list.

## Licence

MIT