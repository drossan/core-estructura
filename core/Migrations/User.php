<?php
namespace GRDAR\Models;

use Drossan\core\Database\Connection;

class User extends Connection
{
    public function schema()
    {
        $this->dbh->schema()->create('users', function ($table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }
}