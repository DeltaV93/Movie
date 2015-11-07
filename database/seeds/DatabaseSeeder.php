<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     */
    public function run()
    {
        Model::unguard();

        $this->call('MovieTableSeeder');
    }
}
class MovieTableSeeder extends Seeder
{
  public function run()
  {
    App\Movie::truncate();

    factory(App\Movie::class, 10)->create();
  }
}