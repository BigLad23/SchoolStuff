<?php


use Phinx\Seed\AbstractSeed;

class UsersSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'id'    => 1,
                'username' => 'tester1',
                'password' => password_hash('password1', PASSWORD_DEFAULT),
           
            ],
            [
                'id'    => 2,
                'username' => 'tester2',
                'password' => password_hash('password2', PASSWORD_DEFAULT),
           
            ]
        ];

        $posts = $this->table('users');
        $posts->insert($data)
            ->saveData();
    }
}
