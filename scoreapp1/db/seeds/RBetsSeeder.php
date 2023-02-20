<?php


use Phinx\Seed\AbstractSeed;

class RBetsSeeder extends AbstractSeed
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
            'RContestantsSeeder',
            'UsersSeeder'
        ];
    }
    public function run()
    {
       $data = [
            [
                'bets_id'    => 1,
                'guessedranking' => 1,
                'user_id' => 1,
                'contestant_id' => 1,
            ],
            [
                'bets_id'    => 2,
                'guessedranking' => 2,
                'user_id' => 2,
                'contestant_id' => 2,
            ],
            [
                'bets_id'    => 3,
                'guessedranking' => 1,
                'user_id' => 3,
                'contestant_id' => 2,
            ],
            [
                'bets_id'    => 4,
                'guessedranking' => 1,
                'user_id' => 1,
                'contestant_id' => 2,
            ]
        ];

        $posts = $this->table('rankingbets');
        $posts->insert($data)
            ->saveData();  
    } 
}
