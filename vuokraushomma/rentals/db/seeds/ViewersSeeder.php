<?php


use Phinx\Seed\AbstractSeed;

class ViewersSeeder extends AbstractSeed
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
            'StudentsSeeder',
            'ApartmentsSeeder'
        ];
    }
    public function run()
    {
        $data = [
            [
                'id'    => 1,
                'student_id' => 1,
                'apartment_id' => 1,
            ],
            [
                'id'    => 2,
                'student_id' => 2,
                'apartment_id' => 2,
            ]
        ];

        $posts = $this->table('viewers');
        $posts->insert($data)
            ->saveData();
    }
}
