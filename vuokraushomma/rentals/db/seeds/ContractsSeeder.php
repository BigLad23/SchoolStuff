<?php


use Phinx\Seed\AbstractSeed;

class ContractsSeeder extends AbstractSeed
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
            'LandlordSeeder',
            'ApartmentsSeeder',
            'StudentsSeeder'
        ];
    }
    public function run()
    {
        $data = [
            [
                'id'    => 1,
                'deadline' => date('2021-12-31'),
                'registration' => date('2021-12-31'),
                'created' => date('2017-12-31'),
                'expiry' => date('2021-12-31'), 
                'landlord_id' => 3,
                'student_id' => 1,
                'apartment_id' => 1,
            ],
            [
                'id'    => 2,
                'deadline' => date('2021-12-31'),
                'registration' => date('2021-12-31'),
                'created' => date('2018-12-31'),
                'expiry' => date('2021-12-31'), 
                'landlord_id' => 4,
                'student_id' => 2,
                'apartment_id' => 1,
            ]
        ];

        $posts = $this->table('contracts');
        $posts->insert($data)
            ->saveData();
    }
}
