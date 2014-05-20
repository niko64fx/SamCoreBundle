<?php

namespace CanalTP\SamCoreBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ApplicationRoleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserApplicationRoleRepository extends EntityRepository
{
    /**
     * Return roles with parent
     * @return type
     * @deprecated
     */
    public function findAllWithParent()
    {
        return $this->createQueryBuilder('a')
            ->join('a.role', 'p')
            ->getQuery()
            ->getResult();
    }

    /**
     * Return roles for applications
     */
    public function findAllByApplications($applications)
    {
        return $this->_em->createQuery('SELECT r FROM CanalTPSamCoreBundle:UserApplicationRole r LEFT JOIN r.application a WHERE a IN (:application) ORDER BY a.id')
             ->setParameter('application', $applications)
             ->getResult();
    }
}