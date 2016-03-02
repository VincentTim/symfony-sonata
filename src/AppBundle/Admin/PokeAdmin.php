<?php

// src/AppBundle/Admin/CategoryAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use Doctrine\ORM\EntityRepository;

class PokeAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('nom', 'text');
        $formMapper->add('genre', 'entity', array(
            'label' => 'Type de Poke',
            'class' => 'AppBundle\Entity\Genre',
            'property' => 'nom',
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('u')
                          ->orderBy('u.nom', 'ASC');
            }
        ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('nom');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('nom');
    }
}