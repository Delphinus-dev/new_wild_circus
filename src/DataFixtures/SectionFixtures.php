<?php

namespace App\DataFixtures;

use App\Entity\Section;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SectionFixtures extends Fixture
{
    CONST SECTIONS = [
        'Philosophy' => [
            'name' => 'philosophy',
            'title' => 'Our philosophy',
            'tagline' => 'Burlesque wonders for all ages',
            'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
            aliquip ex ea commodo consequat.',
            'invitation' => 'Read our whole story',
            'button' => 'History',
            'photo' => 'https://cdn.pixabay.com/photo/2019/03/19/06/36/burlesque-4064902_960_720.jpg',
        ],
        'Performers' => [
            'name' => 'performer',
            'title' => 'The performers',
            'tagline' => 'To each their own magical style',
            'summary' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'invitation' => 'Come read their unique stories',
            'button' => 'All performers',
            'photo' => 'https://pixabay.com/fr/photos/burlesque-mod%C3%A8les-jeune-fille-171165/',
        ],
        'Shows' => [
            'name' => 'event',
            'title' => 'The shows',
            'tagline' => 'Which new world would you like to visit ?',
            'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.',
            'invitation' => 'See all available shows and choose your date',
            'button' => 'All shows',
            'photo' => 'https://cdn.pixabay.com/photo/2014/07/23/20/47/clown-400528_960_720.jpg',
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $i = 0;
        foreach (self::SECTIONS as $name => $data) {
            $section = new Section();
            $section->setName($data['name']);
            $section->setTitle($data['summary']);
            $section->setTagline($data['tagline']);
            $section->setInvitation($data['invitation']);
            $section->setButton($data['button']);
            $section->setPhoto($data['photo']);
            $manager->persist($section);
            // $this->addReference('test_'.$i, $test);
            $i++;

            $manager->flush();
        }
    }
}
