<?php

namespace SVS\BlueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Information
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Information
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
     * @var boolean
     *
     * @ORM\Column(name="workeligible", type="boolean")
     */
    private $workeligible;

    /**
     * @var string
     *
     * @ORM\Column(name="visatype", type="string", length=255)
     */
    private $visatype;

    /**
     * @var string
     *
     * @ORM\Column(name="visaexpiry", type="string", length=255)
     */
    private $visaexpiry;

    /**
     * @var boolean
     *
     * @ORM\Column(name="drivinglicence", type="boolean")
     */
    private $drivinglicence;

    /**
     * @var string
     *
     * @ORM\Column(name="regularcar", type="string", length=255)
     */
    private $regularcar;

    /**
     * @var string
     *
     * @ORM\Column(name="transportothers", type="string", length=255)
     */
    private $transportothers;

    /**
     * @var boolean
     *
     * @ORM\Column(name="haveconviction", type="boolean")
     */
    private $haveconviction;

    /**
     * @var string
     *
     * @ORM\Column(name="convictiondetails", type="string", length=255)
     */
    private $convictiondetails;

    /**
     * @var string
     *
     * @ORM\Column(name="interviewaccomadation", type="string", length=255)
     */
    private $interviewaccomadation;

    /**
     * @var string
     *
     * @ORM\Column(name="interviewdetails", type="string", length=255)
     */
    private $interviewdetails;

    /**
     * @var string
     *
     * @ORM\Column(name="havesia", type="string", length=255)
     */
    private $havesia;

    /**
     * @var string
     *
     * @ORM\Column(name="sialicenceno", type="string", length=255)
     */
    private $sialicenceno;


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
     * Set workeligible
     *
     * @param boolean $workeligible
     * @return Information
     */
    public function setWorkeligible($workeligible)
    {
        $this->workeligible = $workeligible;

        return $this;
    }

    /**
     * Get workeligible
     *
     * @return boolean 
     */
    public function getWorkeligible()
    {
        return $this->workeligible;
    }

    /**
     * Set visatype
     *
     * @param string $visatype
     * @return Information
     */
    public function setVisatype($visatype)
    {
        $this->visatype = $visatype;

        return $this;
    }

    /**
     * Get visatype
     *
     * @return string 
     */
    public function getVisatype()
    {
        return $this->visatype;
    }

    /**
     * Set visaexpiry
     *
     * @param string $visaexpiry
     * @return Information
     */
    public function setVisaexpiry($visaexpiry)
    {
        $this->visaexpiry = $visaexpiry;

        return $this;
    }

    /**
     * Get visaexpiry
     *
     * @return string 
     */
    public function getVisaexpiry()
    {
        return $this->visaexpiry;
    }

    /**
     * Set drivinglicence
     *
     * @param boolean $drivinglicence
     * @return Information
     */
    public function setDrivinglicence($drivinglicence)
    {
        $this->drivinglicence = $drivinglicence;

        return $this;
    }

    /**
     * Get drivinglicence
     *
     * @return boolean 
     */
    public function getDrivinglicence()
    {
        return $this->drivinglicence;
    }

    /**
     * Set regularcar
     *
     * @param string $regularcar
     * @return Information
     */
    public function setRegularcar($regularcar)
    {
        $this->regularcar = $regularcar;

        return $this;
    }

    /**
     * Get regularcar
     *
     * @return string 
     */
    public function getRegularcar()
    {
        return $this->regularcar;
    }

    /**
     * Set transportothers
     *
     * @param string $transportothers
     * @return Information
     */
    public function setTransportothers($transportothers)
    {
        $this->transportothers = $transportothers;

        return $this;
    }

    /**
     * Get transportothers
     *
     * @return string 
     */
    public function getTransportothers()
    {
        return $this->transportothers;
    }

    /**
     * Set haveconviction
     *
     * @param boolean $haveconviction
     * @return Information
     */
    public function setHaveconviction($haveconviction)
    {
        $this->haveconviction = $haveconviction;

        return $this;
    }

    /**
     * Get haveconviction
     *
     * @return boolean 
     */
    public function getHaveconviction()
    {
        return $this->haveconviction;
    }

    /**
     * Set convictiondetails
     *
     * @param string $convictiondetails
     * @return Information
     */
    public function setConvictiondetails($convictiondetails)
    {
        $this->convictiondetails = $convictiondetails;

        return $this;
    }

    /**
     * Get convictiondetails
     *
     * @return string 
     */
    public function getConvictiondetails()
    {
        return $this->convictiondetails;
    }

    /**
     * Set interviewaccomadation
     *
     * @param string $interviewaccomadation
     * @return Information
     */
    public function setInterviewaccomadation($interviewaccomadation)
    {
        $this->interviewaccomadation = $interviewaccomadation;

        return $this;
    }

    /**
     * Get interviewaccomadation
     *
     * @return string 
     */
    public function getInterviewaccomadation()
    {
        return $this->interviewaccomadation;
    }

    /**
     * Set interviewdetails
     *
     * @param string $interviewdetails
     * @return Information
     */
    public function setInterviewdetails($interviewdetails)
    {
        $this->interviewdetails = $interviewdetails;

        return $this;
    }

    /**
     * Get interviewdetails
     *
     * @return string 
     */
    public function getInterviewdetails()
    {
        return $this->interviewdetails;
    }

    /**
     * Set havesia
     *
     * @param string $havesia
     * @return Information
     */
    public function setHavesia($havesia)
    {
        $this->havesia = $havesia;

        return $this;
    }

    /**
     * Get havesia
     *
     * @return string 
     */
    public function getHavesia()
    {
        return $this->havesia;
    }

    /**
     * Set sialicenceno
     *
     * @param string $sialicenceno
     * @return Information
     */
    public function setSialicenceno($sialicenceno)
    {
        $this->sialicenceno = $sialicenceno;

        return $this;
    }

    /**
     * Get sialicenceno
     *
     * @return string 
     */
    public function getSialicenceno()
    {
        return $this->sialicenceno;
    }
}
