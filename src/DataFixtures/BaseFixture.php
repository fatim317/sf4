<?php


namespace App\DataFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class BaseFixture abstract class BaseFixture extends Fixture


{

    private $manager;
    protected $faker;
}