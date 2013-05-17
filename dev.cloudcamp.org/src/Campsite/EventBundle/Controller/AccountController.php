<?php

namespace Campsite\EventBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Campsite\EventBundle\Entity\User;
use Campsite\EventBundle\Form\UserType;
class AccountController extends Controller
{
    /**
     * @Route("/register",name="register")
     * @Template()
     */
     
    public function registerAction(Request $request)
    {
        $userObj = new User();
        $form   = $this->createForm(new UserType(), $userObj);
        $form->bindRequest($request);
          if ($request->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getEntityManager();
            $eventObj = $em->getRepository('CampsiteEventBundle:Event')->find(1);
            $userObj->addEvent($eventObj);
            $em->persist($userObj);
            $em->flush();
            //$this->get('session')->setFlash('success', "User Sucessfully Register for the Event");
            return $this->redirect($this->generateUrl('client'));
          
        }

        return array(
            'entity' => $userObj,
            'form'   => $form->createView(),
        );
    }
 
}
