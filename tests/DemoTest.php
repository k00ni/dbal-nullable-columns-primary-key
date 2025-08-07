<?php

declare(strict_types=1);

namespace Tests;

use Doctrine\ORM\Tools\SchemaTool;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DemoTest extends KernelTestCase
{
    public function test(): void
    {
        $kernel = self::bootKernel();

        $em = $kernel->getContainer()->get('doctrine.orm.entity_manager');
        $connection = $em->getConnection();
        $connection->executeQuery('SET FOREIGN_KEY_CHECKS=0;');
        foreach ($connection->createSchemaManager()->listTables() as $table) {
            $connection->executeQuery('DROP TABLE `'.$table->getName().'`');
        }
        $connection->executeQuery('SET FOREIGN_KEY_CHECKS=1;');
        (new SchemaTool($em))->updateSchema($em->getMetadataFactory()->getAllMetadata());
    }
}
