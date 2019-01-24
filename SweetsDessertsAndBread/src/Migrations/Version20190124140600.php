<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190124140600 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE usuaris');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE usuaris (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, cognoms VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, telefon VARCHAR(9) NOT NULL COLLATE utf8mb4_unicode_ci, correu VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, contrassenya VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, direccio VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, estat SMALLINT NOT NULL, data_creacio DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
    }
}
