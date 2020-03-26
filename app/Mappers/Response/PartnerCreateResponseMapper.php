<?php

namespace App\Mappers\Response;

class PartnerCreateResponseMapper
{
    /** @var string */
    private $message;

    /** @var string */
    private $status;

    public function __construct(string $message, string $status)
    {
        $this->message = $message;
        $this->status  = $status;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}