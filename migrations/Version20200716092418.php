<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200716092418 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE barragens (id_bar INT AUTO_INCREMENT NOT NULL, nome_bar VARCHAR(255) NOT NULL, rotulo_bar VARCHAR(255) NOT NULL, id_cli INT NOT NULL, image_capa_bar VARCHAR(255) NOT NULL, sigla_bar VARCHAR(255) NOT NULL, latitude_bar DOUBLE PRECISION NOT NULL, longitude_bar DOUBLE PRECISION NOT NULL, cadastro_bar DATETIME NOT NULL, PRIMARY KEY(id_bar)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE climatologia (id_clm INT AUTO_INCREMENT NOT NULL, id_est INT NOT NULL, precipitacao_est DOUBLE PRECISION NOT NULL, magnitude_est DOUBLE PRECISION NOT NULL, direcao_est DOUBLE PRECISION NOT NULL, umidade_est DOUBLE PRECISION NOT NULL, pressao_est DOUBLE PRECISION NOT NULL, temperatura_est DOUBLE PRECISION NOT NULL, cadastro_est DATETIME NOT NULL, INDEX IDX_FF58FD2F7C83A793 (id_est), PRIMARY KEY(id_clm)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE estacoes (id_est INT AUTO_INCREMENT NOT NULL, id_bar INT NOT NULL, nome_bar VARCHAR(255) NOT NULL, responsavel_bar VARCHAR(255) NOT NULL, equipamento_bar VARCHAR(255) NOT NULL, latitude_bar DOUBLE PRECISION NOT NULL, longitude_bar DOUBLE PRECISION NOT NULL, cadastro_bar DATETIME NOT NULL, INDEX IDX_AFD6C1BEE85B64F0 (id_bar), PRIMARY KEY(id_est)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE climatologia ADD CONSTRAINT FK_FF58FD2F7C83A793 FOREIGN KEY (id_est) REFERENCES estacoes (id_est)');
        $this->addSql('ALTER TABLE estacoes ADD CONSTRAINT FK_AFD6C1BEE85B64F0 FOREIGN KEY (id_bar) REFERENCES barragens (id_bar)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE estacoes DROP FOREIGN KEY FK_AFD6C1BEE85B64F0');
        $this->addSql('ALTER TABLE climatologia DROP FOREIGN KEY FK_FF58FD2F7C83A793');
        $this->addSql('DROP TABLE barragens');
        $this->addSql('DROP TABLE climatologia');
        $this->addSql('DROP TABLE estacoes');
    }
}
