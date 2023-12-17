<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'description' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'category_id' => [
                'type' => 'INT',
                'constraint' => 2
            ],
            'size' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'price' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'unsigned' => true
            ],
            'quantity' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'sold' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'icon' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('category_id', 'categories', 'id');
        $this->forge->createTable('products');
    }
    public function down()
    {
        $this->forge->dropTable('products');
    }
}