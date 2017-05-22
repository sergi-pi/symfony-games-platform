<?php

namespace AppBundle\Service;

class VariablesService
{
    public function __construct(\Doctrine\Bundle\DoctrineBundle\Registry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function getCategories()
    {
        return $this->doctrine->getManager()->getRepository('AppBundle:Categories')->findAllOrdered();
    }

    public function getGames()
    {
        return $this->doctrine->getManager()->getRepository('AppBundle:Games')->findAllGames();
    }
}