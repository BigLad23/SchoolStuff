<?php


use Phinx\Seed\AbstractSeed;

class RContestantsSeeder extends AbstractSeed
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
            'EventSeeder',
        ];
    }
    public function run()
    {
       $data = [
            [
                'contestant_id'    => 1,
                'placement' => 1,
                'name' => 'Ruotsi, Tusse',
                'event_id' => 2,
            ],
            [
                'contestant_id'    => 2,
                'placement' => 2,
                'name' => 'Suomi, Saara aalto',
                'event_id' => 2,
            ]
        ];

        $posts = $this->table('rankingcontestant');
        $posts->insert($data)
            ->saveData();  
    }
}
