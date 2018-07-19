<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = User::find(1);
        $user->name = 'YatShen';
        $user->email = 'YatShen829@gmail.com';
        $user->password = bcrypt('a321321');
        $user->is_admin = true;
        $user->save();
    }
}
