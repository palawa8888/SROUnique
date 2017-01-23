<?php

namespace PServerCMS\SROUnique\Service;

use Doctrine\ORM\EntityManager;
use PServerCMS\SROUnique\Option\SROShardEntity;

class UniqueKillList
{
    /** @var  EntityManager */
    protected $entityManager;

    /** @var  SROShardEntity */
    protected $sroShardEntity;

    /**
     * UniqueKillList constructor.
     * @param EntityManager $entityManager
     * @param SROShardEntity $sroShardEntity
     */
    public function __construct(EntityManager $entityManager, SROShardEntity $sroShardEntity)
    {
        $this->entityManager = $entityManager;
        $this->sroShardEntity = $sroShardEntity;
    }

    /**
     * @param int $limit
     * @return \PServerCMS\SROUnique\Shard\Entity\UniqueKillList[]
     */
    public function getUniqueKillList($limit = 5)
    {
        /** @var \PServerCMS\SROUnique\Shard\Entity\Repository\UniqueKillList $repository */
        $repository = $this->entityManager->getRepository($this->sroShardEntity->getUniqueKillList());

        return $repository->getLastKills($limit);
    }


}