<?php

declare(strict_types=1);

namespace BitBag\SyliusMolliePlugin\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210302154654 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_23CC85045E237E06 ON bitbag_mollie_configuration');
        $this->addSql('ALTER TABLE bitbag_mollie_logger CHANGE message message VARCHAR(1000) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE UNIQUE INDEX UNIQ_23CC85045E237E06 ON bitbag_mollie_configuration (name)');
        $this->addSql('ALTER TABLE bitbag_mollie_logger CHANGE message message VARCHAR(500) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`');
    }
}
