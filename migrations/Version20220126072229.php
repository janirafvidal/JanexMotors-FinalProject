<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220126072229 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE motos ADD marca_id INT NOT NULL');
        $this->addSql('ALTER TABLE motos ADD CONSTRAINT FK_BC5434D681EF0041 FOREIGN KEY (marca_id) REFERENCES marcas (id)');
        $this->addSql('CREATE INDEX IDX_BC5434D681EF0041 ON motos (marca_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE motos DROP FOREIGN KEY FK_BC5434D681EF0041');
        $this->addSql('DROP INDEX IDX_BC5434D681EF0041 ON motos');
        $this->addSql('ALTER TABLE motos DROP marca_id');
    }
}
