<?php

namespace App\DataFixtures;

use App\Entity\Adresse;
use App\Entity\Classroom;
use App\Entity\Course;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $course = new Course();
        $course->setCoursename('symfony');
        $manager->persist($course);

        $course1 = new Course();
        $course1->setCoursename('laravel');
        $manager->persist($course1);

        $class1 = new Classroom();
        $class1->setName('GI');
        $manager->persist($class1);

        $class2 = new Classroom();
        $class2->setName('GE');
        $manager->persist($class2);

        $adresse1 = new Adresse();
        $adresse1->setCity('Tunis');
        $manager->persist($adresse1);

        $adresse2 = new Adresse();
        $adresse2->setCity('Nabeul');
        $manager->persist($adresse2);

        $manager->flush();
    }
}
