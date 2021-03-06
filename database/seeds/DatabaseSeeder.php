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
        DB::table('users')->delete();
        DB::table('estudios')->delete();
        $this->call(userSeeder::class);
        $this->call(estudiosSeeder::Class);
    }
}
