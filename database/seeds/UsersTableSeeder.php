<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'nama' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'surabaya',
            'no_rekening' => '12345678',
            'no_telepon' => '08139082357',
            'poin' => '50'
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'nama' => 'Pengguna',
            'email' => 'pengguna@gmail.com',
            'password' => Hash::make('pass@pengguna'),
            'alamat' => 'Jakarta',
            'no_rekening' => '12345678',
            'no_telepon' => '08139082357',
            'poin' => '50'
        ]);

        DB::table('users')->insert([
            'role_id' => '3',
            'nama' => 'Mitra',
            'email' => 'mitra@gmail.com',
            'password' => Hash::make('pass@mitra'),
            'alamat' => 'surabaya',
            'no_rekening' => '12345678',
            'no_telepon' => '08139082357',
            'poin' => '50'
        ]);

        DB::table('users')->insert([
            'role_id' => '4',
            'nama' => 'Bank Sampah',
            'email' => 'banks@gmail.com',
            'password' => Hash::make('pass@banks'),
            'alamat' => 'surabaya',
            'no_rekening' => '12345678',
            'no_telepon' => '08139082357',
            'poin' => '50'
        ]);
    }
}
