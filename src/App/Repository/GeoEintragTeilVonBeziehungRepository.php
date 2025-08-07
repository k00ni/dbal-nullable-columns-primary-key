<?php

// Auto-generated, changes are not preserved!

declare(strict_types=1);

namespace App\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\GeoEintragTeilVonBeziehung;

/**
 * @extends ServiceEntityRepository<GeoEintragTeilVonBeziehung>
 */
class GeoEintragTeilVonBeziehungRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GeoEintragTeilVonBeziehung::class);
    }
}
