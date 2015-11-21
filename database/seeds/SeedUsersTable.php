<?php

use Illuminate\Database\Seeder;

class SeedUsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $users = [
            [
                'name' => 'Edgar',
                'email' => 'eespinetti_99@hotmail.com',
                'password' => Hash::make('30091984')
            ],
            [
                'name' => 'Fred',
                'email' => 'fred.jackson@gmail.com',
                'password' => Hash::make('fredjackson')
            ],
        ];

        foreach($users as $user){
            App\User::create($user);
        }
    }
}
