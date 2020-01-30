<?php

namespace App\DataFixtures;

use App\Entity\Status;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class StatusFixtures extends Fixture
{
    CONST STATUSES = [
        'Received',
        'Read',
        'Answered',
    ];

    public function load(ObjectManager $manager)
    {
        $i = 0;
        foreach (self::STATUSES as $name => $data) {
            $status = new Status();
            $status->setName($name);;
            $manager->persist($status);
            // $this->addReference('test_'.$i, $test);
            $i++;

            $manager->flush();
        }
    }
}
