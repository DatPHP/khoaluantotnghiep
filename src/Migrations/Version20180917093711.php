<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180917093711 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(64) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE orders_items');
        $this->addSql('ALTER TABLE customers CHANGE first_name first_name VARCHAR(255) NOT NULL, CHANGE last_name last_name VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL, CHANGE phone phone VARCHAR(255) NOT NULL, CHANGE address address VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE orders CHANGE customer_id customer_id INT NOT NULL, CHANGE created_date created_date VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX type ON products');
        $this->addSql('ALTER TABLE products CHANGE name name LONGTEXT NOT NULL, CHANGE price price INT NOT NULL, CHANGE quantity quantity INT NOT NULL, CHANGE description description LONGTEXT NOT NULL, CHANGE type_id type_id INT NOT NULL, CHANGE gender gender LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE product_type CHANGE type type VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE users ADD roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE username username VARCHAR(255) NOT NULL, CHANGE password password VARCHAR(64) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9F85E0677 ON users (username)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE orders_items (id INT NOT NULL, order_id INT NOT NULL, product_id INT NOT NULL, quantity INT NOT NULL) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE customers CHANGE first_name first_name VARCHAR(50) NOT NULL COLLATE utf8_general_ci, CHANGE last_name last_name VARCHAR(50) NOT NULL COLLATE utf8_general_ci, CHANGE phone phone VARCHAR(50) NOT NULL COLLATE utf8_general_ci, CHANGE email email VARCHAR(50) NOT NULL COLLATE utf8_general_ci, CHANGE address address VARCHAR(50) NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE orders CHANGE customer_id customer_id VARCHAR(50) NOT NULL COLLATE utf8_general_ci, CHANGE created_date created_date DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE product_type CHANGE type type VARCHAR(50) DEFAULT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE products CHANGE quantity quantity INT DEFAULT 0 NOT NULL, CHANGE type_id type_id INT DEFAULT NULL, CHANGE gender gender VARCHAR(50) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE name name VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE price price INT DEFAULT 0 NOT NULL, CHANGE description description LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('CREATE INDEX type ON products (type_id)');
        $this->addSql('DROP INDEX UNIQ_1483A5E9F85E0677 ON users');
        $this->addSql('ALTER TABLE users DROP roles, CHANGE id id INT NOT NULL, CHANGE username username VARCHAR(50) NOT NULL COLLATE utf8_unicode_ci, CHANGE password password VARCHAR(50) NOT NULL COLLATE utf8_unicode_ci');
    }
}
