<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /**
        * Use Query builder
        */
      // DB::table('admins')->insert([
      //       'name' => str_random(10),
      //       'email' => str_random(10).'@gmail.com',
      //       'job_title' => str_random(10),
      //       'password' => bcrypt('secret'),
      //   ]);

      /**
      * Use Eloquent
      */
      // \App\Admin::create([
      //   'name'	=> str_random(10),
      //   'email'	=> str_random(10) . '@gmail.com',
      //   'password'	=> bcrypt('secret'),
      //   'job_title' => str_random(10)
      // ]);

      /**
      * Use Model factory
      */
      factory(\App\Admin::class, 3)->create();
    }
}
