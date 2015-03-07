<?php

namespace SVS\BlueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Gold
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Gold extends Controller
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="workbefore", type="integer")
     */
    private $workbefore;
	
	 /**
     * @var integer
     *
     * @ORM\Column(name="workorder", type="integer")
     */
    private $workorder;

    /**
     * @var boolean
     *
     * @ORM\Column(name="topresent", type="boolean")
     */
    private $topresent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startdate", type="datetime")
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="enddate", type="datetime")
     */
    private $enddate;


/**
     * @var \DateTime
     *
     * @ORM\Column(name="afterdate", type="datetime")
     */
    private $afterdate;

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
     * Set title
     *
     * @param string $title
     * @return Gold
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }
	
	/**
     * Set workbefore
     *
     * @param integer $workbefore
     * @return Gold
     */
    public function setWorkbefore($workbefore)
    {
        $this->workbefore = $workbefore;

        return $this;
    }
	
	/**
     * Get workbefore
     *
     * @return integer
     */
    public function getWorkbefore()
    {
        return $this->workbefore;
    }
	
	
	/**
     * Set workorder
     *
     * @param integer $workorder
     * @return Gold
     */
    public function setWorkorder($workorder)
    {
        $this->workorder = $workorder;

        return $this;
    }
	
	/**
     * Get workorder
     *
     * @return integer 
     */
    public function getWorkorder()
    {
        return $this->workorder;
    }

    /**
     * Set topresent
     *
     * @param boolean $topresent
     * @return Gold
     */
    public function setTopresent($topresent)
    {
        $this->topresent = $topresent;

        return $this;
    }

    /**
     * Get topresent
     *
     * @return boolean 
     */
    public function getTopresent()
    {
        return $this->topresent;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     * @return Gold
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime 
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     * @return Gold
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime 
     */
    public function getEnddate()
    {
        return $this->enddate;
    }
	
	
	 /**
     * Set afterdate
     *
     * @param \DateTime $afterdate
     * @return Gold
     */
    public function setAfterdate($afterdate)
    {
        $this->afterdate = $afterdate;

        return $this;
    }

    /**
     * Get afterdate
     *
     * @return \DateTime 
     */
    public function getAfterdate()
    {
        return $this->afterdate;
    }
	
	
	
	
	public function isDatesValid()
	{
	    return ($this->startdate < $this->enddate);
	}
	
	
	public function isStartValid(){
		
		 if ($this->workbefore == 0) {
		 	$time = new \DateTime('now');
			$newtime = $time->modify('-5 year');
		 	return ($this->startdate < $newtime);
		 }
		 
		 
	}
	
	public function isNoGap(){
		$newdate = $this->afterdate->modify('+1 month');
		return ($this->startdate < $newdate);
	}
	
}
