<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180907081512 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE orders (id INT AUTO_INCREMENT NOT NULL, customer_id INT NOT NULL, create_date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(64) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE customers ADD first_name VARCHAR(255) NOT NULL, ADD last_name VARCHAR(255) NOT NULL, DROP firstname, DROP lastname, CHANGE phone phone VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL, CHANGE address address VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX type ON products');
        $this->addSql('ALTER TABLE products CHANGE name name LONGTEXT NOT NULL, CHANGE price price INT NOT NULL, CHANGE quantity quantity INT NOT NULL, CHANGE description description LONGTEXT NOT NULL, CHANGE type_id type_id INT NOT NULL, CHANGE gender gender LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE product_type CHANGE type type VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE orders');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE customers ADD firstname VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci, ADD lastname VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci, DROP first_name, DROP last_name, CHANGE phone phone VARCHAR(15) NOT NULL COLLATE latin1_swedish_ci, CHANGE email email VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci, CHANGE address address VARCHAR(50) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE product_type CHANGE type type VARCHAR(50) DEFAULT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE products CHANGE quantity quantity INT DEFAULT 0 NOT NULL, CHANGE type_id type_id INT DEFAULT NULL, CHANGE gender gender VARCHAR(50) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE name name VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE price price INT DEFAULT 0 NOT NULL, CHANGE description description LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('CREATE INDEX type ON products (type_id)');
    }
}
