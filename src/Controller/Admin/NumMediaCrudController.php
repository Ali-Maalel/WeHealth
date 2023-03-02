<?php

namespace App\Controller\Admin;

use App\Entity\NumMedia;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class NumMediaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NumMedia::class;
    }
    

    public function configureFields(string $pageName): iterable
    {
         $mediasDir = $this->getParameter('medias_directory');
        $uploadsDir = $this->getParameter('uploads_directory');
        yield TextField::new('nom');

        $imageField = ImageField::new('nomFichier', 'Média')
            ->setBasePath($uploadsDir)
            ->setUploadDir($mediasDir)
            ->setUploadedFileNamePattern('[uuid].[extension]');
            if (Crud::PAGE_EDIT == $pageName) {
                $imageField->setRequired(false);
            }
            yield $imageField;
        
    }
}
