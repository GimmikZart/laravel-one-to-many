<?php

use Illuminate\Database\Seeder;
use App\Location;
class LocationSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Location::class, 10)->create()-> each(function($location){
        $employee= Employee::inRandomOrder() -> take(rand(1,5))->get();
        $location-> employes() -> attach($employee);
      });
    }
}
