<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PenggunaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengguna')->truncate();

        DB::table('pengguna')->insert(['nama' => 'Admin IT', 'email' => 'admin@unb.ac.id', 'password' => bcrypt('admin'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
    }
}
