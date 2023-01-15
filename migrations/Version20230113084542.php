<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230113084542 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE task ADD status_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE task ADD CONSTRAINT FK_527EDB25881ECFA7 FOREIGN KEY (status_id_id) REFERENCES status (id)');
        $this->addSql('CREATE INDEX IDX_527EDB25881ECFA7 ON task (status_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE task DROP FOREIGN KEY FK_527EDB25881ECFA7');
        $this->addSql('DROP INDEX IDX_527EDB25881ECFA7 ON task');
        $this->addSql('ALTER TABLE task DROP status_id_id');
    }
}
