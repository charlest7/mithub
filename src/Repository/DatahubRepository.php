<?php

namespace App\Repository;

use App\Entity\Datahub;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Datahub|null find($id, $lockMode = null, $lockVersion = null)
 * @method Datahub|null findOneBy(array $criteria, array $orderBy = null)
 * @method Datahub[]    findAll()
 * @method Datahub[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DatahubRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Datahub::class);
    }

    // /**
    //  * @return Datahub[] Returns an array of Datahub objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Datahub
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function saveDatahub($value, $type, $dataType, $uploadId)
    {
        $datahub =  new Datahub();
        $em = $this->getEntityManager();

        $datahub->setColumn1($value[0]);
        $datahub->setColumn2($value[1]);
        $datahub->setColumn3($value[2]);
        $datahub->setColumn4($value[3]);
        $datahub->setColumn5($value[4]);
        $datahub->setColumn6($value[5]);
        $datahub->setColumn7($value[6]);
        $datahub->setColumn8($value[7]);
        $datahub->setColumn9($value[8]);
        $datahub->setColumn10($value[9]);
        $datahub->setType($type);
        $datahub->setDataType($dataType);
        $datahub->setUploadId($uploadId);

        $em->persist($datahub);
        $em->flush();

        return true;


        

    }
}
