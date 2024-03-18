<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddKomik extends Migration
{
    public function up()
    {
        $this->disableForeignKeyChecks();

        // Migration rules for creating the 'komik' table
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'slugh' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'penulis' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'penerbit' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'sampul' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('komik');

        $this->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->disableForeignKeyChecks();

        // Migration rules for dropping the 'komik' table
        $this->forge->dropTable('komik');

        $this->enableForeignKeyChecks();
    }

    protected function disableForeignKeyChecks()
    {
        $this->db->query('SET FOREIGN_KEY_CHECKS=0');
    }

    protected function enableForeignKeyChecks()
    {
        $this->db->query('SET FOREIGN_KEY_CHECKS=1');
    }
}
