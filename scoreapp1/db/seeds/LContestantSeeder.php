<?php


use Phinx\Seed\AbstractSeed;

class LContestantSeeder extends AbstractSeed
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
                'lcontestant_id'    => 1,
                'name' => 'Venäjä' ,
                'event_id' => 1,
            ],
            [
                'lcontestant_id'    => 2,
                'name' => 'Suomi',
                'event_id' => 1,
            ]
        ];

        $posts = $this->table('leaguecontestant');
        $posts->insert($data)
            ->saveData();  
    } 
}
