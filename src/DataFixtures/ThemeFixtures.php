<?php


namespace App\DataFixtures;

use App\Entity\Theme;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ThemeFixtures extends Fixture
{
    CONST THEMES = [
        'Become a partner',
        'Become a Wild Circus performer or technician',
        'Organise a show',
        'Meet for an interview/documentary',
        'General question about the website',
        'My ticket reservation',
        'My account',
        'Other',
    ];

    public function load(ObjectManager $manager)
    {
        $i = 0;
        foreach (self::THEMES as $name => $data) {
            $theme = new Theme();
            $theme->setName($name);;
            // $this->addReference('test_'.$i, $test);
            $i++;

            $manager->flush();
        }
    }
}
