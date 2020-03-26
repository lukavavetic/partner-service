<?php

namespace App\Mappers\Request;

class PartnerCreateRequestMapper
{
    /** @var string */
    private $name;

    /** @var string */
    private $address;

    public function __construct(string $name, string $address)
    {
        $this->name    = $name;
        $this->address = $address;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }
}