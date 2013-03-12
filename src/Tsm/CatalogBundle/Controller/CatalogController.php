<?php

namespace Tsm\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Tsm\CatalogBundle\Entity\Catalog;

class CatalogController extends Controller
{
    /**
     * @Route("/", name="main")
     * @Template()
     */
    public function indexAction()
    {
        $product = $this->getDoctrine()->getRepository("TsmCatalogBundle:Catalog")->findAll();

        if( !$product ) {
            throw new \Exception( "Nothing..." );
        }
        foreach( $product as $key => $val ) {
            $arReturn[$val->getCategory()->getName()][] = $val;
        }
        return $this->render("TsmCatalogBundle:Catalog:index.html.twig", array( 'products' => $arReturn ) );
         
         
        //return $this->forward("TsmCatalogBundle:Catalog:show", array( 'id' => 3 ) );
    }

    /**
     * @Route( "/show/{id}", name="show_product" )
     * @param integer $id
     * @return Response
     * @throws \Exception
     */
    public function showAction( $id ) {
        $service = $this->getDoctrine()->getRepository("TsmCatalogBundle:Catalog")->find($id);

        if( !$service ) {
            throw new \Exception( "По вашему запросу ничего не найдено" );
        }

        $product = $this->getDoctrine()->getRepository("TsmCatalogBundle:Catalog")->findAll();

        if( !$product ) {
            $arReturn = false;
        }
//var_dump( $product[2]->getCategory()->getName() );
        foreach( $product as $key => $val ) {
            $arReturn[$val->getCategory()->getName()][] = $val;
        }

        return $this->render( "TsmCatalogBundle:Catalog:show.html.twig", array( "service" => $service, "products" => $arReturn ) );
    }

    /**
     * @Route( "/services/list", name="services" )
     *
     * @return Response
     * @throws \Exception
     */
    public function listAction() {
        $product = $this->getDoctrine()->getRepository("TsmCatalogBundle:Catalog")->findAll();

        if( !$product ) {
            throw new \Exception( "Nothing..." );
        }
        foreach( $product as $key => $val ) {
            $arReturn[$val->getCategory()->getName()][] = $val;
        }
        return $this->render( "TsmCatalogBundle:Catalog:list.html.twig", array( "products" => $arReturn ) );
    }

    public function newAction() {
        $oProduct    = new Catalog();

        //$form   = $this->createForm()
    }
}
