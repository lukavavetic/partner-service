<?php

namespace App\Doctrine;

use Doctrine\ORM\EntityRepository as BaseEntityRepository;

class EntityRepository extends BaseEntityRepository
{
    /**
     * @param object $entity
     *
     * @return object
     *
     * @throws \Throwable
     */
    public function save($entity)
    {
        $callback = function() use ($entity) {
            $this->getEntityManager()->persist($entity);

            return $entity;
        };

        return $this->getEntityManager()->transactional($callback);
    }
}
