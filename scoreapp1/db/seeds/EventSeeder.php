<?php


use Phinx\Seed\AbstractSeed;

class EventSeeder extends AbstractSeed
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
                'event_id'    => 1,
                'name' => 'Jääkiekon maailmanmestaruus' ,
                'date' => '2021-06-01',
                'type' => 1
            ],
            [
                'event_id'    => 2,
                'name' => 'Euroviisut 2021',
                'date' => '2021-05-15',
                'type' => 2
            ]
        ];

        $posts = $this->table('event');
        $posts->insert($data)
            ->saveData();  
    } 
}

