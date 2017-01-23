<?php

namespace PServerCMS\SROUnique\View\Helper;

use PServerCMS\SROUnique\Service\UniqueKillList as UniqueKillListService;
use Zend\Form\View\Helper\AbstractHelper;
use Zend\View\Model\ViewModel;

class UniqueKillList extends AbstractHelper
{
    /** @var  UniqueKillListService */
    protected $uniqueKillList;

    /**
     * UniqueKillList constructor.
     * @param UniqueKillListService $uniqueKillList
     */
    public function __construct(UniqueKillListService $uniqueKillList)
    {
        $this->uniqueKillList = $uniqueKillList;
    }

    /**
     * @param int $limit
     * @return ViewModel
     */
    public function __invoke($limit = 5)
    {
        return (new ViewModel([
            'uniqueKillList' => $this->uniqueKillList->getUniqueKillList($limit),
            'limit' => $limit
        ]))->setTemplate('p-server-sro-unique/unique-kill-list');
    }

}