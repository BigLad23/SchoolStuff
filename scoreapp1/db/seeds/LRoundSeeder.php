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
                'name' => 'Semifinaali',
                'lround_id'    => 1,
                'roundnum' => 1,
                'date' => '2021-06-01',
                'lmatch_id' => 1,
            ],
            [
                'name' => 'Finaali',
                'lround_id'    => 2,
                'roundnum' => 2,
                'date' => '2021-05-15',
                'lmatch_id' => 2,
            ]
        ];

        $posts = $this->table('leagueround');
        $posts->insert($data)
            ->saveData();  
    } 
}

