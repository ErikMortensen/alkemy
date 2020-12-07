<?php

use Illuminate\Database\Seeder;
use App\User;
use App\App;
use App\Price;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class, 5)->make()->each(function($user){

            $user->role = 'developer';
            $user->save();

            $apps = factory(App::class,3)->make()->each(function($app) use ($user){
                $app->developer_id = $user->id;
                // var_dump($app);
                // var_dump($user->id);

                $app->save();
                $user->apps()->attach([
                    $app->id,
                ]);

                $price = factory(Price::class,1)->make()->each(function($price) use ($app){
                    $price->app_id = $app->id;
                    $price->save();
                });
                
            }); 

            $userCustomer = factory(User::class, 4)->make()->each(function($user) use ($apps){
                $user->role = 'customer';
                $user->save();
                foreach ($apps as $app ) {
                    $user->apps()->attach([
                        $app->id,
                    ]);
                }
            });
        });
    }
}
