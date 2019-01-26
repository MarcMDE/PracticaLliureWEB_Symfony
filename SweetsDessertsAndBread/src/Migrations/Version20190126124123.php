<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190126124123 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE comandes ADD usuari_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE comandes ADD CONSTRAINT FK_13215AEC5F263030 FOREIGN KEY (usuari_id) REFERENCES usuaris (id)');
        $this->addSql('CREATE INDEX IDX_13215AEC5F263030 ON comandes (usuari_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE comandes DROP FOREIGN KEY FK_13215AEC5F263030');
        $this->addSql('DROP INDEX IDX_13215AEC5F263030 ON comandes');
        $this->addSql('ALTER TABLE comandes DROP usuari_id');
    }
}
