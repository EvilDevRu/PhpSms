<?php

namespace EvilDevRu\PhpSms;

use EvilDevRu\PhpSms\entities\ResponceEntity;
use EvilDevRu\PhpSms\entities\ResponceSmsEntity;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;

/**
 * @link sms.ru
 */
class SmsRu implements SmsInterface
{
    /**
     * @var string
     */
    protected string $apiKey;

    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @param string $apiKey
     * @param ClientInterface $client
     */
    public function __construct(string $apiKey, ClientInterface $client)
    {
        $this->apiKey = $apiKey;
        $this->client = $client;
    }

    /**
     * @inheritDoc
     * @throws GuzzleException
     */
    public function send(array|string $number, string $message, array $options = []): ResponceEntity
    {
        $res = $this->client->request('POST', '/sms/send?json=1', array_merge($options, [
            'form_params' => [
                'api_id' => $this->apiKey,
                'to' => $number,
                'msg' => $message,
            ],
        ]));

        $data = json_decode($res->getBody()->getContents(), true);
        $phones = [];

        foreach ($data['sms'] as $phone => $item) {
            $phones[] = new ResponceSmsEntity(
                $item['status'],
                $item['status_code'],
                $phone,
                $item['sms_id'],
                (float)$item['cost']
            );
        }

        return new ResponceEntity(
            $data['status'],
            $data['status_code'],
            $phones
        );
    }
}