<?php

namespace SVS\BlueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Red
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Red
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
	
	/**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;
	
	


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
     * Set name
     *
     * @param string $name
     * @return Red
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
	
	
	/**
     * Set address
     *
     * @param string $address
     * @return Red
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $address;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }
	
	
}
