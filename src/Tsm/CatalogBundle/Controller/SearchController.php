<?php
    namespace Tsm\CatalogBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    
    use Symfony\Component\HttpFoundation\Request;

    use Tsm\CatalogBundle\Entity\Catalog;
/**
 * Description of SearchController
 * @Route( "/" )
 * @author rutrader
 */
class SearchController extends Controller {
    
    /**
     * @Route("/search", name="search" )
     * @ Method({"POST"})
     * 
     * @param type $query
     */
    function searchAction( Request $request ) {
        if( $request->getMethod() == 'POST' ) {

            $phrase = htmlspecialchars( $request->get( 'search' ) );
            if( strlen( $phrase ) <= 0 ) {
                $this->get('session')->setFlash('search-warning', 'Поисковый запрос должен состоять хотя бы из одного слова');
                $arResults = array();
            }
            
            $em = $this->getDoctrine()->getEntityManager();
            $query = $em->createQuery( 'SELECT p FROM TsmCatalogBundle:Catalog p WHERE p.descr LIKE :query ORDER BY p.id ASC')->setParameter('query', '%'.$phrase.'%');

            $arResults = $query->getResult();
            if( !$arResults )
                $arResults = array();
        } else {
            return $this->redirect($this->generateUrl( "main" ) );
        }
        return $this->render( 'TsmCatalogBundle:Catalog:search.html.twig', array( 'results' => $arResults ) );
    }
}

?>
