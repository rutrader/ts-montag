<?php
namespace Tsm\CatalogBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

/**
 * Description of Builder
 *
 * @author rutrader
 */
class Builder extends ContainerAware {

    public function mainMenu(FactoryInterface $factory, array $options) {

        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'main', 'label' => 'Главная'));
        $menu->addChild('Partners', array(
            'route' => '_static_partners', 'label' => 'Партнёры' ));
        $menu->addChild('catalog', array( 'route' => 'services', 'label' => 'Услуги' ) );
        $menu->addChild('contacts', array( 'route' => '_static_contacts', 'label' => 'Контакты' ) );
        $menu->addChild('about', array( 'route' => '_static_about', 'label' => 'О компании' ) );
        $menu->addChild('feedback', array( 'route' => '_static_feedback', 'label' => 'Отправить заявку' ) );
        // ... add more children

        return $menu;
    }
}

?>
