<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190126152020 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE comandes_productes');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE comandes_productes (comandes_id INT NOT NULL, productes_id INT NOT NULL, INDEX IDX_684F1BFDCA844967 (comandes_id), INDEX IDX_684F1BFDA7B74ECA (productes_id), PRIMARY KEY(comandes_id, productes_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE comandes_productes ADD CONSTRAINT FK_684F1BFDA7B74ECA FOREIGN KEY (productes_id) REFERENCES productes (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comandes_productes ADD CONSTRAINT FK_684F1BFDCA844967 FOREIGN KEY (comandes_id) REFERENCES comandes (id) ON UPDATE NO ACTION ON DELETE CASCADE');
    }
}
