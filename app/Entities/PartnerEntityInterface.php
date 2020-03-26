<?php

namespace App\Entities;

interface PartnerEntityInterface
{
    public function getName() : string;
    public function setName(string $name) : void;

    public function getAddress() : string;
    public function setAddress(string $name) : void;
}