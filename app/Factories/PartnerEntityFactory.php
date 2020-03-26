<?php

namespace App\Factories;

use App\Entities\PartnerEntityInterface;
use App\Entities\PartnerEntity;
use App\Mappers\Request\PartnerCreateRequestMapper;

class PartnerEntityFactory
{
    public static function make(PartnerCreateRequestMapper $mapper) : PartnerEntityInterface
    {
        $partnerEntity = new PartnerEntity();
        $partnerEntity->setName($mapper->getName());
        $partnerEntity->setAddress($mapper->getAddress());

        return $partnerEntity;
    }
}