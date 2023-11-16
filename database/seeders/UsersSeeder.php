<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('users')->insert([
      [
        'id' => 1,
        'username' => 'matilo',
        'email' => 'matias.lopez@davinci.edu.ar',
        'picture' => null,
        'password' => Hash::make('password'),
        'role' => 'administrador',
        'updated_at' => now(),
        'created_at' => now()
      ],
      [
        'id' => 2,
        'username' => 'lauti',
        'email' => 'lautaro.climent@davinci.edu.ar',
        'picture' => null,
        'password' =>  Hash::make('password'),
        'role' => 'administrador',
        'updated_at' => now(),
        'created_at' => now()
      ],
      [
        'id' => 3,
        'username' => 'santi',
        'email' => 'santiago.gallino@davinci.edu.ar',
        'picture' => null,
        'password' =>  Hash::make('password'),
        'role' => 'usuario',
        'updated_at' => now(),
        'created_at' => now()
      ]
    ]);
  }
}
