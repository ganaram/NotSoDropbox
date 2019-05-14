<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class, 3)->create();
        $files = factory(App\Archivo::class, 20)->create();

        $users->each(function(App\User $user) use ($files){
            $users->files()->attach(
                $files->random(random_int(1,3))
            );        
        });
    }
}
