<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->bigInteger('Fk_designation')->unsigned();
            $table->bigInteger('Fk_department')->unsigned();
            $table->string('Phone_number');
            $table->timestamps();
        });

        //Insert Data

        DB::table('users')->insert(
            array(
                'Name' => 'John Due',
                'Fk_designation' =>1,
                'Fk_department' => 1,
                'Phone_number' => 9061395796,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('users')->insert(
            array(
                'Name' => 'Tommy Mark',
                'Fk_designation' => 2,
                'Fk_department' => 2,
                'Phone_number' => 9865248758,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('users')->insert(
            array(
                'Name' => 'Angela Mattera',
                'Fk_designation' => 4,
                'Fk_department' => 3,
                'Phone_number' => 9865478524,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('users')->insert(
            array(
                'Name' => 'Peter Stain John',
                'Fk_designation' => 6,
                'Fk_department' => 4,
                'Phone_number' => 9856245785,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('users')->insert(
            array(
                'Name' => 'Catherin',
                'Fk_designation' => 9,
                'Fk_department' => 6,
                'Phone_number' => 9658754824,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('users')->insert(
            array(
                'Name' => 'Dorris Mclntyre',
                'Fk_designation' => 5,
                'Fk_department' => 5,
                'Phone_number' => 9789658745,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('users')->insert(
            array(
                'Name' => 'Chris Trevino',
                'Fk_designation' => 3,
                'Fk_department' => 3,
                'Phone_number' => 9658745896,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('users')->insert(
            array(
                'Name' => 'Jessy Jane',
                'Fk_designation' => 8,
                'Fk_department' => 5,
                'Phone_number' => 9061357845,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('users')->insert(
            array(
                'Name' => 'Michael Roberston',
                'Fk_designation' => 4,
                'Fk_department' => 5,
                'Phone_number' => 9061357845,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            )
        );


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
