<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
      //  $data['fname']    = 'Ringme';
        $data['name']     = 'Administrator';
        $data['email']    = 'webmaster@ringme.eu';
        $data['password'] = bcrypt('demo123456');
        $user = User::create($data);
    }
}
