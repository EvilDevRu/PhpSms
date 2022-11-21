<?php

namespace EvilDevRu\PhpSms;

use EvilDevRu\PhpSms\entities\ResponceEntity;

interface SmsInterface
{
    /**
     * @param array|string $number
     * @param string $message
     * @param array $options
     * @return ResponceEntity
     */
    public function send(array|string $number, string $message, array $options = []): ResponceEntity;
}