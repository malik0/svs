<?php

namespace SVS\BlueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Declaration
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Declaration
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="further", type="string", length=255)
     */
    private $further;

    /**
     * @var boolean
     *
     * @ORM\Column(name="worktime", type="boolean")
     */
    private $worktime;

    /**
     * @var string
     *
     * @ORM\Column(name="mainduties", type="string", length=255)
     */
    private $mainduties;

    /**
     * @var string
     *
     * @ORM\Column(name="onlinesig", type="string", length=255)
     */
    private $onlinesig;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set further
     *
     * @param string $further
     * @return Declaration
     */
    public function setFurther($further)
    {
        $this->further = $further;

        return $this;
    }

    /**
     * Get further
     *
     * @return string 
     */
    public function getFurther()
    {
        return $this->further;
    }

    /**
     * Set worktime
     *
     * @param boolean $worktime
     * @return Declaration
     */
    public function setWorktime($worktime)
    {
        $this->worktime = $worktime;

        return $this;
    }

    /**
     * Get worktime
     *
     * @return boolean 
     */
    public function getWorktime()
    {
        return $this->worktime;
    }

    /**
     * Set mainduties
     *
     * @param string $mainduties
     * @return Declaration
     */
    public function setMainduties($mainduties)
    {
        $this->mainduties = $mainduties;

        return $this;
    }

    /**
     * Get mainduties
     *
     * @return string 
     */
    public function getMainduties()
    {
        return $this->mainduties;
    }

    /**
     * Set onlinesig
     *
     * @param string $onlinesig
     * @return Declaration
     */
    public function setOnlinesig($onlinesig)
    {
        $this->onlinesig = $onlinesig;

        return $this;
    }

    /**
     * Get onlinesig
     *
     * @return string 
     */
    public function getOnlinesig()
    {
        return $this->onlinesig;
    }
}
