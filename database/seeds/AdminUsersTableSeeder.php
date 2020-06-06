<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('admin_users')->delete();

        \DB::table('admin_users')->insert(array (
            0 =>
            array (
                'username' => 'admin',
                'password' => '$2y$10$uCGNx2RyR7/NILwm8Wmxs.cL35Ikav293qUPRLBsfP1e4/91QONQC',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-06-05 16:16:00',
                'updated_at' => '2020-06-05 16:16:00',
            ),
            1 =>
            array (
                'username' => 'bashman',
                'password' => '$2y$10$0u8oUxZT.D5YI8J01JxeruAIPEPgp8pm3pboJqDk2r0HtjijObSNm',
                'name' => 'bashman',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-06-05 16:20:24',
                'updated_at' => '2020-06-05 16:20:24',
            ),
            2 =>
            array (
                'username' => 'jose',
                'password' => '$2y$10$pyRMSOkytjSWKGPe2iLo0uvZd5AsCfgzNdF9KqGwCqsTajJVbsrni',
                'name' => 'jose',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-06-05 16:20:47',
                'updated_at' => '2020-06-05 16:20:47',
            ),
        ));


    }
}
