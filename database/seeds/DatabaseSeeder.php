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
         $this->call(PermissionsTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(ProductsTableSeeder::class);

         factory(\App\Alumno::class, 30)->create();
         factory(\App\Category::class, 20)->create();

        
    }
}
