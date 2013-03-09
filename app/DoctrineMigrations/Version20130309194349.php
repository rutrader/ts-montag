<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20130309194349 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE catalog CHANGE price price INT NOT NULL, CHANGE category category INT DEFAULT NULL, CHANGE parent parent INT NOT NULL");
        $this->addSql("ALTER TABLE catalog ADD CONSTRAINT FK_1B2C324764C19C1 FOREIGN KEY (category) REFERENCES category (id)");
        $this->addSql("CREATE INDEX IDX_1B2C324764C19C1 ON catalog (category)");
        $this->addSql("ALTER TABLE category CHANGE parent parent INT NOT NULL");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE catalog DROP FOREIGN KEY FK_1B2C324764C19C1");
        $this->addSql("DROP INDEX IDX_1B2C324764C19C1 ON catalog");
        $this->addSql("ALTER TABLE catalog CHANGE category category INT DEFAULT 1 NOT NULL, CHANGE price price INT DEFAULT 0 NOT NULL, CHANGE parent parent INT DEFAULT 0 NOT NULL");
        $this->addSql("ALTER TABLE category CHANGE parent parent INT DEFAULT 0 NOT NULL");
    }
}
