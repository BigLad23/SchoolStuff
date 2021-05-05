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
                'user_id'    => 1,
                'username' => 'tester1',
                'email' => 'tester1@email.com',
                'password' => password_hash('salasana1', PASSWORD_DEFAULT),
                'isadmin' => 1,
           
            ],
            [
                'user_id'    => 2,
                'username' => 'tester2',
                'email' => 'tester1@email.com',
                'password' => password_hash('salasana2', PASSWORD_DEFAULT),
                'isadmin' => 0,
            ]
        ];

        $posts = $this->table('users');
        $posts->insert($data)
            ->saveData();  
    } 
}
