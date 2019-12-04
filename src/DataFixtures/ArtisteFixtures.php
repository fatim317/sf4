<?php


namespace App\DataFixtures;


class

ArtisteFixtures
    /**
     * Obtenir la liste des DJs
     */
{
    public function findDjs()

{
    // Utilisation d' une Query Builder
    return $this ->createQueryBuilder('a')  // Définir un alias pour l' entité

    ->where('a.name LIKE : dj_name')
    ->setParameter('dj_name','DJ %')
    ->getQuery()
    ->getResult();

}

// /**
// * @return Artist[] Returns

