<?php

namespace Tsm\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Tsm\CatalogBundle\Entity\Catalog;

class CatalogController extends Controller
{
    /**
     * Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render("TsmCatalogBundle:Catalog:index.html.twig");
    }

    /**
     * @Route( "/show/{id}", name="show_product" )
     * @param integer $id
     * @return Response
     * @throws \Exception
     */
    public function showAction( $id ) {
        $product = $this->getDoctrine()->getRepository("TsmCatalogBundle:Catalog")->find($id);

        if( !$product ) {
            throw new \Exception( "По вашему запросу ничего не найдено" );
        }

        return $this->render( "TsmCatalogBundle:Catalog:show.html.twig", array( "product" => $product ) );
    }

    public function newAction() {
        $oProduct    = new Catalog();

        //$form   = $this->createForm()
    }
}
