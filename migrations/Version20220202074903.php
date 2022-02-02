<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220202074903 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cita ADD horario_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cita ADD CONSTRAINT FK_3E379A624959F1BA FOREIGN KEY (horario_id) REFERENCES horario (id)');
        $this->addSql('CREATE INDEX IDX_3E379A624959F1BA ON cita (horario_id)');
        $this->addSql('ALTER TABLE marcas CHANGE descripcion descripcion VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cita DROP FOREIGN KEY FK_3E379A624959F1BA');
        $this->addSql('DROP INDEX IDX_3E379A624959F1BA ON cita');
        $this->addSql('ALTER TABLE cita DROP horario_id');
        $this->addSql('ALTER TABLE marcas CHANGE descripcion descripcion TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
