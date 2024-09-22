<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produtos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_produto'           => [
                'type'             => 'INT',
                'constraint'       => 9,
                'usigned'          => true,
                'auto_increment'   => true,
            ],

            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 128
            ],

            'descricao' => [
                'type' => 'TEXT'
            ],

            'valor_de_compra' => [
                'type' => 'DOBLE'
            ],

            'quantidade' => [
                'type' => 'INT'
            ],

            'validade' => [
                'type' => 'DATE'
            ],

            'created_at' => [
                'type' => 'DATETIME'
            ],

            'updated_at' => [
                'type' => 'DATETIME'
            ],

            'deleted_at' => [
                'type' => 'DATETIME'
            ],
        ]);

        $this->forge->addkey('id_produto', true);
        $this->forge->createTable('produtos');
    }

    public function down()
    {
        $this->forge->dropTable('produtos');
    }
}
