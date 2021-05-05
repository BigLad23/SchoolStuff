<?php


use Phinx\Seed\AbstractSeed;

class EntriesSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
public function getDependencies()
    {
        return [
            'AdminsSeeder',
            'ContractsSeeder'
        ];
    }
    public function run()
    {
        $data = [
            [
                'id'    => 1,
                'admin_id' => 5,
                'contract_id' => 1,
            ],
            [
                'id'    => 2,
                'admin_id' => 6,
                'contract_id' => 2,
            ]
        ];

        $posts = $this->table('entries');
        $posts->insert($data)
            ->saveData();
    }
}
