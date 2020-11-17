<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designations', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->timestamps();
        });

        //Insert Data Into Table

        DB::table('designations')->insert(
            array(
                'Name' => 'Marketing Manager',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('designations')->insert(
            array(
                'Name' => 'Mobile Application Dev',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('designations')->insert(
            array(
                'Name' => 'Business Executive',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('designations')->insert(
            array(
                'Name' => 'Marketing Manager',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('designations')->insert(
            array(
                'Name' => 'Project Coordiantor',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('designations')->insert(
            array(
                'Name' => 'Cheif Technology Officer',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('designations')->insert(
            array(
                'Name' => 'Cheif Marketing Officer',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('designations')->insert(
            array(
                'Name' => 'Operations Manager',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            )
        );
        DB::table('designations')->insert(
            array(
                'Name' => 'Purchasing Manager',
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
        Schema::dropIfExists('designations');
    }
}
