<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220128075534 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE estilo (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE marcas CHANGE descripcion descripcion VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE motos ADD estilo_id INT NOT NULL');
        $this->addSql('ALTER TABLE motos ADD CONSTRAINT FK_BC5434D643798DA7 FOREIGN KEY (estilo_id) REFERENCES estilo (id)');
        $this->addSql('CREATE INDEX IDX_BC5434D643798DA7 ON motos (estilo_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE motos DROP FOREIGN KEY FK_BC5434D643798DA7');
        $this->addSql('DROP TABLE estilo');
        $this->addSql('ALTER TABLE marcas CHANGE descripcion descripcion TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('DROP INDEX IDX_BC5434D643798DA7 ON motos');
        $this->addSql('ALTER TABLE motos DROP estilo_id');
    }
}
