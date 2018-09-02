<?php

use Illuminate\Database\Seeder;
use App\Models\Admin_user;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

    	Admin_user::create([
			'name' => 'Master Admin',
			'thumb' => 'https://cdn4.iconfinder.com/data/icons/green-shopper/1068/user.png',
			'email' => 'admin@courses.com.br',
			'password' => '1q2w3e4r5t'
    		]);

    }
}
