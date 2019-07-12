<?php

use App\Customers;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Customers::class, 400)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
