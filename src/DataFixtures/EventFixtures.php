<?php

namespace App\DataFixtures;

use App\Entity\Event;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class EventFixtures extends Fixture
{
    CONST EVENTS = [
        'White Kingdom' => [
            'photo' => 'https://cdn.pixabay.com/photo/2018/05/11/11/58/gothic-3390367_960_720.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
            aliquip ex ea commodo consequat',
            'first_day' => 'test',
            'last_day' => 'test',
        ],
        'Wild Fire' => [
            'photo' => 'https://cdn.pixabay.com/photo/2016/01/13/05/58/heart-1137272_960_720.jpg',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.y',
            'first_day' => 'test',
            'last_day' => 'test',
        ],
        'Funny Burlesque' => [
            'photo' => 'https://cdn.pixabay.com/photo/2018/05/10/00/44/strong-3386583_960_720.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
            aliquip ex ea commodo consequat',
            'first_day' => 'test',
            'last_day' => 'test',
        ],
        'Windy dreams' => [
            'photo' => 'https://cdn.pixabay.com/photo/2016/02/24/08/31/girl-1219339_960_720.jpg',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'first_day' => 'test',
            'last_day' => 'test',
        ],
        'Music and wonders' => [
            'photo' => 'https://cdn.pixabay.com/photo/2016/12/14/12/09/violin-1906127_960_720.jpg',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
            aliquip ex ea commodo consequat',
            'first_day' => 'test',
            'last_day' => 'test',
        ],
        'Welcome to Kazakhstan !' => [
            'photo' => 'https://cdn.pixabay.com/photo/2015/03/05/19/18/studio-660804_960_720.jpg',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'first_day' => 'test',
            'last_day' => 'test',
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $i = 0;
        foreach (self::EVENTS as $name => $data) {
            $event = new Event();
            $event->setName($name);
            $event->setPhoto($data['photo']);
            $event->setDescription($data['description']);
            $event->setFirstDay($data['first_day']);
            $event->setLastDay($data['last_day']);
            $manager->persist($event);
            // $this->addReference('soiree'.$i, $soiree);
            $i++;

            $manager->flush();
        }
    }
}
