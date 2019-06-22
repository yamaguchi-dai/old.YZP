<?php

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
        
        $this->call(MTaxSeeder::class);
	$this->call(AdminTablesSeeder::class);
	$this->call(AdminMenuSeeder::class);
    }
}
