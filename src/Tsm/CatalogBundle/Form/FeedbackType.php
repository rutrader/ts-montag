<?php

namespace Tsm\CatalogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of ContactType
 *
 * @author rutrader
 */
class FeedbackType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add( 'companyname', 'text', array( 'label' => 'Название компании', 'required' => true ) )
                ->add( 'fullname', 'text', array( 'label' => 'ФИО', 'required' => true ) )
                ->add( 'phone', 'text', array( 'label' => 'Телефон', 'required' => true ) )
                ->add( 'email', 'email' )
                ->add( 'comment', 'textarea' );
        //parent::buildForm($builder, $options);
    }

    public function getName() {
        return 'Contact';
    }
}

?>
