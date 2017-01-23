<?php

namespace PServerCMS\SROUnique\Option;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class SROShardEntityFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return SROShardEntity
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new SROShardEntity($container->get('config')['p-server-sro-unique']['sro']['entity']['shard']);
    }

}