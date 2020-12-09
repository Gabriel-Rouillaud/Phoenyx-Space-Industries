<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201204120505 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE card ADD make_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE card ADD CONSTRAINT FK_161498D3CFBF73EB FOREIGN KEY (make_id) REFERENCES destination (id)');
        $this->addSql('CREATE INDEX IDX_161498D3CFBF73EB ON card (make_id)');
        $this->addSql('ALTER TABLE ticket ADD card_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA34ACC9A20 FOREIGN KEY (card_id) REFERENCES card (id)');
        $this->addSql('CREATE INDEX IDX_97A0ADA34ACC9A20 ON ticket (card_id)');
        $this->addSql('ALTER TABLE user ADD ticket_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649700047D2 FOREIGN KEY (ticket_id) REFERENCES ticket (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649700047D2 ON user (ticket_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE card DROP FOREIGN KEY FK_161498D3CFBF73EB');
        $this->addSql('DROP INDEX IDX_161498D3CFBF73EB ON card');
        $this->addSql('ALTER TABLE card DROP make_id');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA34ACC9A20');
        $this->addSql('DROP INDEX IDX_97A0ADA34ACC9A20 ON ticket');
        $this->addSql('ALTER TABLE ticket DROP card_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649700047D2');
        $this->addSql('DROP INDEX IDX_8D93D649700047D2 ON user');
        $this->addSql('ALTER TABLE user DROP ticket_id');
    }
}
