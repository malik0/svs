<?php

namespace SVS\BlueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * availablity
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class availablity
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
     * @ORM\Column(name="cone_name", type="string", length=255)
     */
    private $coneName;

    /**
     * @var string
     *
     * @ORM\Column(name="cone_telephone", type="string", length=255)
     */
    private $coneTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="cone_address", type="string", length=255)
     */
    private $coneAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="cone_postcode", type="string", length=255)
     */
    private $conePostcode;

    /**
     * @var string
     *
     * @ORM\Column(name="cone_relationship", type="string", length=255)
     */
    private $coneRelationship;

    /**
     * @var string
     *
     * @ORM\Column(name="ctwo_name", type="string", length=255)
     */
    private $ctwoName;

    /**
     * @var string
     *
     * @ORM\Column(name="ctwo_telephone", type="string", length=255)
     */
    private $ctwoTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="ctwo_address", type="string", length=255)
     */
    private $ctwoAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="ctwo_postcode", type="string", length=255)
     */
    private $ctwoPostcode;

    /**
     * @var string
     *
     * @ORM\Column(name="ctwo_relationship", type="string", length=255)
     */
    private $ctwoRelationship;

    /**
     * @var string
     *
     * @ORM\Column(name="daymon", type="string", length=255)
     */
    private $daymon;

    /**
     * @var string
     *
     * @ORM\Column(name="daytues", type="string", length=255)
     */
    private $daytues;

    /**
     * @var string
     *
     * @ORM\Column(name="daywed", type="string", length=255)
     */
    private $daywed;

    /**
     * @var string
     *
     * @ORM\Column(name="daythurs", type="string", length=255)
     */
    private $daythurs;

    /**
     * @var string
     *
     * @ORM\Column(name="dayfri", type="string", length=255)
     */
    private $dayfri;

    /**
     * @var string
     *
     * @ORM\Column(name="daysat", type="string", length=255)
     */
    private $daysat;

    /**
     * @var string
     *
     * @ORM\Column(name="daysun", type="string", length=255)
     */
    private $daysun;

    /**
     * @var string
     *
     * @ORM\Column(name="daybank", type="string", length=255)
     */
    private $daybank;

    /**
     * @var string
     *
     * @ORM\Column(name="daysummer", type="string", length=255)
     */
    private $daysummer;

    /**
     * @var string
     *
     * @ORM\Column(name="evenmon", type="string", length=255)
     */
    private $evenmon;

    /**
     * @var string
     *
     * @ORM\Column(name="eventues", type="string", length=255)
     */
    private $eventues;

    /**
     * @var string
     *
     * @ORM\Column(name="evenwed", type="string", length=255)
     */
    private $evenwed;

    /**
     * @var string
     *
     * @ORM\Column(name="eventhurs", type="string", length=255)
     */
    private $eventhurs;

    /**
     * @var string
     *
     * @ORM\Column(name="evenfri", type="string", length=255)
     */
    private $evenfri;

    /**
     * @var string
     *
     * @ORM\Column(name="evenbank", type="string", length=255)
     */
    private $evenbank;

    /**
     * @var string
     *
     * @ORM\Column(name="evensummer", type="string", length=255)
     */
    private $evensummer;


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
     * Set coneName
     *
     * @param string $coneName
     * @return availablity
     */
    public function setConeName($coneName)
    {
        $this->coneName = $coneName;

        return $this;
    }

    /**
     * Get coneName
     *
     * @return string 
     */
    public function getConeName()
    {
        return $this->coneName;
    }

    /**
     * Set coneTelephone
     *
     * @param string $coneTelephone
     * @return availablity
     */
    public function setConeTelephone($coneTelephone)
    {
        $this->coneTelephone = $coneTelephone;

        return $this;
    }

    /**
     * Get coneTelephone
     *
     * @return string 
     */
    public function getConeTelephone()
    {
        return $this->coneTelephone;
    }

    /**
     * Set coneAddress
     *
     * @param string $coneAddress
     * @return availablity
     */
    public function setConeAddress($coneAddress)
    {
        $this->coneAddress = $coneAddress;

        return $this;
    }

    /**
     * Get coneAddress
     *
     * @return string 
     */
    public function getConeAddress()
    {
        return $this->coneAddress;
    }

    /**
     * Set conePostcode
     *
     * @param string $conePostcode
     * @return availablity
     */
    public function setConePostcode($conePostcode)
    {
        $this->conePostcode = $conePostcode;

        return $this;
    }

    /**
     * Get conePostcode
     *
     * @return string 
     */
    public function getConePostcode()
    {
        return $this->conePostcode;
    }

    /**
     * Set coneRelationship
     *
     * @param string $coneRelationship
     * @return availablity
     */
    public function setConeRelationship($coneRelationship)
    {
        $this->coneRelationship = $coneRelationship;

        return $this;
    }

    /**
     * Get coneRelationship
     *
     * @return string 
     */
    public function getConeRelationship()
    {
        return $this->coneRelationship;
    }

    /**
     * Set ctwoName
     *
     * @param string $ctwoName
     * @return availablity
     */
    public function setCtwoName($ctwoName)
    {
        $this->ctwoName = $ctwoName;

        return $this;
    }

    /**
     * Get ctwoName
     *
     * @return string 
     */
    public function getCtwoName()
    {
        return $this->ctwoName;
    }

    /**
     * Set ctwoTelephone
     *
     * @param string $ctwoTelephone
     * @return availablity
     */
    public function setCtwoTelephone($ctwoTelephone)
    {
        $this->ctwoTelephone = $ctwoTelephone;

        return $this;
    }

    /**
     * Get ctwoTelephone
     *
     * @return string 
     */
    public function getCtwoTelephone()
    {
        return $this->ctwoTelephone;
    }

    /**
     * Set ctwoAddress
     *
     * @param string $ctwoAddress
     * @return availablity
     */
    public function setCtwoAddress($ctwoAddress)
    {
        $this->ctwoAddress = $ctwoAddress;

        return $this;
    }

    /**
     * Get ctwoAddress
     *
     * @return string 
     */
    public function getCtwoAddress()
    {
        return $this->ctwoAddress;
    }

    /**
     * Set ctwoPostcode
     *
     * @param string $ctwoPostcode
     * @return availablity
     */
    public function setCtwoPostcode($ctwoPostcode)
    {
        $this->ctwoPostcode = $ctwoPostcode;

        return $this;
    }

    /**
     * Get ctwoPostcode
     *
     * @return string 
     */
    public function getCtwoPostcode()
    {
        return $this->ctwoPostcode;
    }

    /**
     * Set ctwoRelationship
     *
     * @param string $ctwoRelationship
     * @return availablity
     */
    public function setCtwoRelationship($ctwoRelationship)
    {
        $this->ctwoRelationship = $ctwoRelationship;

        return $this;
    }

    /**
     * Get ctwoRelationship
     *
     * @return string 
     */
    public function getCtwoRelationship()
    {
        return $this->ctwoRelationship;
    }

    /**
     * Set daymon
     *
     * @param string $daymon
     * @return availablity
     */
    public function setDaymon($daymon)
    {
        $this->daymon = $daymon;

        return $this;
    }

    /**
     * Get daymon
     *
     * @return string 
     */
    public function getDaymon()
    {
        return $this->daymon;
    }

    /**
     * Set daytues
     *
     * @param string $daytues
     * @return availablity
     */
    public function setDaytues($daytues)
    {
        $this->daytues = $daytues;

        return $this;
    }

    /**
     * Get daytues
     *
     * @return string 
     */
    public function getDaytues()
    {
        return $this->daytues;
    }

    /**
     * Set daywed
     *
     * @param string $daywed
     * @return availablity
     */
    public function setDaywed($daywed)
    {
        $this->daywed = $daywed;

        return $this;
    }

    /**
     * Get daywed
     *
     * @return string 
     */
    public function getDaywed()
    {
        return $this->daywed;
    }

    /**
     * Set daythurs
     *
     * @param string $daythurs
     * @return availablity
     */
    public function setDaythurs($daythurs)
    {
        $this->daythurs = $daythurs;

        return $this;
    }

    /**
     * Get daythurs
     *
     * @return string 
     */
    public function getDaythurs()
    {
        return $this->daythurs;
    }

    /**
     * Set dayfri
     *
     * @param string $dayfri
     * @return availablity
     */
    public function setDayfri($dayfri)
    {
        $this->dayfri = $dayfri;

        return $this;
    }

    /**
     * Get dayfri
     *
     * @return string 
     */
    public function getDayfri()
    {
        return $this->dayfri;
    }

    /**
     * Set daysat
     *
     * @param string $daysat
     * @return availablity
     */
    public function setDaysat($daysat)
    {
        $this->daysat = $daysat;

        return $this;
    }

    /**
     * Get daysat
     *
     * @return string 
     */
    public function getDaysat()
    {
        return $this->daysat;
    }

    /**
     * Set daysun
     *
     * @param string $daysun
     * @return availablity
     */
    public function setDaysun($daysun)
    {
        $this->daysun = $daysun;

        return $this;
    }

    /**
     * Get daysun
     *
     * @return string 
     */
    public function getDaysun()
    {
        return $this->daysun;
    }

    /**
     * Set daybank
     *
     * @param string $daybank
     * @return availablity
     */
    public function setDaybank($daybank)
    {
        $this->daybank = $daybank;

        return $this;
    }

    /**
     * Get daybank
     *
     * @return string 
     */
    public function getDaybank()
    {
        return $this->daybank;
    }

    /**
     * Set daysummer
     *
     * @param string $daysummer
     * @return availablity
     */
    public function setDaysummer($daysummer)
    {
        $this->daysummer = $daysummer;

        return $this;
    }

    /**
     * Get daysummer
     *
     * @return string 
     */
    public function getDaysummer()
    {
        return $this->daysummer;
    }

    /**
     * Set evenmon
     *
     * @param string $evenmon
     * @return availablity
     */
    public function setEvenmon($evenmon)
    {
        $this->evenmon = $evenmon;

        return $this;
    }

    /**
     * Get evenmon
     *
     * @return string 
     */
    public function getEvenmon()
    {
        return $this->evenmon;
    }

    /**
     * Set eventues
     *
     * @param string $eventues
     * @return availablity
     */
    public function setEventues($eventues)
    {
        $this->eventues = $eventues;

        return $this;
    }

    /**
     * Get eventues
     *
     * @return string 
     */
    public function getEventues()
    {
        return $this->eventues;
    }

    /**
     * Set evenwed
     *
     * @param string $evenwed
     * @return availablity
     */
    public function setEvenwed($evenwed)
    {
        $this->evenwed = $evenwed;

        return $this;
    }

    /**
     * Get evenwed
     *
     * @return string 
     */
    public function getEvenwed()
    {
        return $this->evenwed;
    }

    /**
     * Set eventhurs
     *
     * @param string $eventhurs
     * @return availablity
     */
    public function setEventhurs($eventhurs)
    {
        $this->eventhurs = $eventhurs;

        return $this;
    }

    /**
     * Get eventhurs
     *
     * @return string 
     */
    public function getEventhurs()
    {
        return $this->eventhurs;
    }

    /**
     * Set evenfri
     *
     * @param string $evenfri
     * @return availablity
     */
    public function setEvenfri($evenfri)
    {
        $this->evenfri = $evenfri;

        return $this;
    }

    /**
     * Get evenfri
     *
     * @return string 
     */
    public function getEvenfri()
    {
        return $this->evenfri;
    }

    /**
     * Set evenbank
     *
     * @param string $evenbank
     * @return availablity
     */
    public function setEvenbank($evenbank)
    {
        $this->evenbank = $evenbank;

        return $this;
    }

    /**
     * Get evenbank
     *
     * @return string 
     */
    public function getEvenbank()
    {
        return $this->evenbank;
    }

    /**
     * Set evensummer
     *
     * @param string $evensummer
     * @return availablity
     */
    public function setEvensummer($evensummer)
    {
        $this->evensummer = $evensummer;

        return $this;
    }

    /**
     * Get evensummer
     *
     * @return string 
     */
    public function getEvensummer()
    {
        return $this->evensummer;
    }
}
