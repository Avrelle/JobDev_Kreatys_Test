<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230511133742 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE developer_mission (developer_id INT NOT NULL, mission_id INT NOT NULL, INDEX IDX_FEF9149764DD9267 (developer_id), INDEX IDX_FEF91497BE6CAE90 (mission_id), PRIMARY KEY(developer_id, mission_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE developer_mission ADD CONSTRAINT FK_FEF9149764DD9267 FOREIGN KEY (developer_id) REFERENCES developer (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE developer_mission ADD CONSTRAINT FK_FEF91497BE6CAE90 FOREIGN KEY (mission_id) REFERENCES mission (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE developer_mission DROP FOREIGN KEY FK_FEF9149764DD9267');
        $this->addSql('ALTER TABLE developer_mission DROP FOREIGN KEY FK_FEF91497BE6CAE90');
        $this->addSql('DROP TABLE developer_mission');
    }
}
