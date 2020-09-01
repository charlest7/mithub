<?php

namespace App\Repository;

use App\Entity\Upload;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Upload|null find($id, $lockMode = null, $lockVersion = null)
 * @method Upload|null findOneBy(array $criteria, array $orderBy = null)
 * @method Upload[]    findAll()
 * @method Upload[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UploadRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Upload::class);
    }

    // /**
    //  * @return Upload[] Returns an array of Upload objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Upload
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function saveUpload($totalData, $uploadId, $userId, $email, $datatype)
    {
        date_default_timezone_set("Asia/Bangkok");
        $date =  date("Y-m-d h:i:sa");

        $upload =  new Upload();
        $em = $this->getEntityManager();

        $upload->setUploadId($uploadId);
        $upload->setTotalData($totalData);
        $upload->setDate($date);
        $upload->setUserId($userId);
        $upload->setEmail($email);
        $upload->setDatatype($datatype);
        


        $em->persist($upload);
        $em->flush();

        return true;


        

    }
}
