<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211020231156 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hideout ADD nation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hideout ADD CONSTRAINT FK_2C2FE159AE3899 FOREIGN KEY (nation_id) REFERENCES nation (id)');
        $this->addSql('CREATE INDEX IDX_2C2FE159AE3899 ON hideout (nation_id)');
        $this->addSql('ALTER TABLE nation DROP FOREIGN KEY FK_CC5A6D27E9982FD7');
        $this->addSql('DROP INDEX IDX_CC5A6D27E9982FD7 ON nation');
        $this->addSql('ALTER TABLE nation DROP hideout_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hideout DROP FOREIGN KEY FK_2C2FE159AE3899');
        $this->addSql('DROP INDEX IDX_2C2FE159AE3899 ON hideout');
        $this->addSql('ALTER TABLE hideout DROP nation_id');
        $this->addSql('ALTER TABLE nation ADD hideout_id INT NOT NULL');
        $this->addSql('ALTER TABLE nation ADD CONSTRAINT FK_CC5A6D27E9982FD7 FOREIGN KEY (hideout_id) REFERENCES hideout (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_CC5A6D27E9982FD7 ON nation (hideout_id)');
    }
}
