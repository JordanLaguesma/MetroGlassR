<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orders extends Migration
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
            'customer_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
            'date_ordered' => [
                'type' => 'DATETIME'
            ],
            'status' => [
                'type' => 'INT',
                'constraint' => 1
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('customer_id', 'customers', 'id');
        $this->forge->createTable('orders');
    }
    public function down()
    {
        $this->forge->dropTable('orders');
    }
}