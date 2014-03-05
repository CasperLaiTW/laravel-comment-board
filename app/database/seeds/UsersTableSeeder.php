<?php
class UsersTableSeeder extends Seeder {

    public function run()
    {

        foreach(range(1, 10) as $index)
        {
            User::create([
                'email' =>  'fake-user-'.$index.'@gmail.com',
                'password'  =>  Hash::make($index)
            ]);
        }
    }

}