<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
       // \App\Models\User::factory(10)->create();
       \App\Models\UserType::factory()->create([
            'type'=>'Aluno'
       ]);
       \App\Models\UserType::factory()->create([
            'type'=>'Professor'
        ]);
        
        \App\Models\User::factory()->create([
            'name' => 'Teacher',
            'email' => 'prof@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('adminpass'),
            'ust_id'=>2,
        ]);

    }
}
