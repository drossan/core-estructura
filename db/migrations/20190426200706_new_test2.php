<?php

use Phinx\Migration\AbstractMigration;

class NewTest2 extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $users = $this->table('users');
        $users->addColumn('username', 'string', ['limit' => 20, 'null' => true])
              ->addColumn('password', 'string', ['limit' => 40, 'null' => true])
              ->addColumn('password_salt', 'string', ['limit' => 40, 'null' => true])
              ->addColumn('email', 'string', ['limit' => 100])
              ->addColumn('first_name', 'string', ['limit' => 30, 'null' => true])
              ->addColumn('last_name', 'string', ['limit' => 30, 'null' => true])
              ->addColumn('created_at', 'datetime')
              ->addColumn('updated_at', 'datetime', ['null' => true])
              ->addIndex(['username', 'email'], ['unique' => true])
              ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}
