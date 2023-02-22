<?php

namespace App\Controller\Admin;

use App\Entity\NumMedia;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class NumMediaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NumMedia::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
