<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('users')->truncate();

        //DB::table('users')->insert([
        //    'name' => 'Nikola Žeravčić',
        //    'email' => 'podrska@bytenet.rs',
        //    'password' => bcrypt('123456'),
        //    'remember_token' => str_random(10),
        //    ]);

        App\User::truncate();

        $user = new App\User;
        $user->name = 'Nikola Žeravčić';
        $user->email ='podrska@bytenet.rs';
        $user->password = bcrypt('123456');
        $user->remember_token = str_random(10);
        $user->save();

        factory(App\User::class, 4)->create();
    }
}
