<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Event;
use Faker\Factory;

class EventFixtures extends Fixture
{
    /*
    A class to handle fake data for the Event entity.
    */
    protected $faker;

    public function load(ObjectManager $manager): void
    {
        //Use faker factory to generate fake data
        $this->faker = Factory::create();
        for ($i = 0; $i < 20; $i ++){
            $event= new Event();
            $event->setName($this->faker->text());
            $event->setDescription($this->faker->text());
            $event->setApprovalStatus($this->faker->boolean(50));
            $event->setCreatedAt(new \DateTimeImmutable());
            $event->setCreator($this->faker->name());
            $event->setDate($this->faker->dateTime());
            $event->setNumberParticipants($this->faker->numberBetween(0, 100));
            $manager->persist($event);
            $manager->flush();
        }
    }
}
