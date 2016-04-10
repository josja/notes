<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * TodoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TodoRepository extends EntityRepository
{
    public function findAll()
    {
        return $this->findBy(array(), array('priority' => 'DESC', 'due' => 'ASC'));
    }
}
