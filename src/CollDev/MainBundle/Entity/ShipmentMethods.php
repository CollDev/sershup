<?php

namespace CollDev\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShipmentMethods
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CollDev\MainBundle\Entity\ShipmentMethodsRepository")
 */
class ShipmentMethods
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
     * @var integer
     *
     * @ORM\Column(name="virtuemart_vendor_id", type="smallint")
     */
    private $virtuemartVendorId;

    /**
     * @var integer
     *
     * @ORM\Column(name="shipment_jplugin_id", type="integer")
     */
    private $shipmentJpluginId;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="shipment_element", type="string", length=50)
     */
    private $shipmentElement;

    /**
     * @var string
     *
     * @ORM\Column(name="shipment_params", type="text")
     */
    private $shipmentParams;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordering", type="smallint")
     */
    private $ordering;

    /**
     * @var integer
     *
     * @ORM\Column(name="shared", type="smallint")
     */
    private $shared;

    /**
     * @var integer
     *
     * @ORM\Column(name="published", type="smallint")
     */
    private $published;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_on", type="datetime")
     */
    private $createdOn;

    /**
     * @var integer
     *
     * @ORM\Column(name="modified_by", type="integer")
     */
    private $modifiedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="locked_on", type="datetime")
     */
    private $lockedOn;

    /**
     * @var integer
     *
     * @ORM\Column(name="locked_by", type="integer")
     */
    private $lockedBy;


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
     * Set virtuemartVendorId
     *
     * @param integer $virtuemartVendorId
     * @return ShipmentMethods
     */
    public function setVirtuemartVendorId($virtuemartVendorId)
    {
        $this->virtuemartVendorId = $virtuemartVendorId;
    
        return $this;
    }

    /**
     * Get virtuemartVendorId
     *
     * @return integer 
     */
    public function getVirtuemartVendorId()
    {
        return $this->virtuemartVendorId;
    }

    /**
     * Set shipmentJpluginId
     *
     * @param integer $shipmentJpluginId
     * @return ShipmentMethods
     */
    public function setShipmentJpluginId($shipmentJpluginId)
    {
        $this->shipmentJpluginId = $shipmentJpluginId;
    
        return $this;
    }

    /**
     * Get shipmentJpluginId
     *
     * @return integer 
     */
    public function getShipmentJpluginId()
    {
        return $this->shipmentJpluginId;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return ShipmentMethods
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set shipmentElement
     *
     * @param string $shipmentElement
     * @return ShipmentMethods
     */
    public function setShipmentElement($shipmentElement)
    {
        $this->shipmentElement = $shipmentElement;
    
        return $this;
    }

    /**
     * Get shipmentElement
     *
     * @return string 
     */
    public function getShipmentElement()
    {
        return $this->shipmentElement;
    }

    /**
     * Set shipmentParams
     *
     * @param string $shipmentParams
     * @return ShipmentMethods
     */
    public function setShipmentParams($shipmentParams)
    {
        $this->shipmentParams = $shipmentParams;
    
        return $this;
    }

    /**
     * Get shipmentParams
     *
     * @return string 
     */
    public function getShipmentParams()
    {
        return $this->shipmentParams;
    }

    /**
     * Set ordering
     *
     * @param integer $ordering
     * @return ShipmentMethods
     */
    public function setOrdering($ordering)
    {
        $this->ordering = $ordering;
    
        return $this;
    }

    /**
     * Get ordering
     *
     * @return integer 
     */
    public function getOrdering()
    {
        return $this->ordering;
    }

    /**
     * Set shared
     *
     * @param integer $shared
     * @return ShipmentMethods
     */
    public function setShared($shared)
    {
        $this->shared = $shared;
    
        return $this;
    }

    /**
     * Get shared
     *
     * @return integer 
     */
    public function getShared()
    {
        return $this->shared;
    }

    /**
     * Set published
     *
     * @param integer $published
     * @return ShipmentMethods
     */
    public function setPublished($published)
    {
        $this->published = $published;
    
        return $this;
    }

    /**
     * Get published
     *
     * @return integer 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set createdOn
     *
     * @param \DateTime $createdOn
     * @return ShipmentMethods
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
    
        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \DateTime 
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set modifiedBy
     *
     * @param integer $modifiedBy
     * @return ShipmentMethods
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;
    
        return $this;
    }

    /**
     * Get modifiedBy
     *
     * @return integer 
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * Set lockedOn
     *
     * @param \DateTime $lockedOn
     * @return ShipmentMethods
     */
    public function setLockedOn($lockedOn)
    {
        $this->lockedOn = $lockedOn;
    
        return $this;
    }

    /**
     * Get lockedOn
     *
     * @return \DateTime 
     */
    public function getLockedOn()
    {
        return $this->lockedOn;
    }

    /**
     * Set lockedBy
     *
     * @param integer $lockedBy
     * @return ShipmentMethods
     */
    public function setLockedBy($lockedBy)
    {
        $this->lockedBy = $lockedBy;
    
        return $this;
    }

    /**
     * Get lockedBy
     *
     * @return integer 
     */
    public function getLockedBy()
    {
        return $this->lockedBy;
    }
}
