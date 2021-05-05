<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class LeagueContestant extends AbstractMigration
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
        $table = $this->table('leaguecontestant', ['id' => 'lcontestant_id']);
        $table->addColumn('name', 'string')
            ->addColumn('event_id', 'integer')
            ->addForeignKey('event_id', 'event', 'event_id', array('delete'=> 'CASCADE', 'update'=> 'NO_ACTION'))
            ->create();
    }
}
