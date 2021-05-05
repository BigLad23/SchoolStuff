<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Entries extends AbstractMigration
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
        $table = $this->table('entries');
        $table->addColumn('admin_id', 'integer')
            ->addColumn('contract_id', 'integer')

            ->addForeignKey('admin_id', 'admins', 'id', array('delete'=> 'CASCADE', 'update'=> 'NO_ACTION'))
            ->addForeignKey('contract_id', 'contracts', 'id', array('delete'=> 'CASCADE', 'update'=> 'NO_ACTION'))
            ->create();
    }
}
