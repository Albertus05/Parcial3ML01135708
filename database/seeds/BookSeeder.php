<?php

use Illuminate\Database\Seeder;
use App\Models\books;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(books::class,20)->create();
        /* books::create([
            'id' => '1',
            'name' => 'Alberto',
            'email' => 'martinezlinares.alberto@gmail.com',
            'password' => bcrypt('Alberto122'),
        ]); */
    }
}
