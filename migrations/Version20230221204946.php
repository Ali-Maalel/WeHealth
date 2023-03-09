<?php

declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230221204946 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, contenu LONGTEXT DEFAULT NULL, featured_text VARCHAR(100) DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, id_parent INT NOT NULL, created_at VARCHAR(20) NOT NULL, update_at VARCHAR(20) NOT NULL, content VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE media (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(50) NOT NULL, name VARCHAR(50) NOT NULL, size INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, created_at DATETIME NOT NULL, last_at DATETIME NOT NULL, content VARCHAR(50) NOT NULL, auteur VARCHAR(50) NOT NULL, liste_commentaire VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE topic (id INT AUTO_INCREMENT NOT NULL, slug VARCHAR(50) NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE coach ADD typeuser VARCHAR(50) NOT NULL, CHANGE telephone telephone VARCHAR(15) DEFAULT NULL');
        $this->addSql('ALTER TABLE professionnel_sante ADD iduser INT NOT NULL, ADD login VARCHAR(30) NOT NULL, ADD password VARCHAR(32) NOT NULL, ADD nom VARCHAR(30) NOT NULL, ADD prenom VARCHAR(30) NOT NULL, ADD email VARCHAR(100) NOT NULL, ADD telephone VARCHAR(15) DEFAULT NULL, ADD typeuser VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE user ADD typeuser VARCHAR(50) NOT NULL, CHANGE telephone telephone VARCHAR(15) DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE media');
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE topic');
        $this->addSql('ALTER TABLE coach DROP typeuser, CHANGE telephone telephone VARCHAR(15) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE professionnel_sante DROP iduser, DROP login, DROP password, DROP nom, DROP prenom, DROP email, DROP telephone, DROP typeuser');
        $this->addSql('ALTER TABLE `user` DROP typeuser, CHANGE telephone telephone VARCHAR(15) DEFAULT \'NULL\'');
    }
}
