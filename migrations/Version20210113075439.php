<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210113075439 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE card ADD ticket_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE card ADD CONSTRAINT FK_161498D3700047D2 FOREIGN KEY (ticket_id) REFERENCES ticket (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_161498D3700047D2 ON card (ticket_id)');
        $this->addSql('ALTER TABLE destination ADD card_id INT DEFAULT NULL, ADD bought_number INT DEFAULT NULL');
        $this->addSql('ALTER TABLE destination ADD CONSTRAINT FK_3EC63EAA4ACC9A20 FOREIGN KEY (card_id) REFERENCES card (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3EC63EAA4ACC9A20 ON destination (card_id)');
        $this->addSql('ALTER TABLE ticket ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_97A0ADA3A76ED395 ON ticket (user_id)');
        $this->addSql('ALTER TABLE user ADD confirmed_account TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE card DROP FOREIGN KEY FK_161498D3700047D2');
        $this->addSql('DROP INDEX UNIQ_161498D3700047D2 ON card');
        $this->addSql('ALTER TABLE card DROP ticket_id');
        $this->addSql('ALTER TABLE destination DROP FOREIGN KEY FK_3EC63EAA4ACC9A20');
        $this->addSql('DROP INDEX UNIQ_3EC63EAA4ACC9A20 ON destination');
        $this->addSql('ALTER TABLE destination DROP card_id, DROP bought_number');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA3A76ED395');
        $this->addSql('DROP INDEX UNIQ_97A0ADA3A76ED395 ON ticket');
        $this->addSql('ALTER TABLE ticket DROP user_id');
        $this->addSql('ALTER TABLE user DROP confirmed_account');
    }
}
