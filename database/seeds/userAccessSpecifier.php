<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class userAccessSpecifier extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        #Home
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'admin',
                'screen'     => 'home',
                'type'       => 'menu',
                'action'     => 'donor',
                'access'     => 1,
                'userId'     => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'admin',
                'screen'     => 'home',
                'type'       => 'menu',
                'action'     => 'donation',
                'access'     => 1,
                'userId'     => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'admin',
                'screen'     => 'home',
                'type'       => 'menu',
                'action'     => 'colonies',
                'access'     => 1,
                'userId'     => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'admin',
                'screen'     => 'home',
                'type'       => 'menu',
                'action'     => 'families',
                'access'     => 1,
                'userId'     => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'admin',
                'screen'     => 'home',
                'type'       => 'menu',
                'action'     => 'partners',
                'access'     => 1,
                'userId'     => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'admin',
                'screen'     => 'home',
                'type'       => 'menu',
                'action'     => 'lvlh',
                'access'     => 1,
                'userId'     => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'admin',
                'screen'     => 'home',
                'type'       => 'menu',
                'action'     => 'ca',
                'access'     => 1,
                'userId'     => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'admin',
                'screen'     => 'home',
                'type'       => 'menu',
                'action'     => 'hr',
                'access'     => 1,
                'userId'     => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'admin',
                'screen'     => 'home',
                'type'       => 'menu',
                'action'     => 'edu',
                'access'     => 1,
                'userId'     => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );

        #Donor
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'admin',
                'screen'     => 'donor',
                'type'       => 'action-menu',
                'action'     => 'edit',
                'access'     => 1,
                'userId'     => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'admin',
                'screen'     => 'donor',
                'type'       => 'action-menu',
                'action'     => 'save',
                'access'     => 1,
                'userId'     => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'admin',
                'screen'     => 'donor',
                'type'       => 'action-menu',
                'action'     => 'delete',
                'access'     => 1,
                'userId'     => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        

         //user1
        #Home
         DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'user',
                'screen'     => 'home',
                'type'       => 'menu',
                'action'     => 'donor',
                'access'     => 1,
                'userId'     => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'user',
                'screen'     => 'home',
                'type'       => 'menu',
                'action'     => 'donation',
                'access'     => 1,
                'userId'     => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'user',
                'screen'     => 'home',
                'type'       => 'menu',
                'action'     => 'colonies',
                'access'     => 1,
                'userId'     => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'user',
                'screen'     => 'home',
                'type'       => 'menu',
                'action'     => 'families',
                'access'     => 1,
                'userId'     => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'user',
                'screen'     => 'home',
                'type'       => 'menu',
                'action'     => 'partners',
                'access'     => 1,
                'userId'     => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'user',
                'screen'     => 'home',
                'type'       => 'menu',
                'action'     => 'lvlh',
                'access'     => 1,
                'userId'     => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'user',
                'screen'     => 'home',
                'type'       => 'menu',
                'action'     => 'ca',
                'access'     => 0,
                'userId'     => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'user',
                'screen'     => 'home',
                'type'       => 'menu',
                'action'     => 'hr',
                'access'     => 2,
                'userId'     => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'user',
                'screen'     => 'home',
                'type'       => 'menu',
                'action'     => 'edu',
                'access'     => 0,
                'userId'     => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );

        #Donor
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'admin',
                'screen'     => 'donor',
                'type'       => 'action-menu',
                'action'     => 'edit',
                'access'     => 1,
                'userId'     => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'admin',
                'screen'     => 'donor',
                'type'       => 'action-menu',
                'action'     => 'save',
                'access'     => 1,
                'userId'     => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('userAccessSpecifier')->insert(
            [
                'userType'   => 'admin',
                'screen'     => 'donor',
                'type'       => 'action-menu',
                'action'     => 'delete',
                'access'     => 1,
                'userId'     => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
    }
}
