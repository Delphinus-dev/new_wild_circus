<?php


namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    CONST USERS = [
        '1' => [
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'admin',
            'roles' => [
                'ROLE_USER',
                'ROLE_ADMIN',
                ],
        ],
        '2' => [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@mail.com',
            'password' => '1234',
            'roles' => [
                'ROLE_USER',
            ],
        ],
        '3' => [
            'first_name' => 'July',
            'last_name' => 'Andrews',
            'email' => 'july@mail.com',
            'password' => 'azerty',
            'roles' => [
                'ROLE_USER',
            ],
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $i = 0;
        foreach (self::USERS as $key => $data) {
            $user = new User();
            $user->setFirstName($data['first_name']);
            $user->setLastName($data['last_name']);
            $user->setEmail($data['email']);
            $user->setPassword($data['password']);
            $user->setRoles($data['roles']);
            $manager->persist($user);
            // $this->addReference('event_'.$i, $event);
            $i++;

            $manager->flush();
        }
    }
}
