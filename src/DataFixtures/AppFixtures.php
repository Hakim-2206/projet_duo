<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use App\Entity\Place;
use App\Entity\Picture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\String\Slugger\SluggerInterface;

class AppFixtures extends Fixture
{
    protected $slugger;
    protected $entityManager;

    public function __construct(EntityManagerInterface $entityManager, SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
        $this->entityManager = $entityManager;
    }
    
    public function load( ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        // $faker = Factory::create('fr_FR');
        // $user = $this->entityManager->getRepository(User::class)->find(1);
        // $user = new User();
        // $user->setEmail()
        // ->setPassword()
        // ->setFirstname()
        // ->setLastname()
        // ->setUsername();
        // for ($i = 0; $i < 10; $i++) {

            

        //     $place = new Place();
        //     $name = $faker->sentence(3);
        //     $place->setName($name)
        //     ->setDescription($faker->paragraph(3))
        //     ->setLatitude($faker->randomFloat(8, -90, 90))
        //     ->setLongitude($faker->randomFloat(8, -180, 180))
        //     ->setCreatedAt(new \DateTimeImmutable($faker->date()))
        //     ->setSlug($this->slugger->slug($name))
        //     ->setUser($user);

        //     $manager->persist($place);
        // }
        // $manager->flush();
    }
}
