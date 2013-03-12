<?php

namespace Tsm\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\MinLength;
use Symfony\Component\Validator\Constraints\MaxLength;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Feedback
 * @todo Добавить здесь валидаторы!
 * @ORM\Table(name="feedback")
 * @ORM\Entity
 */
class Feedback
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=100, nullable=false)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="string", length=512, nullable=false)
     */
    private $fullname;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=100, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=1024, nullable=false)
     */
    private $comment;



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
     * Set companyName
     *
     * @param string $companyName
     * @return Feedback
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    
        return $this;
    }

    /**
     * Get companyName
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     * @return Feedback
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
    
        return $this;
    }

    /**
     * Get fullname
     *
     * @return string 
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Feedback
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Feedback
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
     * Set comment
     *
     * @param string $comment
     * @return Feedback
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }
    
    public function __toString() {
        return $this->getCompanyName();
    }

    public static function loadValidatorMetaData( ClassMetadata $metadata ) {
        $metadata->addPropertyConstraint( "companyName", new NotBlank( array( 'message' => 'Не заполнено обязательное поле' ) ) );
        $metadata->addPropertyConstraint( "companyName", new MinLength(1) );
        $metadata->addPropertyConstraint( "companyName", new MaxLength(100) );

        $metadata->addPropertyConstraint( "fullname", new NotBlank( array( 'message' => 'Не заполнено обязательное поле' ) ) );
        $metadata->addPropertyConstraint( "fullname", new Assert\Regex(array(
            'pattern' => '/\d/',
            'match'   => false,
            'message' => 'Неправильный формат поля',
        )));

        $metadata->addPropertyConstraint("email", new Email( array( 'message' => 'Неправильный формат email' ) ) );
        $metadata->addPropertyConstraint("email", new NotBlank( array( 'message' => 'Не заполнено обязательное поле' ) ) );
        $metadata->addPropertyConstraint("email", new MaxLength( 100 ) );

        $metadata->addPropertyConstraint("phone", new Assert\Regex(array(
            'pattern' => '/\d/',
            'match'   => true,
            'message' => 'Неправильный формат телефона',
        )));
    }
}