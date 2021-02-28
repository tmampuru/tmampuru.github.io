<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210224061159 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comms (id INT AUTO_INCREMENT NOT NULL, assessor VARCHAR(255) NOT NULL, agent_addressed VARCHAR(255) NOT NULL, pod_leader VARCHAR(255) NOT NULL, support_category VARCHAR(255) NOT NULL, issue_category VARCHAR(255) NOT NULL, interaction_id VARCHAR(255) NOT NULL, comments_sent VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE qa_calls (id INT AUTO_INCREMENT NOT NULL, submission_time VARCHAR(255) NOT NULL, appropriate_intro VARCHAR(255) NOT NULL, apology_empathy VARCHAR(255) NOT NULL, identified_mojo VARCHAR(255) NOT NULL, dead_air VARCHAR(255) NOT NULL, comments_advice1 VARCHAR(255) NOT NULL, probing VARCHAR(255) NOT NULL, proactively_troubleshoot VARCHAR(255) NOT NULL, steps_appropriate VARCHAR(255) NOT NULL, situation_improved VARCHAR(255) NOT NULL, comments_advice2 VARCHAR(255) NOT NULL, agent_notes VARCHAR(255) NOT NULL, end_call_politely VARCHAR(255) NOT NULL, remained_professional VARCHAR(255) NOT NULL, comments_advice3 VARCHAR(255) NOT NULL, mojo_link VARCHAR(255) NOT NULL, call_date VARCHAR(255) NOT NULL, incoming_outgoing_number VARCHAR(255) NOT NULL, service_area VARCHAR(255) NOT NULL, query_based VARCHAR(255) NOT NULL, agent_name VARCHAR(255) NOT NULL, agent_email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', password VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE comms');
        $this->addSql('DROP TABLE qa_calls');
        $this->addSql('DROP TABLE user');
    }
}
