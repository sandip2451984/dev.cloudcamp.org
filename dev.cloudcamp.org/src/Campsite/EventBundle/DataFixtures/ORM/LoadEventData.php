<?php

namespace Campsite\EventBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Campsite\EventBundle\Entity\Event;

/**
 *   This Fixtures Used For LoadEvent Data
 *
 */  
class LoadEventData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $eventObj = new Event();
        $eventObj->setName('MarketingCamp Conference');
        $eventObj->setDescription('This is Test Description');
        $eventObj->setFromDate(new \DateTime());
        $eventObj->setToDate(new \DateTime());
        $eventObj->setAddress('Nokia');
        $eventObj->setCity('New Jersey');
        $eventObj->setState('CA');
        $eventObj->setCountry('US');
        $eventObj->setZipcode('390007');
        $eventObj->setIsActive(1);
        $eventObj->setCreatedAt(new \DateTime());
        $eventObj->setUpdatedat(new \DateTime());
        
        $manager->persist($eventObj);
        $manager->flush();
    }
}
?>