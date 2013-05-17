<?php

namespace Campsite\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Campsite\EventBundle\Entity\Event
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Campsite\EventBundle\Repository\EventRepository")
 */
class Event
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var datetime $from_date
     *
     * @ORM\Column(name="from_date", type="datetime")
     */
    private $from_date;

    /**
     * @var datetime $to_date
     *
     * @ORM\Column(name="to_date", type="datetime")
     */
    private $to_date;

    /**
     * @var text $address
     *
     * @ORM\Column(name="address", type="text")
     */
    private $address;

    /**
     * @var string $city
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string $state
     *
     * @ORM\Column(name="state", type="string", length=255)
     */
    private $state;

    /**
     * @var string $country
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var string $zipcode
     *
     * @ORM\Column(name="zipcode", type="string", length=255)
     */
    private $zipcode;

    /**
     * @var smallint $is_active
     *
     * @ORM\Column(name="is_active", type="smallint")
     */
    private $is_active;

    /**
     * @var datetime $createdat
     *
     * @ORM\Column(name="createdat", type="datetime")
     */
    private $createdat;

    /**
     * @var datetime $updatedat
     *
     * @ORM\Column(name="updatedat", type="datetime")
     */
    private $updatedat;

    /**
     * @ORM\ManyToMany(targetEntity="Campsite\EventBundle\Entity\User", inversedBy="events")
     */
    protected $users;
    
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
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set from_date
     *
     * @param datetime $fromDate
     */
    public function setFromDate($fromDate)
    {
        $this->from_date = $fromDate;
    }

    /**
     * Get from_date
     *
     * @return datetime 
     */
    public function getFromDate()
    {
        return $this->from_date;
    }

    /**
     * Set to_date
     *
     * @param datetime $toDate
     */
    public function setToDate($toDate)
    {
        $this->to_date = $toDate;
    }

    /**
     * Get to_date
     *
     * @return datetime 
     */
    public function getToDate()
    {
        return $this->to_date;
    }

    /**
     * Set address
     *
     * @param text $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Get address
     *
     * @return text 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
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
     * Set state
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set country
     *
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    }

    /**
     * Get zipcode
     *
     * @return string 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set is_active
     *
     * @param smallint $isActive
     */
    public function setIsActive($isActive)
    {
        $this->is_active = $isActive;
    }

    /**
     * Get is_active
     *
     * @return smallint 
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Set createdat
     *
     * @param datetime $createdat
     */
    public function setCreatedat($createdat)
    {
        $this->createdat = $createdat;
    }

    /**
     * Get createdat
     *
     * @return datetime 
     */
    public function getCreatedat()
    {
        return $this->createdat;
    }

    /**
     * Set updatedat
     *
     * @param datetime $updatedat
     */
    public function setUpdatedat($updatedat)
    {
        $this->updatedat = $updatedat;
    }

    /**
     * Get updatedat
     *
     * @return datetime 
     */
    public function getUpdatedat()
    {
        return $this->updatedat;
    }
    
    public function addUser(User $user)
    {
      
      $this->users[] = $user;
      return $this; // fluent interface
    }
  
    public function getUsers()
    {
      return $this->users;
    }
}