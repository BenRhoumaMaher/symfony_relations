<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231228151901 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE adresse DROP FOREIGN KEY FK_C35F081671179CD6');
        $this->addSql('DROP INDEX UNIQ_C35F081671179CD6 ON adresse');
        $this->addSql('ALTER TABLE adresse CHANGE name_id student_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE adresse ADD CONSTRAINT FK_C35F0816CB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C35F0816CB944F1A ON adresse (student_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE adresse DROP FOREIGN KEY FK_C35F0816CB944F1A');
        $this->addSql('DROP INDEX UNIQ_C35F0816CB944F1A ON adresse');
        $this->addSql('ALTER TABLE adresse CHANGE student_id name_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE adresse ADD CONSTRAINT FK_C35F081671179CD6 FOREIGN KEY (name_id) REFERENCES student (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C35F081671179CD6 ON adresse (name_id)');
    }
}
