<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211020222852 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE agent_has_speciality');
        $this->addSql('ALTER TABLE agent ADD nation_id INT NOT NULL');
        $this->addSql('ALTER TABLE agent ADD CONSTRAINT FK_268B9C9DAE3899 FOREIGN KEY (nation_id) REFERENCES nation (id)');
        $this->addSql('CREATE INDEX IDX_268B9C9DAE3899 ON agent (nation_id)');
        $this->addSql('ALTER TABLE contact ADD nation_id INT NOT NULL');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638AE3899 FOREIGN KEY (nation_id) REFERENCES nation (id)');
        $this->addSql('CREATE INDEX IDX_4C62E638AE3899 ON contact (nation_id)');
        $this->addSql('ALTER TABLE mission ADD nation_id INT NOT NULL, ADD speciality_id INT NOT NULL');
        $this->addSql('ALTER TABLE mission ADD CONSTRAINT FK_9067F23CAE3899 FOREIGN KEY (nation_id) REFERENCES nation (id)');
        $this->addSql('ALTER TABLE mission ADD CONSTRAINT FK_9067F23C3B5A08D7 FOREIGN KEY (speciality_id) REFERENCES speciality (id)');
        $this->addSql('CREATE INDEX IDX_9067F23CAE3899 ON mission (nation_id)');
        $this->addSql('CREATE INDEX IDX_9067F23C3B5A08D7 ON mission (speciality_id)');
        $this->addSql('ALTER TABLE nation ADD hideout_id INT NOT NULL');
        $this->addSql('ALTER TABLE nation ADD CONSTRAINT FK_CC5A6D27E9982FD7 FOREIGN KEY (hideout_id) REFERENCES hideout (id)');
        $this->addSql('CREATE INDEX IDX_CC5A6D27E9982FD7 ON nation (hideout_id)');
        $this->addSql('ALTER TABLE target ADD nation_id INT NOT NULL');
        $this->addSql('ALTER TABLE target ADD CONSTRAINT FK_466F2FFCAE3899 FOREIGN KEY (nation_id) REFERENCES nation (id)');
        $this->addSql('CREATE INDEX IDX_466F2FFCAE3899 ON target (nation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE agent_has_speciality (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE agent DROP FOREIGN KEY FK_268B9C9DAE3899');
        $this->addSql('DROP INDEX IDX_268B9C9DAE3899 ON agent');
        $this->addSql('ALTER TABLE agent DROP nation_id');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638AE3899');
        $this->addSql('DROP INDEX IDX_4C62E638AE3899 ON contact');
        $this->addSql('ALTER TABLE contact DROP nation_id');
        $this->addSql('ALTER TABLE mission DROP FOREIGN KEY FK_9067F23CAE3899');
        $this->addSql('ALTER TABLE mission DROP FOREIGN KEY FK_9067F23C3B5A08D7');
        $this->addSql('DROP INDEX IDX_9067F23CAE3899 ON mission');
        $this->addSql('DROP INDEX IDX_9067F23C3B5A08D7 ON mission');
        $this->addSql('ALTER TABLE mission DROP nation_id, DROP speciality_id');
        $this->addSql('ALTER TABLE nation DROP FOREIGN KEY FK_CC5A6D27E9982FD7');
        $this->addSql('DROP INDEX IDX_CC5A6D27E9982FD7 ON nation');
        $this->addSql('ALTER TABLE nation DROP hideout_id');
        $this->addSql('ALTER TABLE target DROP FOREIGN KEY FK_466F2FFCAE3899');
        $this->addSql('DROP INDEX IDX_466F2FFCAE3899 ON target');
        $this->addSql('ALTER TABLE target DROP nation_id');
    }
}
