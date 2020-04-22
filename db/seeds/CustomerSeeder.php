<?php


use Phinx\Seed\AbstractSeed;

class CustomerSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Juvenal',
            ],
            [
                'name' => 'Jeronimo',
            ],
            [
                'name' => 'Juarez'
            ]
        ];

        $posts = $this->table('customers');
        $posts->insert($data)
            ->save();
    }
}
