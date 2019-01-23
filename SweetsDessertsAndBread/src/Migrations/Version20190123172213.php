<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190123172213 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, cognoms VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuaris (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, cognoms VARCHAR(255) NOT NULL, telefon VARCHAR(9) NOT NULL, correu VARCHAR(255) NOT NULL, contrassenya VARCHAR(255) NOT NULL, direccio VARCHAR(255) NOT NULL, estat SMALLINT NOT NULL, data_creacio DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE usuaris');
    }
}
