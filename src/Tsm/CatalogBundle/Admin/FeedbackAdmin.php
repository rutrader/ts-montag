<?php

namespace Tsm\CatalogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;

/**
 * Description of CatalogAdmin
 *
 * @author rutrader
 */
class FeedbackAdmin extends Admin {
    //put your code here

    /**
     * Конфигурация отображения записи
     *
     * @param \Sonata\AdminBundle\Show\ShowMapper $showMapper
     * @return void
     */
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
                ->add( 'id', null, array('label' => 'ID'))
                ->add( 'companyName', null, array( 'label' => 'Company Name' ) )
                ->add( 'fullname', null, array( 'label' => 'Fullname' ) )
                ->add( 'phone', null, array( 'label' => 'Phone' ) )
                ->add( 'email', null, array( 'label' => 'Email' ) )
                ->add( 'comment', null, array( 'label' => 'Comment' ) )
                ;
    }

    /**
     * Конфигурация списка записей
     *
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                ->addIdentifier('id')
                ->addIdentifier('companyName', null, array('label' => 'Company Name'))
                ->add( 'fullname', null, array( 'label' => 'Fullname' ) )
                ->add( 'phone', null, array( 'label' => 'Phone' ) )
                ->add( 'email', null, array( 'label' => 'Email' ) )
                ->add( 'comment', null, array( 'label' => 'Comment' ) )
                ;
    }

    /**
     * Конфигурация формы редактирования записи
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                ->add('companyName', null, array('label' => 'Company'))
                ->add( 'fullname', null, array( 'label' => 'Fullname' ) )
                ->add( 'phone', null, array( 'label' => 'Phone' ) )
                ->add( 'email', null, array( 'label' => 'Email' ) )
                ->add( 'comment', null, array( 'label' => 'Comment' ) )
                 ;
    }


}

?>
