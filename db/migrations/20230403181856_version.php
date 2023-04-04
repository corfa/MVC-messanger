<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Version extends AbstractMigration
{
    
    public function change(): void
    {
       
        $tableAdmins = $this->table('admins',['id' => false, 'primary_key' => ['Id']]);
        $tableAdmins ->addColumn('Id', 'integer',['null' => false,'identity' => true])
                 ->addColumn('login', 'string')
                ->addColumn('password', 'string')
                ->create();  
        
        $tableUsers = $this->table('users',['id' => false, 'primary_key' => ['id']]);
        $tableUsers  ->addColumn('id', 'integer',['null' => false,'identity' => true])
                    ->addColumn('username', 'string')
                 ->addColumn('password', 'string')
                ->create();  

        $tableMessages = $this->table('email_messages',['id' => false, 'primary_key' => ['Id']]);
        $tableMessages ->addColumn('Id', 'integer',['null' => false,'identity' => true])
                        ->addColumn('id_sender', 'integer' )
                        ->addForeignKey('id_sender', 'users', 'id')
                        ->addColumn('id_recipient', 'integer' )
                        ->addForeignKey('id_sender', 'users', 'id')
                        ->addColumn('text_message', 'string')
                        ->addColumn('title_message', 'string')
                        ->create(); 
    }
   
    

   
}
