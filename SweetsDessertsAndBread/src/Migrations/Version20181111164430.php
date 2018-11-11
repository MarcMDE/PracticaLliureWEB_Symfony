<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181111164430 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE productes (id INT AUTO_INCREMENT NOT NULL, categoria_id INT NOT NULL, nom VARCHAR(100) NOT NULL, descripcio VARCHAR(510) NOT NULL, preu DOUBLE PRECISION NOT NULL, preu_oferta DOUBLE PRECISION DEFAULT NULL, actiu TINYINT(1) NOT NULL, INDEX IDX_8C9B786C3397707A (categoria_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE productes ADD CONSTRAINT FK_8C9B786C3397707A FOREIGN KEY (categoria_id) REFERENCES categories (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE productes DROP FOREIGN KEY FK_8C9B786C3397707A');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE productes');
    }
}
