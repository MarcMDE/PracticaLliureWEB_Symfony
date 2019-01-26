<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190126151603 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE comanda_productes (id INT AUTO_INCREMENT NOT NULL, comanda_id INT NOT NULL, producte_id INT NOT NULL, preu DOUBLE PRECISION DEFAULT NULL, unitats SMALLINT NOT NULL, INDEX IDX_9D4F375C787958A8 (comanda_id), INDEX IDX_9D4F375C19F889EA (producte_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comandes_productes (comandes_id INT NOT NULL, productes_id INT NOT NULL, INDEX IDX_684F1BFDCA844967 (comandes_id), INDEX IDX_684F1BFDA7B74ECA (productes_id), PRIMARY KEY(comandes_id, productes_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comanda_productes ADD CONSTRAINT FK_9D4F375C787958A8 FOREIGN KEY (comanda_id) REFERENCES comandes (id)');
        $this->addSql('ALTER TABLE comanda_productes ADD CONSTRAINT FK_9D4F375C19F889EA FOREIGN KEY (producte_id) REFERENCES productes (id)');
        $this->addSql('ALTER TABLE comandes_productes ADD CONSTRAINT FK_684F1BFDCA844967 FOREIGN KEY (comandes_id) REFERENCES comandes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comandes_productes ADD CONSTRAINT FK_684F1BFDA7B74ECA FOREIGN KEY (productes_id) REFERENCES productes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE productes ADD temporada_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE productes ADD CONSTRAINT FK_8C9B786C6E1CF8A8 FOREIGN KEY (temporada_id) REFERENCES temporades (id)');
        $this->addSql('CREATE INDEX IDX_8C9B786C6E1CF8A8 ON productes (temporada_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE comanda_productes');
        $this->addSql('DROP TABLE comandes_productes');
        $this->addSql('ALTER TABLE productes DROP FOREIGN KEY FK_8C9B786C6E1CF8A8');
        $this->addSql('DROP INDEX IDX_8C9B786C6E1CF8A8 ON productes');
        $this->addSql('ALTER TABLE productes DROP temporada_id');
    }
}
