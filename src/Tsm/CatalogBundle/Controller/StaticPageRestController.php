<?php
namespace Tsm\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

use Tsm\CatalogBundle\Entity\Catalog;

class StaticPageRestController extends Controller
{
    private $arSerivces;

    /**
     * Route("/contacts", name = "contacts")
     * @Template()
     */
    public function getContactsAction()
    {
                $product = $this->getDoctrine()->getRepository("TsmCatalogBundle:Catalog")->findAll();

        if( !$product ) {
            $this->arSerivces = array();
        }

        foreach( $product as $key => $val ) {
            $this->arSerivces[$val->getCategory()->getName()][] = $val;
        }

        return $this->render( 'TsmCatalogBundle:Static:contacts.html.twig', array( 'products' => $this->arSerivces ) );
    }

    /**
     * @todo Пусть пока будет статикой, потом переделаю в динамику
     * @return type
     */
    public function partnersAction()
    {
                $product = $this->getDoctrine()->getRepository("TsmCatalogBundle:Catalog")->findAll();

        if( !$product ) {
            $this->arSerivces = array();
        }

        foreach( $product as $key => $val ) {
            $this->arSerivces[$val->getCategory()->getName()][] = $val;
        }

        return $this->render( 'TsmCatalogBundle:Static:partners.html.twig', array( 'products' => $this->arSerivces ) );
    }

    /**
     *
     * @return type
     */
    public function aboutAction()
    {
                $product = $this->getDoctrine()->getRepository("TsmCatalogBundle:Catalog")->findAll();

        if( !$product ) {
            $this->arSerivces = array();
        }

        foreach( $product as $key => $val ) {
            $this->arSerivces[$val->getCategory()->getName()][] = $val;
        }

        return $this->render( 'TsmCatalogBundle:Static:about.html.twig', array( 'products' => $this->arSerivces ) );
    }

    /**
     * @todo Вывести форму!!!!11
     * @return type
     */
    public function feedbackAction()
    {
                $product = $this->getDoctrine()->getRepository("TsmCatalogBundle:Catalog")->findAll();

        if( !$product ) {
            $this->arSerivces = array();
        }

        foreach( $product as $key => $val ) {
            $this->arSerivces[$val->getCategory()->getName()][] = $val;
        }
        return $this->render( 'TsmCatalogBundle:Static:feedback.html.twig', array( 'products' => $this->arSerivces ) );
    }

}
