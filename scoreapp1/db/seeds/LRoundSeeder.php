<?php


use Phinx\Seed\AbstractSeed;

class LRoundSeeder extends AbstractSeed
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
            'LMatchSeeder',
        ];
    }
    public function run()
    {
       $data = [
            [
                'lround_id'    => 1,
                'roundnum' => 1,
                'date' => '01-06-2021',
                'lmatch_id' => 1,
            ],
            [
                'lround_id'    => 2,
                'roundnum' => 2,
                'date' => '18-05-2021',
                'lmatch_id' => 2,
            ]
        ];

        $posts = $this->table('leagueround');
        $posts->insert($data)
            ->saveData();  
    } 
}

