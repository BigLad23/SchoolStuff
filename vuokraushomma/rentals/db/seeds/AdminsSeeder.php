<?php


use Phinx\Seed\AbstractSeed;

class AdminsSeeder extends AbstractSeed
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
                'id'    => 5,
                'user_id' => 5,
            ],
            [
                'id'    => 6,
                'user_id' => 6,
            ]
        ];

        $posts = $this->table('admins');
        $posts->insert($data)
            ->saveData();
    }
}
