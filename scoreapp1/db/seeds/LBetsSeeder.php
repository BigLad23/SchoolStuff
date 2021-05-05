<?php


use Phinx\Seed\AbstractSeed;

class LBetsSeeder extends AbstractSeed
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
            'UsersSeeder'
        ];
    }
    public function run()
    {
       $data = [
            [
                'lbets_id'    => 1,
                'guessedlranking' => 1,
                'lmatch_id' => 1,
                'user_id' => 1,
            ],
            [
                'lbets_id'    => 2,
                'guessedlranking' => 2,
                'lmatch_id' => 2,
                'user_id' => 2,
            ]
        ];

        $posts = $this->table('leaguebets');
        $posts->insert($data)
            ->saveData();  
    } 
}
