<?php

use Phinx\Migration\AbstractMigration;

class NewTest extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $table = $this->table('followers', ['id' => false, 'primary_key' => ['user_id', 'follower_id']]);
        $table->addColumn('user_id', 'integer')
              ->addColumn('follower_id', 'integer')
              ->addColumn('created', 'datetime')
              ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }

}
