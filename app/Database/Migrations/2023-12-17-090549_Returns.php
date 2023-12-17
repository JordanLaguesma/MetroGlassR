<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Returns extends Migration
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
            'order_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
            'reason' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'date_issued' => [
                'type' => 'DATETIME'
            ],
            'status' => [
                'type' => 'INT',
                'constraint' => 1
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('customer_id', 'customers', 'id');
        $this->forge->addForeignKey('order_id', 'orders', 'id');
        $this->forge->createTable('returns');
    }

    public function down()
    {
        $this->forge->dropTable('returns');
    }
}
