<?php

namespace App\Entities;

class PartnerEntity implements PartnerEntityInterface
{
    private $id;

    private $company_name;

    private $companyAddress;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName() : string
    {
        return $this->company_name;
    }

    public function setName(string $name): void
    {
        $this->company_name = $name;
    }

    public function getAddress() : string
    {
        return $this->companyAddress;
    }

    public function setAddress(string $address): void
    {
        $this->companyAddress = $address;
    }
}
