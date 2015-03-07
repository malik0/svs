<?php

namespace SVS\BlueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SVS\BlueBundle\Entity\User as User;

/**
 * Contact
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Contact
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
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telday", type="string", length=255)
     */
    private $telday;

    /**
     * @var string
     *
     * @ORM\Column(name="televen", type="string", length=255)
     */
    private $televen;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=255)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=255)
     */
    private $postcode;

    /**
     * @var string
     *
     * @ORM\Column(name="addressone", type="string", length=255)
     */
    private $addressone;

    /**
     * @var string
     *
     * @ORM\Column(name="addresstwo", type="string", length=255)
     */
    private $addresstwo;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="distance", type="string", length=255)
     */
    private $distance;

    /**
     * @var string
     *
     * @ORM\Column(name="travelnation", type="string", length=255)
     */
    private $travelnation;
	
	
	/**
     * @ORM\OneToOne(targetEntity="SVS\BlueBundle\Entity\User")
     * @var User
     */
    protected $user;


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
     * Set firstname
     *
     * @param string $firstname
     * @return Contact
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return Contact
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telday
     *
     * @param string $telday
     * @return Contact
     */
    public function setTelday($telday)
    {
        $this->telday = $telday;

        return $this;
    }

    /**
     * Get telday
     *
     * @return string 
     */
    public function getTelday()
    {
        return $this->telday;
    }

    /**
     * Set televen
     *
     * @param string $televen
     * @return Contact
     */
    public function setTeleven($televen)
    {
        $this->televen = $televen;

        return $this;
    }

    /**
     * Get televen
     *
     * @return string 
     */
    public function getTeleven()
    {
        return $this->televen;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return Contact
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     * @return Contact
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string 
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set addressone
     *
     * @param string $addressone
     * @return Contact
     */
    public function setAddressone($addressone)
    {
        $this->addressone = $addressone;

        return $this;
    }

    /**
     * Get addressone
     *
     * @return string 
     */
    public function getAddressone()
    {
        return $this->addressone;
    }

    /**
     * Set addresstwo
     *
     * @param string $addresstwo
     * @return Contact
     */
    public function setAddresstwo($addresstwo)
    {
        $this->addresstwo = $addresstwo;

        return $this;
    }

    /**
     * Get addresstwo
     *
     * @return string 
     */
    public function getAddresstwo()
    {
        return $this->addresstwo;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Contact
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set distance
     *
     * @param string $distance
     * @return Contact
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get distance
     *
     * @return string 
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set travelnation
     *
     * @param string $travelnation
     * @return Contact
     */
    public function setTravelnation($travelnation)
    {
        $this->travelnation = $travelnation;

        return $this;
    }
	

    /**
     * Get travelnation
     *
     * @return string 
     */
    public function getTravelnation()
    {
        return $this->travelnation;
    }
	
	 /**
     * Set user
     *
     * @param user $user
     * @return Contact
     */
    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }
	
	
	/**
     * @return \SVS\BlueBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
	
	
}
