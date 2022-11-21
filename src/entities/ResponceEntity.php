<?php

namespace EvilDevRu\PhpSms\entities;

class ResponceEntity
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
     * @var array
     */
    protected array $result;

    /**
     * @param string $status
     * @param int $code
     * @param array $result
     */
    public function __construct(string $status, int $code, array $result)
    {
        $this->status = $status;
        $this->code = $code;
        $this->result = $result;
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
     * @return array
     */
    public function getResult(): array
    {
        return $this->result;
    }

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->code == 100;
    }
}