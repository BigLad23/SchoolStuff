<?php


use Phinx\Seed\AbstractSeed;

class ApartmentsSeeder extends AbstractSeed
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
            'LandlordsSeeder'
        ];
    }
    public function run()
    {
        $data = [
            [
                'id'    => 1,
                'type' => 'rivitalo',
                'city' => 'tampere',
                'address' => 'hienotie 12',
                'rooms' => 3,
                'rent' => 800,
                'landlord_id' => 2,
           
            ],
            [
                'id'    => 2,
                'type' => 'kerrostalo',
                'city' => 'tampere',
                'address' => 'hepolamminkatu 15',
                'rooms' => 2,
                'rent' => 600,
                'landlord_id' => 2,
            ]
        ];

        $posts = $this->table('apartments');
        $posts->insert($data)
            ->saveData();
    }
}
