<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Viewers extends AbstractMigration
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
        $table = $this->table('viewers');
        $table->addColumn('student_id', 'integer')
            ->addColumn('apartment_id', 'integer')

            ->addForeignKey('student_id', 'users', 'id', array('delete'=> 'CASCADE', 'update'=> 'NO_ACTION'))
            ->addForeignKey('apartment_id', 'apartments', 'id', array('delete'=> 'CASCADE', 'update'=> 'NO_ACTION'))
            ->create();
    }
}
