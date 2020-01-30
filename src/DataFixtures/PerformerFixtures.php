<?php

namespace App\DataFixtures;

use App\Entity\Performer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PerformerFixtures extends Fixture
{
    CONST PERFORMERS = [
        'Aurora' => [
            'photo' => 'https://cdn.pixabay.com/photo/2019/03/19/06/36/burlesque-4064903_960_720.jpg',
            'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
            aliquip ex ea commodo consequat',
        ],
        'Crazy Johnny' => [
            'photo' => 'https://cdn.pixabay.com/photo/2015/03/08/17/25/musician-664432_960_720.jpg',
            'bio' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.y',
        ],
        'Miss Teek' => [
            'photo' => 'https://cdn.pixabay.com/photo/2020/01/07/06/51/girl-4746895_960_720.jpg',
            'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
            aliquip ex ea commodo consequat',
        ],
        'Fire Sorcerer' => [
            'photo' => 'https://cdn.pixabay.com/photo/2019/11/06/10/44/fire-4605815_960_720.jpg',
            'bio' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        ],
        'White Queen' => [
            'photo' => 'https://cdn.pixabay.com/photo/2018/06/07/16/25/woman-3460384_960_720.jpg',
            'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
            aliquip ex ea commodo consequat',
        ],
        'The Mute' => [
            'photo' => 'https://cdn.pixabay.com/photo/2017/08/22/17/04/pantomime-2669717_960_720.jpg',
            'bio' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        ],
        'Britanny Maloney' => [
            'photo' => 'https://cdn.pixabay.com/photo/2016/02/25/09/13/stripper-1221639_960_720.jpg',
            'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
            aliquip ex ea commodo consequat',
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $i = 0;
        foreach (self::PERFORMERS as $name => $data) {
            $performer = new Performer();
            $performer->setName($name);
            $performer->setPhoto($data['photo']);
            $performer->setBio($data['bio']);
            $manager->persist($performer);
            // $this->addReference('event_'.$i, $event);
            $i++;

            $manager->flush();
        }
    }
}
