<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Categorie;

class CategoriesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $parent = $this->createCategory('Informatique', null, $manager);

        $this-> createCategory('Ordinateur', $parent, $manager);
        $this-> createCategory('Ecran', $parent, $manager);
        $this-> createCategory('Souris', $parent, $manager);

        $parent = $this->createCategory('Mode', null, $manager);

        $this-> createCategory('Homme', $parent, $manager);
        $this-> createCategory('Femme', $parent, $manager);
        $this-> createCategory('Enfant', $parent, $manager);

        $manager->flush();
    }

    public function createCategory (string $name, Categorie $parent = null, ObjectManager $manager)
    {
        $category = new Categorie();
        $category->setName($name);
        $category->setParent($parent);
        $manager->persist($category);

        return $category;
    }
}
