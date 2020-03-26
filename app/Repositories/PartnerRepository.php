<?php

namespace App\Repositories;

use App\Doctrine\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\ClassMetadata;
use App\Entities\PartnerEntity;

class PartnerRepository extends EntityRepository implements PartnerRepositoryInterface
{
    /**
     * Initializes a new EntityRepository.
     *
     * @param \Doctrine\ORM\EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct($em, new ClassMetadata(PartnerEntity::class));
    }

    public function findAllAndFilterByNameAndAdress()
    {
        // TODO: Implement findAllAndFilterByNameAndAdress() method.
    }
}
