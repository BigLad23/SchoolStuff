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
                'name' => 'student1',
                'surname' => 'test1',
                'email' => 'tester1@president.gov.bv',
                'password' => password_hash('salasana1', PASSWORD_DEFAULT),
           
            ],
            [
                'id'    => 2,
                'name' => 'student2',
                'surname' => 'test2',
                'email' => 'tester2@kyrat.ky',
                'password' => password_hash('salasana2', PASSWORD_DEFAULT),
           
            ],
            [
                'id'    => 3,
                'name' => 'landlord3',
                'surname' => 'lord3',
                'email' => 'lord@ky.ky',
                'password' => password_hash('salasana2', PASSWORD_DEFAULT),
           
            ],
            [
                'id'    => 4,
                'name' => 'landlord4',
                'surname' => 'lord4',
                'email' => 'lord@kkk.kkk',
                'password' => password_hash('salasana2', PASSWORD_DEFAULT),
           
            ],
            [
                'id'    => 5,
                'name' => 'admin5',
                'surname' => 'lordtachanka5',
                'email' => 'lord@icloud.kekw',
                'password' => password_hash('salasana2', PASSWORD_DEFAULT),
           
            ],
            [
                'id'    => 6,
                'name' => 'admin6',
                'surname' => 'lord6',
                'email' => 'lord@email.kek',
                'password' => password_hash('salasana2', PASSWORD_DEFAULT),
           
            ]
        ];

        $posts = $this->table('users');
        $posts->insert($data)
            ->saveData();
    }
}
