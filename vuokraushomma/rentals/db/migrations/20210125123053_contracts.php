<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Contracts extends AbstractMigration
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
         $table = $this->table('contracts');
         $table->addColumn('deadline', 'date')
             ->addColumn('registration', 'date')
             ->addColumn('created', 'datetime')
             ->addColumn('expiry', 'datetime')
             ->addColumn('landlord_id', 'integer')
             ->addColumn('student_id', 'integer')
             ->addColumn('apartment_id', 'integer')

             ->addForeignKey('landlord_id', 'users', 'id', array('delete'=> 'CASCADE', 'update'=> 'NO_ACTION'))
             ->addForeignKey('student_id', 'users', 'id', array('delete'=> 'CASCADE', 'update'=> 'NO_ACTION'))
             ->addForeignKey('apartment_id', 'apartments', 'id', array('delete'=> 'CASCADE', 'update'=> 'NO_ACTION'))
             ->create();
     }
}
