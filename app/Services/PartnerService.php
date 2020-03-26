<?php

namespace App\Services;

use App\Mappers\Request\PartnerCreateRequestMapper;
use App\Mappers\Response\PartnerCreateResponseMapper;
use App\Factories\PartnerEntityFactory;
use App\Repositories\PartnerRepositoryInterface;

class PartnerService
{
    /** @var \App\Repositories\PartnerRepositoryInterface */
    private $partnerRepository;

    public function __construct(PartnerRepositoryInterface $partnerRepository)
    {
        $this->partnerRepository = $partnerRepository;
    }

    public function create(PartnerCreateRequestMapper $mapper): PartnerCreateResponseMapper
    {
        $partnerEntity = PartnerEntityFactory::make($mapper);

        $this->partnerRepository->save($partnerEntity);

        $this->partnerRepository->findAllAndFilterByNameAndAdress();

        return new PartnerCreateResponseMapper("Created!", 201);
    }
}