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
                'address' => 'hepolamminkatu10',
                'type' => 'kaksio',
                'price' => 3000,
                'size' => 50,
                'date' => ('2021-12-31'),
                'landlord_id' => 3,
            ],
            [
                'id'    => 2,
                'address' => 'hepolamminkatu11',
                'type' => 'kaksio',
                'price' => 2000,
                'size' => 40,
                'date' => ('2021-12-31'),
                'landlord_id' => 4,
            ]
        ];

        $posts = $this->table('apartments');
        $posts->insert($data)
            ->saveData();
    }
}
