<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Users extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table = $this->table('users', ['id' => 'user_id']);
        $table->addColumn('username', 'string')
            ->addColumn('email','string')
            ->addColumn('password', 'string')
            ->addColumn('isadmin', 'boolean')
            ->addIndex(['username'], [
                'unique' => true,
                'name' => 'idx_username'])
            ->create();
    }
}
