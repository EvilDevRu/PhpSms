<?php

namespace EvilDevRu\PhpSms\entities;

class StatusEntity
{
    /**
     * @var int|string
     */
    protected int|string $id;

    /**
     * @var int|string
     */
    protected int|string $code;

    /**
     * @var string|null
     */
    protected ?string $text;

    /**
     * @param int|string $id
     * @param int|string $code
     * @param string|null $text
     */
    public function __construct(int|string $id, int|string $code, ?string $text)
    {
        $this->id = $id;
        $this->code = $code;
        $this->text = $text;
    }

    /**
     * @return int|string
     */
    public function getId(): int|string
    {
        return $this->id;
    }

    /**
     * @return int|string
     */
    public function getCode(): int|string
    {
        return $this->code;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }
}