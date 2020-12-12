<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('posts')->insert([
          [
           'name'=>'admin',
           'age'=>23,
           'password'=>Hash::make('1111')
          ],
          [
              'name'=>'admin2',
              'age'=>24,
              'password'=>Hash::make('1111')
          ],
          [
              'name'=>'admin3',
              'age'=>22,
              'password'=>Hash::make('1111')
          ]
      ]);
    }
}
