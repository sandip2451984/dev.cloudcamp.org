<?php

namespace Campsite\EventBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Campsite\EventBundle\Entity\Event;
// Use Google Maps
use Google\MapsBundle\Geo\Coding;

class EventController extends Controller
{
    /**
     * @Route("/",name="client")
     * @Template()
     */ 
    public function indexAction(Request $request)
    {
       // we take default eventid
        $eventId =  $this->container->getParameter('default_eventId');

        $em = $this->getDoctrine()->getEntityManager();
          
        $entity = $em->getRepository('CampsiteEventBundle:Event')->find($eventId);
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Events ShowAction entity.');
        }
        
        // we also have to display the attendees 
        $attendees = $em->getRepository('CampsiteEventBundle:Event')->findAttendees($eventId);
        
        return array('event' => $entity, 'attendees' => $attendees);
    }
    /**
     * @Route("/attendees",name="attendees")
     * @Template()     
     */        
     public function attendeesAction(Request $request)
     {
      return array('');
     }
    /**
	   *   get Google Map Address
	   *   @param string Address
	   */
	
  	public function getGoogleMapAddressAction($address='United States')
  	{ 
  	 
   	 $query = new Coding($address);
  	 return $this->render(
              'CampsiteEventBundle::googlemap.html.twig',
              array('googlemapaddress' => $query->getResults())
          );	
  	 
  	}
}
