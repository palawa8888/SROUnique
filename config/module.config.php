<?php

use PServerCMS\SROUnique\Shard;
use PServerCMS\SROUnique\Service;
use PServerCMS\SROUnique\Option;
use PServerCMS\SROUnique\View\Helper;

return [
    'service_manager' => [
        'factories' => [
            Service\UniqueKillList::class => Service\UniqueKillListFactory::class,
            Option\SROShardEntity::class => Option\SROShardEntityFactory::class,
        ],
    ],
    'doctrine' => [
        'driver' => [
            'sro_shard_entities' => [
                'paths' => [__DIR__ . '/../src/Shard/Entity']
            ],
        ],
    ],
    'view_helpers' => [
        'aliases' => [
            'uniqueKillListPServerSROUnique' => Helper\UniqueKillList::class,
        ],
        'factories' => [
            Helper\UniqueKillList::class => Helper\UniqueKillListFactory::class,
        ],
    ],
    'view_manager' => [
        'template_map' => [
            'p-server-sro-unique/unique-kill-list' => __DIR__ . '/../view/helper/unique-kill-list.phtml',
        ],
        'template_path_stack' => [
            'PServerSROUnique' => __DIR__ . '/../view',
        ],
    ],
    'p-server-sro-unique' => [
        'sro' => [
            'entity' => [
                'shard' => [
                    'unique_info' => Shard\Entity\UniqueInfo::class,
                    'unique_kill_list' => Shard\Entity\UniqueKillList::class,
                ],
            ],
        ],
    ],
];