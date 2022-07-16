<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Event;
use Faker\Factory;

class EventFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 20; $i ++){
            $event= new Event();
            $event->setName('Event '.$i);
            $event->setDescription('Description '.$i);
            $event->setApprovalStatus(true);

            $manager->persist($event);
            $manager->flush();
        }
    }
}
