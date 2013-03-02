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
class CatalogAdmin extends Admin {
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
                ->add('id', null, array('label' => 'Идентификатор'))
                ->add('name', null, array( 'label' => 'Имя' ) )
                ->add( 'price', null, array( 'label' => 'Price' ) )
                ->add( 'descr', null, array( 'label' => 'Описание' ) )
                ->add( 'category', null, array( 'label' => 'Категория' ) )
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
                ->addIdentifier('name', null, array('label' => 'Заголовок'))
                ->add('price', null, array('label' => 'Дата публикации'))
                ->add('descr', null, array('label' => 'Описание'))
                ->add( 'category', null, array( 'label' => 'Category' ) )
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
                ->add('name', null, array('label' => 'Название'))
                ->add('price', null, array('label' => 'Цена'))
                ->add('descr', null, array('label' => 'Текст'))
//                ->add( 'category', null, array( 'label' => 'Category' ) )
                ->add( 'parent', null, array( 'label' => 'Parent' ) )
        //by_reference используется для того чтобы при трансформации данных запроса в объект сущности
        //которую выполняет Symfony Form Framework, использовался setter сущности News::setNewsLinks
                /*->add('category', 'sonata_type_model',
                      array('label' => 'Ссылки', 'by_reference' => false),
                      array(
                           'edit' => 'inline',
                           //В сущности NewsLink есть поле pos, отражающее положение ссылки в списке
                          //указание опции sortable позволяет менять положение ссылок в списке перетаскиваением
                           'sortable' => 'pos',
                           'inline' => 'table',
                      ))*/
                ->add('category', 'sonata_type_model', array('label' => 'Категории (Новотека)'))
               // ->add('newsCategory', null, array('label' => 'Категория'))
               // ->setHelps(array(
               //                 'title' => 'Подсказка по заголовку',
               //                 'pubDate' => 'Дата публикации новости на сайте'
               //            ))
                           ;
    }


}

?>
