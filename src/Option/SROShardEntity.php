<?php

namespace PServerCMS\SROUnique\Option;

use PServerCMS\SROUnique\Shard\Entity;
use Zend\Stdlib\AbstractOptions;

class SROShardEntity extends AbstractOptions
{
    protected $__strictMode__ = false;

    /** @var string */
    protected $uniqueInfo = Entity\UniqueInfo::class;

    /** @var string */
    protected $uniqueKillList = Entity\UniqueKillList::class;

    /**
     * @return string
     */
    public function getUniqueInfo()
    {
        return $this->uniqueInfo;
    }

    /**
     * @param string $uniqueInfo
     * @return self
     */
    public function setUniqueInfo($uniqueInfo)
    {
        $this->uniqueInfo = $uniqueInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getUniqueKillList()
    {
        return $this->uniqueKillList;
    }

    /**
     * @param string $uniqueKillList
     * @return self
     */
    public function setUniqueKillList($uniqueKillList)
    {
        $this->uniqueKillList = $uniqueKillList;
        return $this;
    }

}