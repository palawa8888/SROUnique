<?php

namespace PServerCMS\SROUnique\View\Helper;

use Interop\Container\ContainerInterface;
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
        return new UniqueKillList();
    }

}