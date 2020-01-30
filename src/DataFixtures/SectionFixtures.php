<?php

namespace App\DataFixtures;

use App\Entity\Section;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SectionFixtures extends Fixture
{
    CONST SECTIONS = [
        'Philosophy' => [
            'name' => 'Le policier Rick Grimes',
            'title' => 'categorie_4',
            'tagline' => 'categorie_4',
            'summary' => 'categorie_4',
            'invitation' => 'categorie_4',
            'button' => 'categorie_4',
            'photo' => 'test',
        ],
        'Performers' => [
            'name' => 'Le policier Rick Grimes',
            'title' => 'categorie_4',
            'tagline' => 'categorie_4',
            'summary' => 'categorie_4',
            'invitation' => 'categorie_4',
            'button' => 'categorie_4',
            'photo' => 'test',
        ],
        'Shows' => [
            'name' => 'Le policier Rick Grimes',
            'title' => 'categorie_4',
            'tagline' => 'categorie_4',
            'summary' => 'categorie_4',
            'invitation' => 'categorie_4',
            'button' => 'categorie_4',
            'photo' => 'test',
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
            // $this->addReference('program_'.$i, $program);
            $i++;

            $manager->flush();
        }
    }
}
