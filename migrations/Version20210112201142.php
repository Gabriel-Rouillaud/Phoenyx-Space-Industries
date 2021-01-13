<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210112201142 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE destination_departure (destination_id INT NOT NULL, departure_id INT NOT NULL, INDEX IDX_1469768B816C6140 (destination_id), INDEX IDX_1469768B7704ED06 (departure_id), PRIMARY KEY(destination_id, departure_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE destination_arrival (destination_id INT NOT NULL, arrival_id INT NOT NULL, INDEX IDX_35DC63CC816C6140 (destination_id), INDEX IDX_35DC63CC62789708 (arrival_id), PRIMARY KEY(destination_id, arrival_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE destination_departure ADD CONSTRAINT FK_1469768B816C6140 FOREIGN KEY (destination_id) REFERENCES destination (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE destination_departure ADD CONSTRAINT FK_1469768B7704ED06 FOREIGN KEY (departure_id) REFERENCES departure (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE destination_arrival ADD CONSTRAINT FK_35DC63CC816C6140 FOREIGN KEY (destination_id) REFERENCES destination (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE destination_arrival ADD CONSTRAINT FK_35DC63CC62789708 FOREIGN KEY (arrival_id) REFERENCES arrival (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE destination ADD img VARCHAR(255) DEFAULT NULL, CHANGE name name VARCHAR(255) NOT NULL, CHANGE duration duration TIME DEFAULT NULL, CHANGE price price DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE destination_departure');
        $this->addSql('DROP TABLE destination_arrival');
        $this->addSql('ALTER TABLE destination DROP img, CHANGE name name VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE duration duration TIME NOT NULL, CHANGE price price DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE user DROP roles');
    }
}
