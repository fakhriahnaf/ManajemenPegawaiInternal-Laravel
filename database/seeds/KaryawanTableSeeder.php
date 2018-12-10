<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class KaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// DB::table('karyawan')->truncate();

        DB::table('karyawan')->delete();

        DB::table('karyawan')->insert([
        	[
        		'nik' => '005.11.07',
        		'nama' => 'Bagus Winarmo',
        		'jabatan' => 'Manager Multimedia & Machinery',
        		'password' => bcrypt('123'),
        		'created_at' => Carbon::now()
        	],
        	[
        		'nik' => '006.11.07',
        		'nama' => 'Sudharmono',
        		'jabatan' => 'Spv. Enginerring Support',
        		'password' => bcrypt('123'),
        		'created_at' => Carbon::now()
        	],
        	[
        		'nik' => '007.09.08',
        		'nama' => 'Nanang Somantri',
        		'jabatan' => 'Spv. Corporate ADM',
        		'password' => bcrypt('123'),
        		'created_at' => Carbon::now()
        	],
        	[
        		'nik' => '008.09.08',
        		'nama' => 'Indra Kusuma',
        		'jabatan' => 'Spv. Finance',
        		'password' => bcrypt('123'),
        		'created_at' => Carbon::now()
        	],
        	[
        		'nik' => '009.07.08',
        		'nama' => 'Elvin Mudhita',
        		'jabatan' => 'Spv. Information Technology',
        		'password' => bcrypt('123'),
        		'created_at' => Carbon::now()
        	],
        	[
        		'nik' => '011.04.09',
        		'nama' => 'Vian Fitri Yambodo',
        		'jabatan' => 'Programmer',
        		'password' => bcrypt('123'),
        		'created_at' => Carbon::now()
        	],
        ]);
    }
}
