<?php

namespace PServerCMS\SROUnique\Service;

use Interop\Container\ContainerInterface;
use PServerCMS\SROUnique\Option\SROShardEntity;
use Zend\ServiceManager\Factory\FactoryInterface;

class UniqueKillListFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return UniqueKillList
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new UniqueKillList(
            $container->get('doctrine.entitymanager.orm_sro_shard'),
            $container->get(SROShardEntity::class)
        );
    }

}