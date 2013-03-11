<?php
namespace Tsm\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

use Tsm\CatalogBundle\Form\FeedbackType;
use Tsm\CatalogBundle\Entity\Feedback;


/**
 * Description of ContactController
 * 
 * @author rutrader
 */
class FeedbackController extends Controller {
    
    public function contactAction() {

        $oFeedBack = new Feedback();
        $oEntity = $this->getDoctrine()->getEntityManager();

        $product = $this->getDoctrine()->getRepository("TsmCatalogBundle:Catalog")->findAll();

        if( !$product ) {
            $arSerivces = array();
        }

        foreach( $product as $key => $val ) {
            $arSerivces[$val->getCategory()->getName()][] = $val;
        }

        $form   = $this->createForm( new FeedbackType(), $oFeedBack );
        $request = $this->getRequest();

        if( $request->getMethod() == 'POST' ) {
            $form->bindRequest($request);

            if( $form->isValid() ) {

                // Write to DB
                $oData = $form->getData();

                $oFeedBack->setCompanyName( $oData->getCompanyName() )
                        ->setFullname( $oData->getFullName() )
                        ->setEmail( $oData->getEmail() )
                        ->setPhone( $oData->getPhone() )
                        ->setComment( $oData->getComment() );
                $oEntity->persist( $oFeedBack );
                $oEntity->flush();
                
                // Отправляем на admin-email
                $message = \Swift_Message::newInstance()
                        ->setSubject( "Новое обращение на сайте ts-montag.ru" )
                        ->setFrom( $oData->getEmail() )
                        ->setTo( "ts_montag@mail.ru" )
                        ->setBody( $this->renderView('TsmCatalogBundle:Feedback:feedback.html.twig', array( 'feedback' => $oFeedBack ) ) )
                        ;
                $this->get('mailer')->send($message);

                // Отправляем клиенту
                $message = \Swift_Message::newInstance()
                        ->setSubject( "Ваше обращение в компанию  ООО \"ТеплоСтройМонтаж\" зарегистрировано" )
                        ->setFrom( "ts_montag@mail.ru" )
                        ->setTo( $oData->getEmail() )
                        ->setBody( $this->renderView( "TsmCatalogBundle::Feedback:feedback_user.html.twig", array( 'feedback' => $oFeedBack ) ) )
                        ;
                $this->get( 'mailer' )->send( $message );
                
                $this->get('session')->setFlash('feedback-notice', 'Спасибо за ваше обращение. Наши специалисты свяжутся с вами в ближайшее время');
                
                return $this->redirect( $this->generateUrl( "_static_feedback" ) );
            }
        }
        return $this->render( 'TsmCatalogBundle:Static:feedback.html.twig', array( 'form' => $form->createView(), 'products' => $arSerivces ) );
    }
}

?>
