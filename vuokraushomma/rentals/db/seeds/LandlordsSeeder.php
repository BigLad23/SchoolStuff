<?php


use Phinx\Seed\AbstractSeed;

class LandlordsSeeder extends AbstractSeed
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
            'UsersSeeder'
        ];
    }
    public function run()
    {
        $data = [
            [
                'id'    => 3,
                'user_id' => 3,
            ],
            [
                'id'    => 4,
                'user_id' => 4,
            ]
        ];

        $posts = $this->table('landlords');
        $posts->insert($data)
            ->saveData();
    }
}
