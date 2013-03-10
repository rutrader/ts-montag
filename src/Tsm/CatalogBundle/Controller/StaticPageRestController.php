<?php
namespace Tsm\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class StaticPageRestController extends Controller
{
    /**
     * Route("/contacts", name = "contacts")
     * @Template()
     */
    public function getContactsAction()
    {
        return $this->render( 'TsmCatalogBundle:Static:contacts.html.twig' );
    }

    /**
     * @todo Пусть пока будет статикой, потом переделаю в динамику
     * @return type
     */
    public function partnersAction()
    {
        return $this->render( 'TsmCatalogBundle:Static:partners.html.twig' );
    }

    /**
     *
     * @return type
     */
    public function aboutAction()
    {
        return $this->render( 'TsmCatalogBundle:Static:about.html.twig' );
    }

    /**
     * @todo Вывести форму!!!!11
     * @return type
     */
    public function feedbackAction()
    {
        return $this->render( 'TsmCatalogBundle:Static:feedback.html.twig' );
    }

}
