<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUser extends Migration
{
	public function up()
	{
		 $this->forge->addField([
                      'id'           => [
	                            'type'           => 'INT',
	                            'constraint'     => 5,
	                            'unsigned'       => true,
	                            'auto_increment' => true,
                        ],
                         'role_id'    => [
                                'type'           => 'INT',
	                            'constraint'     => 5,
	                            'unsigned'       => true,
                        ],
                        
                        'name'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                                'null'			 => false,
                        ],
                        'email'		 => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                                'null'           => false,
                        ],
                         'password' => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                                'null'           => false,
                        ],
                         'phone_number' => [
                                'type'           => 'INT',
                                'constraint'     => '11',
                                'null'           => true,
                        ],
                        'address'  =>[
                        	'type'				 =>'VARCHAR',
                        	'constraint'		 =>'255',
                        	'null'				 =>true,

                        ],
                          
                       

                ]);
                $this->forge->addKey('id', true);
                $this->forge->addForeignKey('role_id','roles','id');
                $this->forge->createTable('users');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('roles');
	}
}
