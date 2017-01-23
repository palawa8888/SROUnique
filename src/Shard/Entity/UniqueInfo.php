<?php

namespace PServerCMS\SROUnique\Shard\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UniqueInfo
 *
 * @ORM\Table(name="_UniqueInfo")
 * @ORM\Entity()
 */
class UniqueInfo
{
    /**
     * @var string
     * @ORM\Column(name="CodeName128", type="string", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     **/
    private $codename;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", nullable=false)
     */
    private $name;

    /**
     * @return string
     */
    public function getCodename()
    {
        return $this->codename;
    }

    /**
     * @param string $codename
     * @return self
     */
    public function setCodename($codename)
    {
        $this->codename = $codename;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

}