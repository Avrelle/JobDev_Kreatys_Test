<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230511133444 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE mission (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, job VARCHAR(255) NOT NULL, company VARCHAR(255) NOT NULL, localization VARCHAR(255) NOT NULL, contract VARCHAR(255) NOT NULL, duration VARCHAR(255) NOT NULL, salary INT NOT NULL, description LONGTEXT NOT NULL, is_accept TINYINT(1) NOT NULL, start_date DATE NOT NULL, end_date DATE DEFAULT NULL, INDEX IDX_9067F23C19EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mission ADD CONSTRAINT FK_9067F23C19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE client ADD first_name VARCHAR(255) NOT NULL, ADD company_name VARCHAR(255) NOT NULL, ADD phone VARCHAR(9) NOT NULL, ADD adress VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE developer ADD first_name VARCHAR(255) NOT NULL, ADD skill VARCHAR(255) NOT NULL, ADD adress VARCHAR(255) NOT NULL, ADD description LONGTEXT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mission DROP FOREIGN KEY FK_9067F23C19EB6921');
        $this->addSql('DROP TABLE mission');
        $this->addSql('ALTER TABLE client DROP first_name, DROP company_name, DROP phone, DROP adress');
        $this->addSql('ALTER TABLE developer DROP first_name, DROP skill, DROP adress, DROP description');
    }
}
