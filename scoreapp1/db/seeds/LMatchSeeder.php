<?php


use Phinx\Seed\AbstractSeed;

class LMatchSeeder extends AbstractSeed
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
            'LContestantSeeder',
        ];
    }
        public function run()
    {
       $data = [
            [
                'lmatch_id'    => 1,
                'results' => 2,
                'homecontestantid' => 1,
                'awaycontestantid' => 2,
            ],
            [
                'lmatch_id'    => 2,
                'results' => 1,
                'homecontestantid' => 2,
                'awaycontestantid' => 1,
            ]
        ];

        $posts = $this->table('leaguematch');
        $posts->insert($data)
            ->saveData();  
    } 
}
