<?php

namespace Tsm\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tsm\CatalogBundle\Entity\Catalog
 *
 * @ORM\Table(name="catalog")
 * @ORM\Entity
 */
class Catalog
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string $desc
     *
     * @ORM\Column(name="descr", type="string", length=1024, nullable=false)
     */
    private $descr;

    /**
     * @var integer $price
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var \Tsm\CatalogBundle\Entity\Category $category
     *
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="catalog")
     * @ORM\JoinColumn(name="category", referencedColumnName="id")
     */
    protected $category;

    /**
     * @var integer $parent
     *
     * @ORM\Column(name="parent", type="integer", nullable=false)
     */
    private $parent;



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
     * @return Catalog
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
     * Set descr
     *
     * @param string $descr
     * @return Catalog
     */
    public function setDescr($descr)
    {
        $this->descr = $descr;
    
        return $this;
    }

    /**
     * Get desc
     *
     * @return string 
     */
    public function getDescr()
    {
        return $this->descr;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return Catalog
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set category
     *
     * @param \Tsm\CatalogBundle\Entity\Category $category
     * @return Catalog
     */
    public function setCategory(\Tsm\CatalogBundle\Entity\Category $category)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \Tsm\CatalogBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    public function addCategory( $category ) {
        return $this->addCategory( $category );
    }

    /**
     * Set parent
     *
     * @param integer $parent
     * @return Catalog
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get parent
     *
     * @return integer 
     */
    public function getParent()
    {
        return $this->parent;
    }
}