<?php

namespace App\Controller\Admin;

use App\Entity\Developer;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;


class DeveloperCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Developer::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name'),
            TextField::new('FirstName'),
            TextField::new('email'),
            TextField::new('adress'),
            CollectionField::new('Roles'),
            TextField::new('description'),
            TextField::new('skill'),

            
        ];
    }
    
}
