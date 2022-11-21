<?php

namespace EvilDevRu\PhpSms\entities;

class ResponceSmsEntity
{
    /**
     * @var string
     */
    protected string $status;

    /**
     * @var int
     */
    protected int $code;

    /**
     * @var string
     */
    protected string $phone;

    /**
     * @var string|int|null
     */
    protected string|int|null $id;

    /**
     * @var float|null
     */
    protected float|null $price;

    /**
     * @param string $status
     * @param int $code
     * @param string $phone
     * @param int|string|null $id
     * @param float|null $price
     */
    public function __construct(string $status, int $code, string $phone, int|string|null $id, ?float $price)
    {
        $this->status = $status;
        $this->code = $code;
        $this->phone = $phone;
        $this->id = $id;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return int|string|null
     */
    public function getId(): int|string|null
    {
        return $this->id;
    }

    /**
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
}