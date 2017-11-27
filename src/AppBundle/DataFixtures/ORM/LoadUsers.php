<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUsers implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setName('John');
        $user->setBio('He is a cool guy');
        $user->setEmail('john@mava.info');
        $manager->persist($user);

        $user = new User();
        $user->setName('Jack');
        $user->setBio('He is a cool guy too');
        $user->setEmail('jack@mava.info');
        $manager->persist($user);

        $manager->flush();
    }
}